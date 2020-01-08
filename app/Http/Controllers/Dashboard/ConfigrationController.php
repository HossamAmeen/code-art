<?php

namespace App\Http\Controllers\Dashboard;
use App\Models\Configration;
use App\Http\Controllers\BackEndController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConfigrationController extends BackEndController
{
    public function __construct(Configration $model)
    {
        $this->model = $model;
    }
    public function index()
    {
       $configration = Configration::where('id',1)->get($this->attributes());
       return $this->APIResponse($configration, null, 201);
    }
    
    public function update(Request $request , $id = 1 )
    {
        $configration = Configration::find($id);
        $configration->update($request->all());
        return $this->APIResponse(null, null, 200);
    }
}
