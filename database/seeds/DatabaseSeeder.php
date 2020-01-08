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
        factory('App\Models\Country', 10)->create();
        factory('App\Models\City', 10)->create();
        factory('App\Models\Category', 10)->create();
        factory('App\Models\ServiceCategory', 10)->create();
        factory('App\Models\ServiceProvider', 10)->create();
        factory('App\Models\ServiceProviderService', 10)->create();
        $this->call([
            UserSeeder::class,
//            ClientSeeder::class,
        ]);
        factory('App\Models\Configration',1)->create();
        factory('App\Models\User', 10)->create();
        factory('App\Models\Adds', 10)->create();
        factory('App\Models\Slider', 5)->create();

        factory('App\Models\LastWork', 10)->create();
        factory('App\Models\Complaint', 10)->create();

        factory('App\Models\Service', 10)->create();

         factory('App\Models\ServiceType', 10)->create();
         factory('App\Models\ServiceProviderWallet', 10)->create();
        factory('App\Models\ServiceQuestion', 10)->create();
        factory('App\Models\ServiceQuestionBoolean', 10)->create();
        factory('App\Models\ServiceQuestionFile', 10)->create();
        factory('App\Models\ServiceQuestionText', 10)->create();
        factory('App\Models\ServiceQuestionMultipleChoice', 10)->create();

    }
}
