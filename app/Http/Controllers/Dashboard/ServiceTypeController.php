<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\ServiceProvider;
use App\Models\ServiceType;
use Illuminate\Http\Request;

class ServiceTypeController extends BackEndController
{
    public function __construct(ServiceType $model)
    {
        $this->model = $model;
    }

    public function store(Request $request)
    {
        $this->model->create($request->all());

        return redirect()->route($this->getClassNameFromModel().'.index');
    }

    public function update(Request $request, $id)
    {
        $serviceType = $this->model::find($id);
        $serviceType->update($request->all());

        return redirect()->route($this->getClassNameFromModel().'.index');
    }

    public function append()
    {
        $data['service_providers'] = ServiceProvider::orderBy('id', 'DESC')->get();
        return  $data ;
    }

}
