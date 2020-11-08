<?php

namespace Database\Seeders;

use App\Models\Formule;
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
        //Formule::factory(3)->create();
        $this->call(FormuleSeeder::class);
    }
}
