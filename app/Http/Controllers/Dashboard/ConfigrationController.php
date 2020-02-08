<?php

namespace App\Http\Controllers\Dashboard;
use App\Models\Configration;
use Illuminate\Http\Request;

class ConfigrationController extends BackEndController
{
    public function __construct(Configration $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        return redirect()->route("configrations.edit" , ['id' => 1 ] );
    }

    public function update(Request $request , $id = 1 )
    {
        $configration = Configration::find($id);
        $configration->update($request->all());
        return redirect()->route("configrations.edit" , ['id' => 1 ] );
    }
}
