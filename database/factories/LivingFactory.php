<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Living>
 */
class LivingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'portal' => $this->faker->company(),
            'slug' => $this->faker->unique()->slug(),
            'alamat' => $this->faker->address(),
            'deskripsi' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
            'link' => $this->faker->domainName(), 
            'status' => $this->faker->randomElement(['Active', 'Deactive']),
            'logo_sl' => $this->faker->image(null, 640, 480)
        ];
    }
}
