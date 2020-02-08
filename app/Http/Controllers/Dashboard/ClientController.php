<?php

namespace App\Http\Controllers\Dashboard;
use App\Models\Client;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientController extends BackEndController
{
    public function __construct(Client $model)
    {
        $this->model = $model;
    }

    public function show($client_id)
    {
       
        $rows = Order::where('client_id',$client_id)->orderBy('id', 'DESC')->get();
        $moduleName = "orders";
        $sModuleName = $this->getModelName();
        $routeName = $this->getClassNameFromModel();
        $pageTitle = "Control ".$moduleName;
        $pageDes = "Here you can add / edit / delete " .$moduleName;
        // return $rows; 
        // return Auth::user()->role;
        return view('back-end.orders.index', compact(
            'rows',
            'pageTitle',
            'moduleName',
            'pageDes',
            'sModuleName',
            'routeName'
        ));
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
        $client = $this->model::find($id);
        if(isset($request->password))
        {
            $request['password'] = bcrypt($request->password);
        }

        $client->update($request->all());

        return redirect()->route($this->getClassNameFromModel().'.index');
    }
}
