<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $genders = ['male', 'female'];
        $gender = $genders[rand(0, 1)];
        return [
            'name' => $this->faker->name([$gender]),
            'birthday' => $this->faker->date(),
            'gender' => $gender
        ];
    }
}
