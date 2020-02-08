<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
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

        return redirect()->route($this->getClassNameFromModel().'.index');
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

        return redirect()->route($this->getClassNameFromModel().'.index');
    }
}
