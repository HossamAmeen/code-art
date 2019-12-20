<?php

namespace App\Http\Controllers;
use App\Http\Controllers\APIResponseTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Image, Carbon, File;

class BackController extends Controller
{
    use APIResponseTrait;
    protected $model;
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $rows = $this->model;
        $rows = $this->filter($rows);
        $with = $this->with();
        if (!empty($with))
        {
            $rows = $rows->with($with);
        }
        $attributes = $this->attributes();
        $rows = $rows->orderBy('id', 'DESC')->get($attributes);

        return $this->APIResponse($rows, null, 200);
    }

    public function show($id)
    {
        $item = $this->model->FindOrFail($id);
        $with = $this->with();
        // return $with;
        if (!empty($with))
        {
            $item = $this->model::with($with)->get()->find($id);
            // $rows = $rows->with($with);
        }
        return $this->APIResponse($item, null, 200);
    }

    public function destroy($id)
    {

        $row = $this->model->FindOrFail($id);

        if(isset($row->file) && is_file($row->file))
        {
            unlink($row->file);
        }
        $row->delete();
        return $this->APIResponse(null, null, 200);
    }

    protected function filter($rows)
    {
        return $rows;
    }

    protected function with()
    {
        return [];
    }

    protected function getClassNameFromModel()
    {
        return strtolower($this->pluralModelName());
    }

    protected function pluralModelName()
    {
        return str_plural($this->getModelName());
    }

    protected function getModelName()
    {
        return class_basename($this->model);
    }

    protected function append()
    {
        return [];
    }

    protected function attributes()
    {
        return '*';
    }

    protected function storeFiles($employeeName, $image, $folderName)
    {
        $mytime = Carbon\Carbon::now();

        $path = public_path('/'. $this->pluralModelName() . '/' . $folderName);

        if(!File::isDirectory($path))
        {
            File::makeDirectory($path, 0777, true, true);
        }

        $name = $employeeName . ' ' . $mytime->toDateTimeString() .'.'.$image->getClientOriginalExtension();

        $name = str_replace(' ', '_', $name);
        $name = str_replace(':', '_', $name);
        $destinationPath = $path;

        $image->move($destinationPath, $name);

        return $this->pluralModelName() . '/' . $folderName . '/' . $name;
    }

    protected function storeFile($fileName, $file)
    {
        $mytime = Carbon\Carbon::now();

        $path = public_path('/'. $this->pluralModelName());
        if(!File::isDirectory($path))
        {
            File::makeDirectory($path, 0777, true, true);
        }

        $name = $fileName. '_' .$this->pluralModelName() . ' ' . $mytime->toDateTimeString() .'.'.$file->getClientOriginalExtension();

        $name = str_replace(' ', '_', $name);
        $destinationPath = public_path('/'. $this->pluralModelName() );

        $file->move($destinationPath, $name);

//        return substr($destinationPath, 34) . '/' . $name;
        return $this->pluralModelName()  .'/'. $name ;
    }

}
