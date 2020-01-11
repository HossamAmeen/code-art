<?php

namespace App\Http\Controllers\APIs\Website;

use App\Http\Controllers\APIResponseTrait;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\User;
use App\Models\WishList;
use Auth;
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
        $request['password'] = Hash::make($request['password']);
        $client = Client::create($request->all());
        auth()->login($client);
        // return auth()->user();
        return $this->APIResponse(null, null, 201);
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

    public function wishlist()
    {
        $wishlists = WishList::where('client_id' , Auth::guard('client-api')->user()->id)
                        ->get();
        return $this->APIResponse($wishlists, null, 201);               
    }
    public function showOrders()
    {
      return   Auth::guard('client-api')->user()->id;
        return auth()->user();
    }

    public function cart()
    {
        
    }
    
}

