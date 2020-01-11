<?php

namespace App\Http\Controllers\Dashboard;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\BackEndController;

class ClientController extends BackEndController
{
    public function __construct(Client $model)
    {
        $this->model = $model;
    }

    public function store(Request $request)
    {
        $request['password'] = bcrypt($request['password']);
        $this->model->create($request->all());
        
        return $this->APIResponse(null, null, 201);
    }

    public function update(Request $request, $id)
    {

        $client = $this->model::find($id);
        if(isset($request->password))
        {
            $request['password'] = bcrypt($request->password);
        }
       
        $client->update($request->all());

        return $this->APIResponse(null, null, 200);
    }
}
