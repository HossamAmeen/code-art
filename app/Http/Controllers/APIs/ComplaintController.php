<?php

namespace App\Http\Controllers\APIs;

use Illuminate\Http\Request;
use App\Http\Controllers\BackController;
use App\Models\Complaint;

class ComplaintController extends BackController
{
    public function __construct(Complaint $model)
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
        $complaint = $this->model::find($id);
        $complaint->update($request->all());

        return $this->APIResponse(null, null, 200);
    }


}

