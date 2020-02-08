<?php

namespace App\Http\Controllers\Dashboard;

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

    function with()
    {
        return ['client', 'service'];
    }
}
