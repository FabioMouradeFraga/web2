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
        for ($i = 1; $i < 6; $i++) {
        	\App\Models\Student::factory(1)->create([
        		'email' => "aluno{$i}@hotmail.com"
        	]);
    	}    }
}
