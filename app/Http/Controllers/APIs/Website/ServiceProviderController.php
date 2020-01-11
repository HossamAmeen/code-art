<?php

namespace App\Http\Controllers\APIs\Website;

use App\Http\Controllers\APIResponseTrait;
use App\Http\Controllers\Controller;
use App\Models\ServiceComment;
use App\Models\ServiceProvider;
use App\Models\ServiceProviderService;
use App\Models\ServiceType;
use App\Models\SuggestAddition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceProviderController extends Controller
{
    use APIResponseTrait;

    public function login(Request $request)
    {
        $credentials = request(['email', 'password']);
        if(!Auth::guard('service-provider')->attempt($credentials, false, false))
        {
            $error = "Unauthorized";
            return $this->sendError($error, 401);
        }
        $serviceProvider = ServiceProvider::where("email", request('email'))->first();
        $success['token'] =  $serviceProvider->createToken('token')->accessToken;
        $success['type'] = 'service-provider';

        return $this->sendResponse($success);
    }

    public function logout(Request $request)
    {
        $isServiceProvider = $request->user()->token()->revoke();
        if($isServiceProvider){
            $success['message'] = "Successfully logged out.";
            return $this->sendResponse($success);
        }
        else{
            $error = "Something went wrong.";
            return $this->sendResponse($error);
        }
    }

    public function get_service_type(Request $request)
    {
        $serviceProviderType = ServiceType::where('service_provider_id', Auth::user()->id)
            ->where('service_provider_service_id', $request->service_provider_service_id)->get();

        return $this->APIResponse($serviceProviderType, null, 200);
    }

    public function get_service_provider_service(Request $request)
    {
        $serviceProviderService = ServiceProviderService::where('service_provider_id', Auth::user()->id)
            ->where('service_category_id', $request->service_category_id)->get();

        return $this->APIResponse($serviceProviderService, null, 200);
    }

    public function get_service_provider(Request $request)
    {
        $serviceProviders = ServiceProviderService::with('service_provider')
                ->where('service_category_id', $request->service_category_id)->get();

        return $this->APIResponse($serviceProviders, null, 200);
    }

    public function get_suggest_addition(Request $request)
    {
        $suggestAddition = SuggestAddition::where('service_category_id', $request->service_category_id)->get();

        return $this->APIResponse($suggestAddition, null, 200);
    }

    public function add_service_provider_service(Request $request)
    {
        foreach ($request['ServiceProviderServices'] as $serviceProviderService)
        {
            if($serviceProviderService['image'])
            {
                $source = public_path($serviceProviderService['image']);
                $destination = "Service Provider Service".substr($serviceProviderService['image'], strpos($serviceProviderService['image'] , '/') ) ;
                $serviceProviderService['image'] = $destination;
                copy( $source, $destination );
            }
            ServiceProviderService::create([
                'service_provider_id' => Auth::user()->id,
                'service_category_id' => $serviceProviderService['service_category_id'],
                'description' => $serviceProviderService['description'],
                'discount' => $serviceProviderService['discount'],
                'image' => $serviceProviderService['image'],
                'overview' => $serviceProviderService['overview'],
                'title' => $serviceProviderService['title'],
                'program' => $serviceProviderService['program'],
            ]);
        }
        foreach ($request['serviceTypes'] as $serviceType)
        {
            ServiceType::create([
                'price' => $serviceType['price'],
                'days' => $serviceType['price'],
                'service_provider_id' => Auth::user()->id,
                'service_provider_service_id' => $serviceType['service_provider_service_id']
            ]);
        }
        return $this->APIResponse(null, null, 200);
    }

    public function get_service_category_comments(Request $request)
    {
        $comments = ServiceComment::where('service_category_id', $request->service_category_id)->get();

        return $this->APIResponse($comments, null, 200);
    }

    public function sendResponse($response)
    {
        return response()->json($response, 200);
    }

    public function sendError($error, $code = 404)
    {
        $response = [
            'error' => $error,
        ];
        return response()->json($response, $code);
    }
}
