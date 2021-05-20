<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'birth' => $this->faker->date(),
            'email' => $this->faker->unique()->safeEmail(),
            'address' => $this->faker->sentence(),
            'cpf' => $this->faker->unique()->numerify('%%%.%%%.%%%-%%'),
        ];
    }
}
