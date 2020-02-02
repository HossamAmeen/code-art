<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\BackEndController;
use Illuminate\Http\Request;
use App\Models\ServiceProviderService;

class ServiceProviderServiceController extends BackEndController
{
    public function __construct(ServiceProviderService $model)
    {
        $this->model = $model;
    }

    public function store(Request $request)
    {
        if($request->image)
        {
            $source = public_path($request->image);
            $destination = "Service-Provider-Service" . substr($request->image, strpos($request->image, '/'));
            $request['image'] = $destination;
            copy($source, $destination);
        }

    	$this->model->create($request->all());

        return $this->APIResponse(null, null, 201);
    }

    public function update(Request $request, $id)
    {
        $serviceProviderService = $this->model::find($id);
        if($request->image)
        {
            $source = public_path($request->image);
            $destination = "Service Provider Service".substr($request->image, strpos($request->image , '/') ) ;
            $request['image'] = $destination;
            copy( $source, $destination );
        }
        $serviceProviderService->update($request->all());

        return $this->APIResponse(null, null, 200);
    }

}
