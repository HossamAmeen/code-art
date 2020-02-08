<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
// use App\Http\Controllers\BackEndController;
use App\Models\CategoryQuestion;


class CategoryQuestionController extends BackEndController
{
    public function __construct(CategoryQuestion $model)
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
      $this->model::find($id)->update($request->all());

     return $this->APIResponse(null, null, 200);
    }
}
