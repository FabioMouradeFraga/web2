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
        for ($i = 1; $i < 6; $i++) {
        	\App\Models\Frequency::factory(1)->create([
                'user_id' => \App\Models\User::all()->random(),
                'grade_id' => \App\Models\Grade::all()->random(),
        	]);
    	}
    }
}
