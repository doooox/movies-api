<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=> $this->faker->word(),
            'director' => $this->faker->name(),
            'imageUrl' => $this->faker->word(),
            'duration' => $this->faker->numberBetween(10, 120),
            'releaseDate' => $this->faker->dateTime(),
            'genre' => $this->faker->word(),
        ];
    }
}
