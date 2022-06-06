<?php

namespace Tests\Unit;

use App\Http\Controllers;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;

class ProdukTest extends TestCase
{

    use WithFaker;

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_produk_index()
    {
        $value = [
            'nama' => $this->faker->name(),
            'keterangan' => $this->faker->text(),
            'harga' => $this->faker->randomElement([1000, 2000, 4000, 5000, 10000]),
            'persediaan' => $this->faker->randomElement([7, 10, 15, 20, 30]),
            'image' => $this->faker->imageUrl(),
        ];

        $this->get(route('produks.index'), $value)->assertStatus(200); //Test Produk Controller Function index berjalan 200ok
    }
}
