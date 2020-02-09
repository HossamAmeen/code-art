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
        //    return $request->all();

        $requestArray = $request->all();
        if (isset($requestArray['image'])) {
            $fileName = $this->uploadImage($request);
            $requestArray['image'] = $fileName;
        }
        $this->model->create($requestArray);
        session()->flash('action', 'تم الاضافه بنجاح');

        return redirect()->route($this->getClassNameFromModel() . '.index');
    }

    public function update($id, Request $request)
    {

        $row = $this->model->FindOrFail($id);
        $requestArray = $request->all();
        if (isset($requestArray['image'])) {
            $fileName = $this->uploadImage($request);
            $requestArray['image'] = $fileName;
        }

        $requestArray['user_id'] = Auth::user()->id;
        $row->update($requestArray);

        session()->flash('action', 'تم التحديث بنجاح');
        return redirect()->route($this->getClassNameFromModel() . '.index');
    }

    public function append()
    {
        $data['categories'] = Category::orderBy('id', 'DESC')->get();
        return  $data ;
    }

}
