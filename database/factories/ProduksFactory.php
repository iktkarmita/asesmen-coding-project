<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produk>
 */
class ProduksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'keterangan' => $this->faker->text(),
            'harga' => $this->faker->randomElement([1000, 2000, 4000, 5000, 10000]),
            'persediaan' => $this->faker->randomElement([7, 10, 15, 20, 30]),
            'image' => $this->faker->imageUrl(),
        ];
    }
    public function imageUrl(
        $width = 640,
        $height = 480,
        $category = true,
        $randomize = true,
        $word = null,
        $gray = true
    ) {
    }
}
