<?php

namespace App\Http\Controllers\Dashboard;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\BackEndController;

class SliderController extends BackEndController
{
    public function __construct(Slider $model)
    {
        $this->model = $model;
    }

    public function store(Request $request)
    {
        if($request->image){
            $destination = "upload/".$this->pluralModelName().substr($request->image, strpos($request->image , '/') ) ;
            rename( $request->image, $destination );
        }
        $request['image'] = $destination ; 
        // return $request->image ;
        $this->model->create($request->all());
        return $this->APIResponse(null, null, 201);
    }

    public function update(Request $request, $id)
    {
        if($request->image){
            $destination = "upload/".$this->pluralModelName().substr($request->image, strpos($request->image , '/') ) ;
            copy( $request->image, $destination );
        }
        $category = $this->model::find($id);
        $category->update($request->all());
        return $this->APIResponse(null, null, 200);
    }
}
