<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\ServiceQuestion;
use App\Models\ServiceQuestionMultipleChoice;
use Illuminate\Http\Request;

class ServiceQuestionController extends BackEndController
{
    public function __construct(ServiceQuestion $model)
    {
        $this->model = $model;
    }

    public function store(Request $request)
    {
        $question = $this->model->create($request->all());
        $request['service_question_id'] = $question->id;
        if($request->type == 'multi_choice')
        {
            foreach ($request['choices'] as $choice)
                ServiceQuestionMultipleChoice::create([
                    'choice' => $choice,
                    'service_question_id' => $question->id
                ]);
        }
        if($request->type == 'file')
        {
            $fileName = $this->uploadImage($request->file);
            ServiceQuestionMultipleChoice::create([
                'choice' => $fileName,
                'service_question_id' => $question->id
            ]);
        }

        return redirect()->route($this->getClassNameFromModel().'.index');
    }

    public function update(Request $request, $id)
    {
        $serviceType = $this->model::find($id);
        $serviceType->update($request->all());

        return redirect()->route($this->getClassNameFromModel().'.index');
    }

}
