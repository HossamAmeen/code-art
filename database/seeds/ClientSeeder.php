<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Client::create([
            "email" => "client@client.com",
            "user_name" => "hossam",
            "phone" => "01010079798",
            "country_id" => 1,
            "city_id" => 1,
            'password' => bcrypt('Admin123$'), // password
        ]);

        \App\Models\Category::create([
            "name" => "التصميم",
            "icon" => "fa-palette",
        ]);
        \App\Models\Category::create([
            "name" => "الطباعة",
            "icon" => "fa-print",
        ]);
        \App\Models\Category::create([
            "name" => "الترجمه",
            "icon" => "fa-language",
        ]);
        \App\Models\Category::create([
            "name" => "تصوير المناسبات",
            "icon" => "fa-camera",
        ]);
        \App\Models\Category::create([
            "name" => "الرسوم المتحركة",
            "icon" => "fa-photo-video",
        ]);

        \App\Models\CategoryQuestion::create([
            "name" => "الرصيد والمعاملات المالية ",
           
        ]);
        \App\Models\CategoryQuestion::create([
            "name" => "أمور عامة ",
            
        ]);
        \App\Models\CategoryQuestion::create([
            "name" => "حسابك في كود آرت",
          
        ]);
        \App\Models\ServiceCategory::create([
            'name' => "تصميم شعار", 
            'category_id' => 1,
             'delivery_price' => 2,
              'special' => 1,
               'image' => 'uploads\servicecategories\services.png',
            
        ]);

       
        factory('App\Models\ServiceCategory', 15)->create();
        \App\Models\ServiceProvider::create([
            'name' => "أسامة عسكر", 
            'email' => 'osama@gmail.com', 
            'password' =>  bcrypt('admin'),
            'image' => 'uploads\servicecategories\services.png',
             'country'=>2,
              'city' => 1,
              'phone' => "01010079798",
            
        ]);
        factory('App\Models\ServiceProvider', 10)->create();
        \App\Models\ServiceProviderService::create([
            'service_provider_id' => 1,
             'service_category_id' => 1,
              'description' => "تصميم محترف للشعار",
               'rate' => 3,
               'price' => 2,
             'discount' => 2,
              'image' => 'uploads\service-detials.png',
               'overview' => " في هذه الخدمة سوف أقوم بتصميم شعار احترافي لشركتك او لمؤسستك او موقعك - خدمتك - محلك - فكرتك.
               في هذه الخدمة سوف أقوم بتصميم شعار احترافي لشركتك او لمؤسستك او موقعك - خدمتك - محلك - فكرتك.
               في هذه الخدمة سوف أقوم بتصميم شعار احترافي لشركتك او لمؤسستك او موقعك - خدمتك - محلك - فكرتك.
               في هذه الخدمة سوف أقوم بتصميم شعار احترافي لشركتك او لمؤسستك او موقعك - خدمتك - محلك - فكرتك.
               في هذه الخدمة سوف أقوم بتصميم شعار احترافي لشركتك او لمؤسستك او موقعك - خدمتك - محلك - فكرتك.
               في هذه الخدمة سوف أقوم بتصميم شعار احترافي لشركتك او لمؤسستك او موقعك - خدمتك - محلك - فكرتك. " ,
                'title' => "تصميم شعار بطريقة مميزه",
                 'program' => "photoshop"
            
        ]);
        factory('App\Models\ServiceProviderService', 10)->create();
        factory('App\Models\Client', 10)->create();
        factory('App\Models\WishList', 10)->create();
        // factory('App\Models\', 10)->create();
        factory('App\Models\Question', 10)->create();
        \App\Models\ServiceType::create([
            'price' => 1, 
            'days' =>  2,
            'service_provider_service_id' => 1, 
            
           
            
        ]);
        \App\Models\ServiceType::create([
            'price' => 3, 
            'days' =>  4,
            'service_provider_service_id' => 1, 
            
           
            
        ]);
        \App\Models\ServiceType::create([
            'price' => 5, 
            'days' =>  6,
            'service_provider_service_id' => 1, 
            
           
            
        ]);
        factory('App\Models\ServiceType', 10)->create();
        factory('App\Models\Order', 100)->create();
        factory('App\Models\Cart', 100)->create();
        \App\Models\SuggestAddition::create([
            'suggestion' => "تصميم صفحه فيس بوك",
             'price' => 2   , 
             'service_category_id' =>1
            
        ]);
        \App\Models\SuggestAddition::create([
            'suggestion' => "تصميم اعلان ممول",
             'price' => 2   , 
             'service_category_id' =>1
            
        ]);
        factory('App\Models\SuggestAddition', 30)->create();
    }
}
