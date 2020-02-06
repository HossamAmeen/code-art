<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
class UploadImageController extends Controller
{

  public function __invoke(Request $request)
   {
     $photo = $request->file('image');
     $fileName = time().str_random('10').'.'.$photo->getClientOriginalExtension();
     $destinationPath = public_path('temps/');
     $image = Image::make($photo->getRealPath())->resize(400, 400);
      if(!is_dir($destinationPath) ){
          mkdir($destinationPath);
      }
     $image->save($destinationPath.$fileName,60);

     $array = [
      'data' =>'temps/'.$fileName,
      'status' =>  "success" ,
      'error' =>null,
  ];

  return response($array , 200);
     return 'temps/'.$fileName;
   }
}
