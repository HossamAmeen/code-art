<?php

namespace App\Http\Controllers\WebSite;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\ServiceCategory;
use App\Models\ServiceProvider;
use App\Models\ServiceProviderService;
use App\Models\ServiceType;
use Auth;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Image;

class ServiceProviderController extends Controller
{
    public function login(Request $request)
    {

        $credentials = request(['email', 'password']);

        if (!Auth::guard('service-provider')->attempt($credentials, false, false)) {
            session()->flash('loginAction', 'اسم المستخدم او كلمة المرور غير صحيحه');
            return redirect()->back();
        }
        $client = Client::where("email", request('email'))->first();
        return redirect()->route('serviceProvider/home');

    }

    public function logout(Request $request)
    {

        Auth::guard('service-provider')->logout();

        return redirect()->route('home');
    }

    public function account(Request $request)
    {
        $serviceProvider = ServiceProvider::findOrFail(Auth::guard('service-provider')->user()->id);
        if ($request->isMethod('post')) {
            $requestArray = $request->all();
            if (isset($requestArray['password']) && $requestArray['password'] != "") {
                $requestArray['password'] = Hash::make($requestArray['password']);
            } else {
                unset($requestArray['password']);
            }

            $serviceProvider->update($requestArray);
            session()->flash('action', 'تم التحديث بنجاح');
            // return $client;

        }

        $pageTitle = "تجسيل حساب جديد";
        $cities = \App\Models\City::all();
        $countries = \App\Models\Country::all();
        return view('web.serviceProvider.settings', compact('pageTitle', 'cities', 'countries', 'serviceProvider'));
    }

    public function orders()
    {
        $pageTitle = "الطلبات";
        $orders = \App\Models\Order::where('service_provider_id', Auth::guard('service-provider')->user()->id)
            ->where('status', 1)
            ->get();
        // return $orders;
        return view('web.serviceProvider.orders', compact('pageTitle', 'orders'));
    }

    public function changeStatusOrder($id , $status)
    {
        $order = \App\Models\Order::findOrFail($id);
        $order->status = $status;
        $order->save();
        return redirect()->back();
    }
    public function servicesForProvider()
    {
        $pageTitle = "خدمات مزود الخدمة";
        $services = ServiceProviderService::where('service_provider_id', Auth::guard('service-provider')->user()->id)->get();
        $service_provider = ServiceProvider::find(Auth::guard('service-provider')->user()->id);
        $services_count = ServiceProviderService::where('service_provider_id', Auth::guard('service-provider')->user()->id)->get()->count();

        return view('web.serviceProvider.user-profile',
            compact('pageTitle', 'services', 'service_provider', 'services_count'));
    }

    public function showCategories()
    {

        $pageTitle = "الخدمات";
        $categories = \App\Models\Category::get();
        return view('web.serviceProvider.show_categories', compact('pageTitle', 'categories'));

    }

    public function showServices($id)
    {
        $pageTitle = "الخدمات";
        $services = ServiceCategory::where('category_id', $id)->get();
        return view('web.serviceProvider.show_services', compact('pageTitle', 'services'));
    }

    public function addService($id, Request $request)
    {

        $pageTitle = "إضافة خدمه";
        if ($request->isMethod('post')) {

            $requestArray = $request->all();
            $requestArray['service_provider_id'] = Auth::guard('service-provider')->user()->id;
            $requestArray['service_category_id'] = $id;
            $requestArray['price'] = $request->price[0];
            if (isset($request->image)) {
                $requestArray['image'] = $this->uploadImage($request);
            }

            $service = ServiceProviderService::create($requestArray);
            // return  $service;
            for ($i = 0; $i < count($request->days); $i++) {
                ServiceType::create(
                    [
                        'price' => $request->price[$i],
                        'days' => $request->days[$i],
                        'service_provider_service_id' => $service->id,
                    ]
                );
            }

            return redirect()->route('serviceProvider/home');
        }
        return view('web.serviceProvider.add_service', compact('pageTitle', 'id'));
    }

    public function updateService($id, Request $request)
    {

        $pageTitle = "تعديل خدمه";
        $service = ServiceProviderService::findOrFail($id);
        if ($request->isMethod('post')) {

            $requestArray = $request->all();
            $requestArray['service_provider_id'] = Auth::guard('service-provider')->user()->id;
            $requestArray['service_category_id'] = $id;
            $requestArray['price'] = 2;
            if (isset($request->image)) {
                $requestArray['image'] = $this->uploadImage($request);
            }

            $service->update($requestArray);
            $servicesType = ServiceType::where('service_provider_service_id', $id)->delete();
            for ($i = 0; $i < count($request->days); $i++) {
                ServiceType::create(
                    [
                        'price' => $request->price[$i],
                        'days' => $request->days[$i],
                        'service_provider_service_id' => $service->id,
                    ]
                );
            }
            // return  $service;
            return redirect()->route('serviceProvider/home');
        }
        $servicesType = ServiceType::where('service_provider_service_id', $id)->get();
        $prices = array();
        $days = array();
        foreach ($servicesType as $type) {
            $prices[] = $type->price;
            $days[] = $type->days;
        }
        //   return $days;
        return view('web.serviceProvider.edit_service', compact('pageTitle', 'service', 'prices', 'days', 'id'));
    }

    public function changeVisionService($id)
    {
        $service = ServiceProviderService::findOrFail($id);
        $service->is_hidden = !$service->is_hidden;
        $service->save();
        return redirect()->back();
    }

    public function deleteService($id)
    {
        $service = ServiceProviderService::findOrFail($id)->delete();
        return redirect()->back();
    }

    protected function uploadImage($request, $height = 400, $width = 400)
    {

        $photo = $request->file('image');
        $fileName = time() . str_random('10') . '.' . $photo->getClientOriginalExtension();
        $destinationPath = public_path('uploads/serviceProviderService/');
        $image = Image::make($photo->getRealPath())->resize($height, $width);

        // return $destinationPath;

        if (!is_dir($destinationPath)) {
            mkdir($destinationPath);
        }
        $image->save($destinationPath . $fileName);
        return 'uploads/serviceProviderService/' . $fileName;
    }

}
