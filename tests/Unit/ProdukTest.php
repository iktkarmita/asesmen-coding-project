<?php

namespace Tests\Unit;

use App\Http\Controllers;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Modules\Post\Models\Produks;

class ProdukTest extends TestCase
{

    use WithFaker;

    /**
     * A basic unit test example.
     *
     * @return void
     */

    // user buka halaman daftar post
    public function test_produk_create_postController() //CREATE
    {
        $Produk = [
            'nama' => 'Mens Cotton Jacket',
            'keterangan' => 'great outerwear jackets for Spring/Autumn/Winter, suitable for many occasions, such as working, hiking, camping, mountain/rock climbing, cycling, traveling or other outdoors. Good gift choice for you or your family member. A warm hearted love to Father, husband or son in this thanksgiving or Christmas Day.',
            'harga' => '700.000',
            'persediaan' => '22',
            'image' => 'post-images/fTSGbQVnEzO60v6e7hXqlPli112C3oNvGSLu8xan.jpg'

        ];
        //dd($Produk);
        $this->get(route('produks.store'), $Produk)->assertStatus(405);
    }

    public function test_produk_Delete_PostController() //DELETE
    {
        $data = [
            'id' => 2,
            'nama' => 'Mens Cotton Jacket',
            'keterangan' => 'great outerwear jackets for Spring/Autumn/Winter, suitable for many occasions, such as working, hiking, camping, mountain/rock climbing, cycling, traveling or other outdoors. Good gift choice for you or your family member. A warm hearted love to Father, husband or son in this thanksgiving or Christmas Day.',
            'harga' => 700.000,
            'persediaan' => 22,
            'image' => 'post-images/fTSGbQVnEzO60v6e7hXqlPli112C3oNvGSLu8xan.jpg',
            'created_at' => 2022 - 06 - 07,
            'updated_at' => 2022 - 06 - 10
        ];

        $this->get(route('produks.destroy'), $data)->assertStatus(302); //Test Edit Controller Function delete berjalan 302 sesuai dengan setting di edit controller
    }
    public function test_produk_Read_PostController() //READ

    {
        $dataEdit = [
            'id' => 2,
            'nama' => 'Mens Cotton Jacket',
            'keterangan' => 'great outerwear jackets for Spring/Autumn/Winter, suitable for many occasions, such as working, hiking, camping, mountain/rock climbing, cycling, traveling or other outdoors. Good gift choice for you or your family member. A warm hearted love to Father, husband or son in this thanksgiving or Christmas Day.',
            'harga' => 700.000,
            'persediaan' => 22,
            'image' => 'post-images/fTSGbQVnEzO60v6e7hXqlPli112C3oNvGSLu8xan.jpg',
            'created_at' => 2022 - 06 - 07,
            'updated_at' => 2022 - 06 - 10
        ];

        $this->get(route('produks.edit'), $dataEdit)->assertStatus(302);
    }
    public function test_produk_Update_PostController() //UPDATE
    {
        $dataUpdate = [
            'id' => 2,
            'nama' => 'Mens Cotton ',
            'keterangan' => 'great outerwear jackets for Spring/Autumn/Winter, suitable for many occasions, such as working, hiking, camping, mountain/rock climbing, cycling, traveling or other outdoors. Good gift choice for you or your family member. A warm hearted love to Father, husband or son in this thanksgiving or Christmas Day.',
            'harga' => 700.000,
            'persediaan' => 22,
            'image' => 'post-images/fTSGbQVnEzO60v6e7hXqlPli112C3oNvGSLu8xan.jpg',
            'created_at' => 2022 - 06 - 07,
            'updated_at' => 2022 - 06 - 10
        ];

        $this->get(route('produks.update'), $dataUpdate)->assertStatus(405);
    }
}
