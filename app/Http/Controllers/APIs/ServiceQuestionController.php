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
        if($request->type == 'text')
        {
            ServiceQuestionText::create($request->all());
        }

        if($request->type == 'multi choice')
        {
            ServiceQuestionMultipleChoice::create($request->all());
        }

        if($request->type == 'boolean')
        {
            ServiceQuestionBoolean::create($request->all());
        }

        if($request->type == 'file')
        {
            ServiceQuestionFile::create([
                'file' => $request->file,
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
