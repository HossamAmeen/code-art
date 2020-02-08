<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\ServiceCategory;

class ServiceCategoryController extends BackEndController
{
    public function __construct(ServiceCategory $model)
    {
        $this->model = $model;
    }

    public function store(Request $request)
    {
        if($request->image)
        {
            $source = public_path($request->image);
            $destination = "Service Category".substr($request->image, strpos($request->image , '/') ) ;
            $request['image'] = $destination;
            copy( $source, $destination );
        }

        $this->model->create($request->all());

        return redirect()->route($this->getClassNameFromModel().'.index');
    }

    public function update(Request $request, $id)
    {
        $serviceCategory = $this->model::find($id);
        if($request->image)
        {
            $source = public_path($request->image);
            $destination = "Service Category".substr($request->image, strpos($request->image , '/') ) ;
            $request['image'] = $destination;
            copy( $source, $destination );
        }
        $serviceCategory->update($request->all());

        return redirect()->route($this->getClassNameFromModel().'.index');
    }

}
