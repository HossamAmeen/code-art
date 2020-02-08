<?php

namespace App\Http\Controllers\Dashboard;

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

        return redirect()->route($this->getClassNameFromModel().'.index');
    }

    public function update(Request $request, $id)
    {
        $category = $this->model::find($id);
        $category->update($request->all());

        return redirect()->route($this->getClassNameFromModel().'.index');
    }

}
