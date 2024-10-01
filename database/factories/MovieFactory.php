<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'tags' => 'Action, Drama',
            'country' => 'USA',
            'production' => $this->faker->company(),
            'director' => $this->faker->name(),
            'email' => $this->faker->companyEmail(),
            'description' => $this->faker->paragraph(5),
            'runtime' => $this->faker->numberBetween(60, 250),
            'year' => $this->faker->numberBetween(1800, 2023),
            'actors' => $this->faker->name()
        ];
    }
}
