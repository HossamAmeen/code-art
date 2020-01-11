<?php

namespace App\Http\Controllers\APIs\Website;
use App\Http\Controllers\APIResponseTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Complaint;

class HomeController extends Controller
{
    use APIResponseTrait;

    public function complaint(Request $request)
    {
        Complaint::create($request->all());

        return $this->APIResponse(null, null, 201);
    }
    public function showCategories()
    {
       return $this->APIResponse( Category::with('services')->get(), null, 200);
    }

    public function showCountries()
    {
        return $this->APIResponse( \App\Models\Country::get(), null, 200);
    }

    public function showCities()
    {
        return $this->APIResponse( \App\Models\City::get(), null, 200);
    }
}
