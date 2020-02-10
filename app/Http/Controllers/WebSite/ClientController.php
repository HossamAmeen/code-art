<?php

namespace App\Http\Controllers\WebSite;
use App\Models\ServiceCategory;
use App\Models\ServiceType;
use App\Models\Client;
use Auth;
use Illuminate\Support\Facades\Hash;
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

        $servicesType = ServiceType::where('service_provider_service_id', $service_id)->get();
        $prices = array();
        $days = array();
        $serviceId = array();
        foreach ($servicesType as $type) {
            $serviceId[] = $type->id;
            $prices[] = $type->price;
            $days[] = $type->days;
        }
        return view('web.client.service_details' , compact('pageTitle', 'service' , 'suggestAdditions' ,'serviceId', 'prices' , 'days'));
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

    public function account(Request $request)
    {
        $client = Client::findOrFail(Auth::guard('client')->user()->id);
        if($request->isMethod('post'))
        {
            $requestArray = $request->all();
        if(isset($requestArray['password']) && $requestArray['password'] != ""){
            $requestArray['password'] =  Hash::make($requestArray['password']);
        }else{
            unset($requestArray['password']);
        }
        
            $client->update($requestArray);
            session()->flash('action', 'تم التحديث بنجاح');
            // return $client;
           
        }
           
            $pageTitle = "تعديل بيانات الحساب " ;
            $cities = \App\Models\City::all();
            $countries = \App\Models\Country::all();
            return view('web.client.settings' , compact('pageTitle', 'cities' , 'countries' , 'client'));
    }


    public function wishlist()
    {
        $pageTitle = "القائمه المفضلة" ;
        $wishlists = \App\Models\Wishlist::where('client_id',Auth::guard('client')->user()->id)
        ->get();
        $countWislist = \App\Models\Wishlist::where('client_id',Auth::guard('client')->user()->id)
                                                    ->get()->count();
        return view('web.client.wishlist' , compact('pageTitle', 'wishlists','countWislist' ));
    }

    public function addWishlist($id)
    {
        $wishlist = new \App\Models\Wishlist();
        $wishlist->service_id =$id ;
        $wishlist->client_id = Auth::guard('client')->user()->id;
        $wishlist->save();
        return redirect()->back();
    }
    public function deleteWishlist($id)
    {
        
        $wishlist = \App\Models\Wishlist::find($id);
        // return $wishlist;
        if(isset($wishlist))
        $wishlist->delete();
        return redirect()->back();
    }

    public function addToOrder($id , Request $request)
    {
        $service = \App\Models\ServiceProviderService::findOrFail($id);
        $order = new \App\Models\Order();
        $order->service_id =$id ;
        $order->client_id = Auth::guard('client')->user()->id;
        $order->price = $service->price;
        $order->amount =1 ;
        $order->save();
        return redirect()->back();
    }

    public function addToCart($id , Request $request )
    {
        // return $request->serviceType;
        $cart = new \App\Models\Cart();
        $cart->service_id =$id ;
        $cart->client_id = Auth::guard('client')->user()->id;
        $cart->amount = $request->amount ;
        $cart->save();
        return redirect()->back();
    }

    public function cart()
    {
        $pageTitle = "عربة الشراء" ;
        $carts = \App\Models\Cart::where('client_id',Auth::guard('client')->user()->id)
        ->get();
        $countCart = \App\Models\Cart::where('client_id',Auth::guard('client')->user()->id)
                                                    ->get()->count();
        return view('web.client.cart' , compact('pageTitle', 'carts' , 'countCart'));
    }
    
    public function deleteCart($id)
    {
        $cart = \App\Models\Cart::find($id);
        // return $wishlist;
        if(isset($cart))
        $cart->delete();
        return redirect()->back();
    }
    public function orders()
    {
        $pageTitle = "الطلبات" ;
        $orders = \App\Models\Order::where('client_id',Auth::guard('client')->user()->id)
                                    ->where('status' ,'>' ,1)
        ->get();
        
        return view('web.client.orders' , compact('pageTitle', 'orders' ));
    }

    public function showOrder($id)
    {
        $pageTitle = "الطلبات" ;
        $order = \App\Models\Order::find($id);
        
        return view('web.client.order-status' , compact('pageTitle', 'order' ));
    }

  

    public function rateService ($id , Request $request)
    {
        if($request->isMethod('post'))
        {
            // return $request->rate;
            $service = \App\Models\ServiceProviderService::findOrFail($id);
            $service->rate = ($service->rate + $request->rate ) / 2 ; 
            $service->save();
            $comment = new \App\Models\ServiceComment();
            $comment->service_provider_service_id = $id;
            $comment->client_id = Auth::guard('client')->user()->id;
            $comment->comment = $request->comment;
            $comment->save();
            return redirect()->back();
        }
        $pageTitle = "تقيم الخدمه" ;
        
        
        return view('web.client.rateItem' , compact('pageTitle','id' ));
    }
}
