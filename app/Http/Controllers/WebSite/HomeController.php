<?php

namespace App\Http\Controllers\WebSite;

use App\Models\ServiceCategory;
use App\Models\Adds;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $pageTitle = "الرئيسية" ;
        $firstSlider = \App\Models\Slider::first();
        $sliders = \App\Models\Slider::where('id' ,'!=', $firstSlider->id)->get();
        $specialServices = ServiceCategory::where('special' , 1)->limit(4)->get();
        $firstAdd = Adds::all()->random(1);
        $secondAdd = Adds::all()->random(1);
        // return $firstAdd;
        $MostRequestedServices = ServiceCategory::all()->random(4);
        return view('web.home.index' , compact('pageTitle' ,'firstSlider', 'sliders' ,
                                         'specialServices' , 'firstAdd' ,
                                          'secondAdd' , 'MostRequestedServices'));
    }

    public function questions ()
    {
        $pageTitle = "الأسالة الشائعة" ;
        $categories = \App\Models\CategoryQuestion::all();
         return view('web.home.questions' , compact('pageTitle' , 'categories'));
    }

    public function complaint(Request $request)
    {
        // return $request->all();
        \App\Models\Complaint::create( $request->all());

        return redirect()->back();
    }

}
