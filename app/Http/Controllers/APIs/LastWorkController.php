<?php

namespace App\Http\Controllers\APIs;

use Illuminate\Http\Request;
use App\Http\Controllers\BackEndController;
use App\Models\LastWork;

class LastWorkController extends BackEndController
{
    public function __construct(LastWork $model)
    {
        $this->model = $model;
    }

    public function store(Request $request)
    {
        if($request->image)
        {
            $source = public_path($request->image);
            $destination = "Last Work".substr($request->image, strpos($request->image , '/') );
            $request['image'] = $destination;
            copy( $source, $destination );
        }

        $this->model->create($request->all());

        return $this->APIResponse(null, null, 201);
    }

    public function update(Request $request, $id)
    {
        $add = $this->model::find($id);
        
        if($request->image)
        {
            $source = public_path($request->image);
            $destination = "Last Work".substr($request->image, strpos($request->image , '/') ) ;
            $request['image'] = $destination;
            copy( $source, $destination );
        }

        $add->update($request->all());

        return $this->APIResponse(null, null, 200);
    }
}
