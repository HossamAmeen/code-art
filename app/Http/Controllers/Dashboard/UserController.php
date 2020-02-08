<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Image , Auth;

class UserController extends BackEndController
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function store(Request $request){
    //    return $request->all();
       
        $requestArray = $request->all();
        if(isset($requestArray['password']) )
        $requestArray['password'] =  Hash::make($requestArray['password']);
        if(isset($requestArray['image']) )
        {
            $fileName = $this->uploadImage($request );
            $requestArray['image'] =  $fileName;
        }
       
        $requestArray['user_id'] = Auth::user()->id;
        $this->model->create($requestArray);
        session()->flash('action', 'تم الاضافه بنجاح');
       
      
 
        return redirect()->route($this->getClassNameFromModel().'.index');
    }

    public function update($id , Request $request){

        
       
        $row = $this->model->FindOrFail($id);
        $requestArray = $request->all();
        if(isset($requestArray['password']) && $requestArray['password'] != ""){
            $requestArray['password'] =  Hash::make($requestArray['password']);
        }else{
            unset($requestArray['password']);
        }
        if(isset($requestArray['image']) )
        {
            $fileName = $this->uploadImage($request );
            $requestArray['image'] =  $fileName;
        }
        
        $requestArray['user_id'] = Auth::user()->id;
        $row->update($requestArray);

        
  
        session()->flash('action', 'تم التحديث بنجاح');
        return redirect()->route($this->getClassNameFromModel().'.index');
    }

    public function login(Request $request)
    {
        // return $request->all();
    }
   
}
