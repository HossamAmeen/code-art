<?php

namespace App\Http\Controllers\WebSite;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceProviderController extends Controller
{
    public function login(Request $request)
    {
        
        $credentials = request(['email', 'password']);

        if(!Auth::guard('service-provider')->attempt($credentials, false, false)){
            session()->flash('loginAction', 'اسم المستخدم او كلمة المرور غير صحيحه'); 
            return redirect()->back();
        }
        $client = Client::where("email", request('email'))->first();
        return redirect()->route('home');
      
    }

    public function logout(Request $request)
    {
        Auth::guard('client')->logout();

        // return Auth::guard('client')->id;
        return redirect()->route('home');
    }
}
