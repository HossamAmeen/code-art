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
            "email" =>"client@client.com",
            "user_name" =>"user_name",
            "phone" => "01010079798",
            "country_id" =>1,
            "city_id" =>1,
            'password' => bcrypt('Admin123$'), // password
        ]);
        factory('App\Models\Client', 10)->create();
        factory('App\Models\WishList', 10)->create();
        factory('App\Models\CategoryQuestion', 10)->create();
        factory('App\Models\Question', 10)->create();
        factory('App\Models\Order', 10)->create();
        factory('App\Models\SuggestAddition', 30)->create();
    }
}
