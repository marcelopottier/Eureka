<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'patient_name' => $this->faker->word(),
            'parents_name' => $this->faker->word(),
            'email'=> $this->faker->safeEmail(),
            'phone' => $this->faker->randomNumber(9, true),
            'school_name' => $this->faker->word(),
            'schooling'=> $this->faker->numberBetween(1, 9),
            'sex'=> $this->faker->numberBetween(1, 2),
            'age'=> $this->faker->numberBetween(5, 15),
            'particular_session'=> $this->faker->boolean(),
            'psicologo'=> $this->faker->boolean(),
            'fono'=> $this->faker->boolean(),
            'psicomotricista'=> $this->faker->boolean(),
        ];
    }
}
