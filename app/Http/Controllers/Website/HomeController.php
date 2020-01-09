<?php

namespace App\Http\Controllers\Website;
use App\Http\Controllers\APIResponseTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class HomeController extends Controller
{
    use APIResponseTrait;

    public function show_categories()
    {
       return $this->APIResponse( Category::with('services')->get(), null, 200);
    }

    public function show_countries()
    {
        return $this->APIResponse( \App\Models\Country::get(), null, 200);
    }

    public function show_cities()
    {
        return $this->APIResponse( \App\Models\City::get(), null, 200);
    }
}
