<?php

namespace App\Http\Controllers\WebSite;

use App\Models\ServiceProvider;
use App\Models\ServiceProviderService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceProviderController extends Controller
{
    public function services()
    {
        $pageTitle = "خدمات موزدين الخدمة" ;
        $services = ServiceProviderService::where('service_provider_id', 1)->get();
        $service_provider = ServiceProvider::find(1);
        $services_count = ServiceProviderService::where('service_provider_id', 1)->get()->count();

        return view('web.serviceProvider.user-profile',
            compact('pageTitle', 'services', 'service_provider', 'services_count'));
    }

    public function servicesDetails($id)
    {
        return $id;
    }

}
