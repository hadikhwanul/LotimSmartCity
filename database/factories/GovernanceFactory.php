<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Governance>
 */
class GovernanceFactory extends Factory
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
            'category_id' => mt_rand(1,3),
            'user_id' => mt_rand(1,5),
            'slug' => fake()->unique()->slug(),
            'deskripsi' => fake()->realText($maxNbChars = 200, $indexSize = 2),
            'link' => fake()->domainName(), 
            'status' => fake()->randomElement(['Active', 'Deactive']),
            'logo_sg' => fake()->image(null, 640, 480)
        ];
        
    }
}
