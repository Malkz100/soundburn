<?php

namespace Database\Seeders;

use App\Models\Artist;
use App\Models\Customer;
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
        // \App\Models\User::factory(10)->create();
        Customer::factory(20)->create();
        Artist::factory(20)->create();
    }
}
