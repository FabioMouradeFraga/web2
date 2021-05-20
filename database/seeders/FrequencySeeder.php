<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FrequencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Frequency::factory(5)->create();
    }
}
