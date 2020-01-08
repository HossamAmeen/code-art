<?php

namespace App\Http\Controllers\APIs;

use App\Models\ServiceType;
use Illuminate\Http\Request;
use App\Http\Controllers\BackEndController;

class ServiceTypeController extends BackEndController
{
    public function __construct(ServiceType $model)
    {
        $this->model = $model;
    }

    public function store(Request $request)
    {
        $this->model->create($request->all());

        return $this->APIResponse(null, null, 201);
    }

    public function update(Request $request, $id)
    {
        $serviceType = $this->model::find($id);
        $serviceType->update($request->all());

        return $this->APIResponse(null, null, 200);
    }

}
