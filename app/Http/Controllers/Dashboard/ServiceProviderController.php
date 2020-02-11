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

    // public function store(Request $request)
    // {
    //     if($request->image)
    //     {
    //         $fileName = $this->uploadImage($request );
    //         $request['image'] =  $fileName;
    //     }

    //     $request['password'] = Hash::make('password');
    //     $this->model->create($request->all());

    //     return redirect()->route($this->getClassNameFromModel().'.index');
    // }

    // public function update(Request $request, $id)
    // {
    //     $add = $this->model::find($id);

    //     if($request->image)
    //     {
    //         $source = public_path($request->image);
    //         $destination = "Service Provider".substr($request->image, strpos($request->image , '/') ) ;
    //         $request['image'] = $destination;
    //         copy( $source, $destination );
    //     }

    //     $add->update($request->all());

    //     return redirect()->route($this->getClassNameFromModel().'.index');
    // }
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
           
            // $requestArray['user_id'] = Auth::user()->id;
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
            
            // $requestArray['user_id'] = Auth::user()->id;
            $row->update($requestArray);
    
            
      
            session()->flash('action', 'تم التحديث بنجاح');
            return redirect()->route($this->getClassNameFromModel().'.index');
        }
}
