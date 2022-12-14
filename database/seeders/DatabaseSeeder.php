<?php

namespace Database\Seeders;

use App\Models\Date;
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
         Date::factory(10)->create();
    }
}
