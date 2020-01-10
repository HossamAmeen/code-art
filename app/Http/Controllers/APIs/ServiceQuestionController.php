<?php

namespace App\Http\Controllers\APIs;

use App\Http\Controllers\BackEndController;
use App\Models\ServiceQuestion;
use App\Models\ServiceQuestionBoolean;
use App\Models\ServiceQuestionFile;
use App\Models\ServiceQuestionMultipleChoice;
use App\Models\ServiceQuestionText;
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

        return $this->APIResponse(null, null, 201);
    }

    public function update(Request $request, $id)
    {
        $serviceType = $this->model::find($id);
        $serviceType->update($request->all());

        return $this->APIResponse(null, null, 200);
    }

}
