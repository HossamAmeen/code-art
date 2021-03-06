<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        \App\Models\Country::create([
            "name" => "مصر",
           
        ]);
        \App\Models\Country::create([
            "name" => "السعوديه",
        ]);
        \App\Models\City::create([
            "name" => "أسيوط",
            "country_id" => 1,
          
        ]);
        \App\Models\City::create([
            "name" => "القاهره",
            "country_id" => 1,
        ]);
        \App\Models\City::create([
            "name" => "مكه",
            "country_id" => 2,
        ]);

        \App\Models\City::create([
            "name" => "الرياض",
            "country_id" => 2,
        ]);
        // factory('App\Models\Category', 5)->create();
        // factory('App\Models\Country', 10)->create();
        // factory('App\Models\City', 10)->create();
      
        $this->call([
            UserSeeder::class,
           ClientSeeder::class,
        ]);
     
        factory('App\Models\Configration',1)->create();
        factory('App\Models\User', 10)->create();

        factory('App\Models\LastWork', 10)->create();
        factory('App\Models\Complaint', 10)->create();

         
         factory('App\Models\ServiceProviderWallet', 10)->create();
        factory('App\Models\ServiceQuestion', 10)->create();

        factory('App\Models\ServiceQuestionMultipleChoice', 10)->create();
        factory('App\Models\Adds', 10)->create();
        factory('App\Models\Slider', 5)->create();
        factory('App\Models\ServiceComment', 10)->create();


    }
}
