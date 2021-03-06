<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use App\Models\SuggestAddition;

class SuggestAdditionController extends BackEndController
{
    public function __construct(SuggestAddition $model)
    {
        $this->model = $model;
    }

    public function store(Request $request)
    {
        $this->model->create($request->all());

        return redirect()->route($this->getClassNameFromModel().'.index');
    }

    public function update(Request $request, $id)
    {
      $this->model::find($id)->update($request->all());

        return redirect()->route($this->getClassNameFromModel().'.index');
    }

    public function append()
    {
        $data['service_category'] = ServiceCategory::orderBy('id', 'DESC')->get();
        return  $data ;
    }
}
