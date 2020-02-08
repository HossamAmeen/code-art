<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\Adds;

class AddsController extends BackEndController
{
    public function __construct(Adds $model)
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
