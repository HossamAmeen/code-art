<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\BackEndController;
use App\Models\Question;

class QuestionController extends BackEndController
{
    public function __construct(Question $model)
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
