<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Client;
use App\Models\ServiceProviderService;
use App\Models\WishList;
use Illuminate\Http\Request;

class WishlistController extends BackEndController
{
    public function __construct(WishList $model)
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
        $data['clients'] = Client::orderBy('id', 'DESC')->get();
        $data['services'] = ServiceProviderService::orderBy('id', 'DESC')->get();
        return  $data ;
    }
}
