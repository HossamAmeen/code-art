<?php

    Route::resource('configration', 'ConfigrationController')->only(['index', 'update']);
    Route::resource('sliders', 'SliderController')->except('edit');
    Route::resource('questions', 'SliderController')->except('edit');
    Route::resource('clients', 'ClientController')->except('edit');
    Route::resource('client-services', 'SliderController')->except('edit');
    Route::resource('question-answer', 'SliderController')->except('edit');
    Route::resource('wishlist', 'WishlistController')->except('edit');
    Route::resource('countries', 'CountryController')->except('edit');
    Route::resource('cities', 'CityController')->except('edit');
    Route::resource('questions', 'QuestionController')->except('edit');
    Route::resource('question-categories', 'CategoryQuestionController')->except('edit');
    Route::resource('suggestion-additions', 'SuggestAdditionController')->except('edit');


    Route::resource('adds', 'AddsController');
    Route::resource('category', 'CategoryController');
    Route::resource('service/category', 'ServiceCategoryController');
    Route::resource('last-work', 'LastWorkController');
    Route::resource('complaint', 'ComplaintController');
    Route::resource('service-provider', 'ServiceProviderController');
    Route::resource('service-provider-service', 'ServiceProviderServiceController');
    Route::resource('service-provider-wallet', 'ServiceProviderServiceController');
    Route::resource('service-type', 'ServiceTypeController');
    Route::resource('service-question', 'ServiceQuestionController');
        // Route::resource('sliders', 'SliderController')->except('show')

?>
