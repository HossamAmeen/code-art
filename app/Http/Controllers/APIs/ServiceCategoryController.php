<?php

namespace App\Http\Controllers\APIs;

use Illuminate\Http\Request;
use App\Http\Controllers\BackEndController;
use App\Models\ServiceCategory;

class ServiceCategoryController extends BackEndController
{
    public function __construct(ServiceCategory $model)
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
        $serviceCategory = $this->model::find($id);
        $serviceCategory->update($request->all());

        return $this->APIResponse(null, null, 200);
    }

}
