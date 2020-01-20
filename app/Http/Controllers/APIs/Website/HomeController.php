<?php

namespace App\Http\Controllers\APIs\Website;
use App\Http\Controllers\APIResponseTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ServiceCategory;
use App\Models\Complaint;
use App\Models\Order;
use App\Models\Adds;
use App\Models\Slider;
use DB;

class HomeController extends Controller
{
    use APIResponseTrait;

    public function showSliders()
    {
      return $this->APIResponse( \App\Models\Slider::get(), null, 200);
    }

    public function showAdds()
    {
        return $this->APIResponse( \App\Models\Adds::get(), null, 200);
    }
    public function complaint(Request $request)
    {
        Complaint::create($request->all());

        return $this->APIResponse(null, null, 201);
    }
    public function showCategories()
    {
       return $this->APIResponse( \App\Models\Category::with('services')->get(), null, 200);
    }

    public function showServices(Request $request)
    {
        return $this->APIResponse( \App\Models\ServiceCategory::where('category_id' , $request->category_id)->get(), null, 200);
    }
    public function showCountries()
    {
        return $this->APIResponse( \App\Models\Country::get(), null, 200);
    }

    public function showCities()
    {
        return $this->APIResponse( \App\Models\City::get(), null, 200);
    }

    public function showSpecialServices()
    {

        return $this->APIResponse( \App\Models\ServiceCategory::where('special' , 1)->limit(4)->get(), null, 200);
    }

    public function showBestSellerServices()
    {
        $orders = DB::table('orders')
                 ->select('service_id' , DB::raw('count(*) as total'))
                 ->groupBy('service_id')

                 ->get();


        $orders = DB::table('service_categories')
            ->inRandomOrder()
            ->limit(4)
            // ->groupBy('service_id')
            ->get();

        // $orders = Order::orderBy('id','DESC')
        // ->select(DB::raw('service_id,count(*) as total') )
        // ->get()
        // ->groupBy('service_id');
        return $orders;
      //    $bestSellerServices =  \App\Models\Order::where('special' , 1)->limit(4)->get();

        return $this->APIResponse( null, null, 200);
    }

    public function getConfigration()
    {
        return $this->APIResponse( \App\Models\Configration::find(1), null, 200);
    }
}
