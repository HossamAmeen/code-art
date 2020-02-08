<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Category;
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
            $fileName = $this->uploadImage($request );
            $request['image'] = $fileName;
        }
        $request['special'] = 1;
        $this->model->create($request->all());

        return redirect()->route($this->getClassNameFromModel().'.index');
    }

    public function update(Request $request, $id)
    {
        $serviceCategory = $this->model::find($id);
        if($request->image)
        {
            $fileName = $this->uploadImage($request );
            $request['image'] = $fileName;
        }
        $serviceCategory->update($request->all());

        return redirect()->route($this->getClassNameFromModel().'.index');
    }

    public function append()
    {
        $data['categories'] = Category::orderBy('id', 'DESC')->get();
        return  $data ;
    }

}
