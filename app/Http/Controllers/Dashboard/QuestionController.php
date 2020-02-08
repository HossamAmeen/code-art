<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\CategoryQuestion;

class QuestionController extends BackEndController
{
    public function __construct(Question $model)
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
      $this->model::find($id)->update($request->all());

        return redirect()->route($this->getClassNameFromModel().'.index');
    }

    public function append()
    {
        $data['questions'] = CategoryQuestion::orderBy('id', 'DESC')->get();
        return  $data ; 
    }
}
