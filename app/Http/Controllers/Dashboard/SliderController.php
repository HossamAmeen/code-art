<?php

namespace App\Http\Controllers\Dashboard;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends BackEndController
{
    public function __construct(Slider $model)
    {
        $this->model = $model;
    }

    public function store(Request $request)
    {
       
        $requestArray = $request->all();
        if(isset($requestArray['image']) )
        {
            $fileName = $this->uploadImage($request );
            $requestArray['image'] =  $fileName;
        }
        $this->model->create($requestArray);
        session()->flash('action', 'تم الاضافه بنجاح'); 
        return redirect()->route($this->getClassNameFromModel().'.index');
    }

    public function update(Request $request, $id)
    {
        $row = $this->model->FindOrFail($id);
        $requestArray = $request->all();
       if(isset($requestArray['image']) )
        {
            $fileName = $this->uploadImage($request );
            $requestArray['image'] =  $fileName;
        }
        $row->update($requestArray);
        session()->flash('action', 'تم التحديث بنجاح');
        return redirect()->route($this->getClassNameFromModel().'.index');
    }

   
}
