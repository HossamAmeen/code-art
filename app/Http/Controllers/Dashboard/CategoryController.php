<?php

namespace App\Http\Controllers\APIs;

use App\Http\Controllers\BackEndController;
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

        return $this->APIResponse(null, null, 201);
    }

    public function update(Request $request, $id)
    {
        $category = $this->model::find($id);
        $category->update($request->all());

        return $this->APIResponse(null, null, 200);
    }

}