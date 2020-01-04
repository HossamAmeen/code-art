<?php

namespace App\Http\Controllers\APIs;

use Illuminate\Http\Request;
use App\Http\Controllers\BackController;
use App\Models\LastWork;

class LastWorkController extends BackController
{
    public function __construct(LastWork $model)
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
        $add = $this->model::find($id);
        $add->update($request->all());

        return $this->APIResponse(null, null, 200);
    }
}
