<?php

namespace Database\Seeders;

use App\Models\Citizen;
use \App\Models\User;
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
         User::truncate();
         Citizen::truncate();

         User::factory(10)->create();
         Citizen::factory(10)->create();
    }
}
