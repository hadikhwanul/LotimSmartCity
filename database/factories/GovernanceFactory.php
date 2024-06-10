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
            'category_id' => mt_rand(1,2),
            'portal' => $this->faker->company(),
            'slug' => $this->faker->unique()->slug(),
            'alamat' => $this->faker->address(),
            'deskripsi' => collect($this->faker->paragraphs(mt_rand(2,3)))
                        ->map(fn($p) => "<p>$p</p>")
                        ->implode(''),
            'link' => $this->faker->domainName(), 
            'status' => $this->faker->randomElement(['Active', 'Deactive']),
            'logo_sg' => $this->faker->image(null, 640, 480)
        ];
        
    }
}
