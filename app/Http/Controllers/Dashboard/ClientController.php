<?php

namespace App\Http\Controllers\Dashboard;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientController extends BackEndController
{
    public function __construct(Client $model)
    {
        $this->model = $model;
    }

    public function store(Request $request)
    {
        $request['password'] = bcrypt($request['password']);
        $this->model->create($request->all());
        
        session()->flash('action', 'تم الاضافه بنجاح'); 
        return redirect()->route($this->getClassNameFromModel().'.index');
    }

    public function update(Request $request, $id)
    {

       
        $row = $this->model->FindOrFail($id);
        $requestArray = $request->all();
        if(isset($requestArray['password']) && $requestArray['password'] != ""){
            $requestArray['password'] =  Hash::make($requestArray['password']);
        }else{
            unset($requestArray['password']);
        }
        
        
        // $requestArray['user_id'] = Auth::user()->id;
        $row->update($requestArray);

        session()->flash('action', 'تم التحديث بنجاح');
        return redirect()->route($this->getClassNameFromModel().'.index');
    }
}
