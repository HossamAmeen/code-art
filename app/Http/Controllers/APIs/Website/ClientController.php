<?php

namespace App\Http\Controllers\APIs\Website;

use App\Http\Controllers\APIResponseTrait;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\User;
use App\Models\Order;
use App\Models\WishList;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\Dashboard\ClientRequest;

class ClientController extends Controller
{   
    use APIResponseTrait;

    public function register(ClientRequest $request)
    {
        if (isset($request->validator) && $request->validator->fails())
        {
            return $this->APIResponse(null , $request->validator->messages() ,  400);
        }
        $request['password'] = bcrypt($request->password);
        $client = Client::create($request->all());
        auth()->login($client);
        $success['token'] =  $client->createToken('token')->accessToken;
        return response()->json($success, 200);
    }

    public function login()
    {
        $credentials = request(['email', 'password']);
        
        if(!Auth::guard('client')->attempt($credentials, false, false)){
            $error = "Unauthorized";
            return $this->APIResponse(null, $error, 400);
        }
        $client = Client::where("email", request('email'))->first();
        $success['token'] =  $client->createToken('token')->accessToken;
        return response()->json($success, 200);
       
    }
    public function getAcount()
    {
        
    }
    public function updateProfile(Request $request)
    {
        $client = Client::find( Auth::guard('client-api')->user()->id );
        if(isset($request->password))
        {
            $request['password'] = bcrypt($request->password);
        }
       
        $client->update($request->all());

        return $this->APIResponse(null, null, 200);
    }
    public function wishlist()
    {
        $wishlists = WishList::where('client_id' , Auth::guard('client-api')->user()->id)
                        ->with('service')
                        ->get();

        return $this->APIResponse($wishlists, null, 201);               
    }
    public function showOrders()
    {
        $carts = Order::where('client_id' , Auth::guard('client-api')->user()->id)
        ->where('status', 4)
        ->with('service')
        ->get();

        return $this->APIResponse($carts, null, 201); 
    }

    public function cart()
    {
        $carts = Order::where('client_id' , Auth::guard('client-api')->user()->id)
                        ->where('status' , '<' , 4)
                        ->with('service')
                        ->get();

        return $this->APIResponse($carts, null, 201); 
    }
    
}

