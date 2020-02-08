<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\ServiceProvider;
use Hash;

class ServiceProviderController extends BackEndController
{
    public function __construct(ServiceProvider $model)
    {
        $this->model = $model;
    }

    public function store(Request $request)
    {
        if($request->image)
        {
            $source = public_path($request->image);
            $destination = "Service Provider".substr($request->image, strpos($request->image , '/') );
            $request['image'] = $destination;
            copy( $source, $destination );
        }

        $request['password'] = Hash::make('password');
        $this->model->create($request->all());

        return redirect()->route($this->getClassNameFromModel().'.index');
    }

    public function update(Request $request, $id)
    {
        $add = $this->model::find($id);

        if($request->image)
        {
            $source = public_path($request->image);
            $destination = "Service Provider".substr($request->image, strpos($request->image , '/') ) ;
            $request['image'] = $destination;
            copy( $source, $destination );
        }

        $add->update($request->all());

        return redirect()->route($this->getClassNameFromModel().'.index');
    }
}
