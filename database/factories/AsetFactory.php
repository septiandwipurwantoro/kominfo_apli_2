<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aset>
 */
class AsetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'foto' => fake()->image(null, 640, 480),
            'nama_aset' => fake()->unique()->userName(),
            'diskripsi' => fake()->words(mt_rand(10, 20), true),
            'is_deleted' => Arr::random([0, 1]),
            'kuantitas' => mt_rand(1, 10),
            'bidang_id' => mt_rand(1, 5)
        ];
    }
}
