<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Network;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jhonpabz>
 */
class JhonpabzFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'bio' => fake()->realText(500),
            'skill' => fake()->numberBetween(0, 100),
            'network_id' => Network::inRandomOrder()->first()->id,
        ];
    }
}
