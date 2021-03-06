<?php

namespace App\Http\Controllers\Dashboard;

// use App\Http\Controllers\BackEndController;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends BackEndController
{
    public function __construct(Category $model)
    {
        $this->model = $model;
    }

    public function store(Request $request)
    {
        $this->model->create($request->all());

        session()->flash('action', 'تم الاضافه بنجاح');
        return redirect()->route($this->getClassNameFromModel().'.index');
    }

    public function update(Request $request, $id)
    {
        $category = $this->model::find($id);
        $category->update($request->all());

        session()->flash('action', 'تم التحديث بنجاح');
        return redirect()->route($this->getClassNameFromModel().'.index');
    }

}
