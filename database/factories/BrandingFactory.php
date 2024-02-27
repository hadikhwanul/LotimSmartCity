<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Branding>
 */
class BrandingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'portal' => fake()->company(),
            'slug' => fake()->unique()->slug(),
            'deskripsi' => fake()->realText($maxNbChars = 200, $indexSize = 2),
            'link' => fake()->domainName(), 
            'status' => fake()->randomElement(['Active', 'Deactive']),
            'logo_sb' => fake()->image(null, 640, 480)
        ];
    }
}
