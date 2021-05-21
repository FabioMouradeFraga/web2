<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {       
        for ($i = 1; $i < 6; $i++) {
            \App\Models\Grade::factory(1)->create([
                'user_id' => \App\Models\User::all()->random(),
            ]);
        }
    }
}
