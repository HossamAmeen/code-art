<?php

namespace App\Http\Controllers\APIs;

use Illuminate\Http\Request;
use App\Http\Controllers\BackController;
use App\Models\ServiceProviderService;

class ServiceProviderServiceController extends BackController
{
    public function __construct(ServiceProviderService $model)
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
        $serviceProviderService = $this->model::find($id);
        $serviceProviderService->update($request->all());

        return $this->APIResponse(null, null, 200);
    }

}
