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
        $this->call([
            UserSeeder::class,

        ]);
        factory('App\Models\User', 10)->create();
        factory('App\Models\Adds', 10)->create();
        factory('App\Models\ServiceCategory', 10)->create();
        factory('App\Models\LastWork', 10)->create();
    }
}
