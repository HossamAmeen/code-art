<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\APIResponseTrait;
use App\Http\Controllers\Controller;
use App\Models\Client;
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
        Client::create($request->all());
        
        return $this->APIResponse(null, null, 201);
    }
    
}

