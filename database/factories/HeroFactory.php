<?php

namespace Database\Factories;

use App\Models\Hero;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Hero>
 */
class HeroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->paragraph(3),
            'image' => 'https://images.unsplash.com/photo-1516549655169-df83a0774514?w=1200',
            'is_active' => $this->faker->boolean,
            'sort_order' => $this->faker->numberBetween(1,20),
        ];
    }
}
