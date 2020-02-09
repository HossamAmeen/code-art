<?php

namespace App\Http\Controllers\WebSite;
use App\Models\ServiceCategory;
use App\Models\Client;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientController extends Controller
{
    public function category($category_id)
    {
        $pageTitle = "الخدمات" ;
        $firstAdd = \App\Models\Adds::all()->random(1);
        $categoryName = \App\Models\Category::findOrFail($category_id)->name;
        $serviceCategories = ServiceCategory::where('category_id' , $category_id)->get();
        return view('web.client.categories_of_services' , compact('pageTitle' , 'firstAdd' , 'categoryName' , 'serviceCategories'));
  
    }

    public function services($sub_category_id)
    {
        $pageTitle = "مزود الخدمة" ;
        $firstAdd = \App\Models\Adds::all()->random(1);
        $serviceCategoryName = ServiceCategory::findOrFail($sub_category_id)->name;
        $services = \App\Models\ServiceProviderService::where('service_category_id' , $sub_category_id)->get();
        return view('web.client.services' , compact('pageTitle' , 'firstAdd' , 'serviceCategoryName' , 'services'));
  
    }

    public function serviceDetials($service_id)
    {
        $pageTitle = "مزود الخدمة" ;
        $service = \App\Models\ServiceProviderService::findOrFail($service_id);
        $suggestAdditions = \App\Models\SuggestAddition::where('service_category_id' , $service->service_category_id)->get();
        return view('web.client.service_details' , compact('pageTitle', 'service' , 'suggestAdditions'));
    }

    public function register(Request $request)
    {
        if($request->isMethod('post'))
        {
            $request['password'] = bcrypt($request['password']);
            $client = Client::create($request->all());
             
            
     
             return redirect()->route('client/login');
        }
        $pageTitle = "تجسيل حساب جديد" ;
        $cities = \App\Models\City::all();
        $countries = \App\Models\Country::all();
        return view('web.client.register' , compact('pageTitle', 'cities' , 'countries'));
    }

    public function login(Request $request)
    {
        
        $credentials = request(['email', 'password']);

        if(!Auth::guard('client')->attempt($credentials, false, false)){
            session()->flash('loginAction', 'اسم المستخدم او كلمة المرور غير صحيحه'); 
            return redirect()->back();
        }
        $client = Client::where("email", request('email'))->first();
        return redirect()->route('home');
      
    }

    public function logout(Request $request)
    {
        Auth::guard('client')->logout();

        // return Auth::guard('client')->id;
        return redirect()->route('home');
    }

    public function wishlist()
    {
        $pageTitle = "القائمه المفضلة" ;
        $wishlists = \App\Models\Wishlist::all();
        return view('web.client.wishlist' , compact('pageTitle', 'wishlists' ));
    }
}
