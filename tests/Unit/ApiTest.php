<?php

namespace Tests\Unit;

use App\Http\Controllers;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Modules\Post\Models\Produks;
use Symfony\Component\HttpFoundation\Response;

class ApiTest extends TestCase
{
    //=========================TEST UNIT CRUD UNTUK ADMIN =================// Note : jika error ketik php artisan optimize untuk merefresh framework Laravel dan membersihkan cache
    public function test_read_admin() //READ
    {
        $this->json('GET', 'api/edit',  ['Accept' => 'application/json'])
            ->assertStatus(200) //200 karna hanya get data
            ->assertJson([]);
    }
    public function test_create_admin() //CREATE
    {
        $data = [
            "nama" => "Jacke",
            "keterangan" => "Catton Jacket test",
            "harga" => 70.000,
            "persediaan" => 20,
            "image" => "baju3.jpg"
        ];
        $this->json('POST', 'api/post/store', $data, ['Accept' => 'application/json'])
            ->assertStatus(201) //201 karena berhasil di CREATE  . NOTE : SUDAH DI CEK DI DATABASE LANGSUNG
            ->assertJsonStructure([]);
    }
    public function test_update_admin() //UPDATE
    {
        $data = [
            "nama" => "efef",
            "keterangan" => "Girl Cotton test",
            "harga" => 70.000,
            "persediaan" => 20,
            "image" => "baju3.jpg"
        ];
        $this->json('PUT', 'api/edit/post/25', $data, ['Accept' => 'application/json'])
            ->assertStatus(200); //200 karena berhasil di UPDATE . NOTE : SUDAH DI CEK DI DATABASE LANGSUNG
    }
    public function test_delete_admin() //DELETE
    {
        $this->json('GET', 'api/edit/post/delete/29',  ['Accept' => 'application/json'])
            ->assertStatus(200); //200 karena berhasil di DELETE . NOTE : SUDAH DI CEK DI DATABASE LANGSUNG
    }
    public function test_show_admin() //SHOW FOR ADMIN ATAY MENAMPILKAN PRODUK SESUAI ID
    {
        $this->json('GET', 'api/edit/33',  ['Accept' => 'application/json'])
            ->assertStatus(200); //200 karena hanya get data . 
    }
    //=========================TEST UNIT UNTUK USER =================// Note : jika error ketik php artisan optimize untuk merefresh framework Laravel dan membersihkan cache
    public function test_Read_user() //READ FOR USER
    {
        $this->json('GET', 'api/',  ['Accept' => 'application/json'])
            ->assertStatus(200); //200 karena hanya get data . 
    }
    public function test_show_user() //SHOW FOR USER
    {
        $this->json('GET', 'api/33',  ['Accept' => 'application/json'])
            ->assertStatus(200); //200 karena hanya get data. 
    }
}
