<?php

namespace Database\Factories;

use App\Models\Artist;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artwork>
 */
class ArtworkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     
    public function definition(): array
    {
        return [
            // 'title' => fake() -> name(),
            // 'imageURL' => fake() -> imageUrl(640, 480, 'monuments', true),
            // 'yearInstalled' => fake() -> numberBetween(1990, 2024),
            // 'description' => fake() -> text(),
        ];
    }
}
