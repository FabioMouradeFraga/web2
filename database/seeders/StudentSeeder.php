<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 31; $i++) {
        	\App\Models\Student::factory(1)->create([
        		'email' => "aluno{$i}@hotmail.com",
                'user_id' => \App\Models\User::all()->random(),
                'grade_id' => \App\Models\Grade::all()->random(),
        	]);
    	}
    }

}
