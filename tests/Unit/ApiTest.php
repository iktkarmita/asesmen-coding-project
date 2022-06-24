<?php

namespace Tests\Unit;

use App\Http\Controllers;
use App\Models\User;
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
        $this->json('PUT', 'api/edit/post/1', $data, ['Accept' => 'application/json'])
            ->assertStatus(200); //200 karena berhasil di UPDATE . NOTE : SUDAH DI CEK DI DATABASE LANGSUNG
    }
    public function test_delete_admin() //DELETE
    {
        $this->json('GET', 'api/edit/post/delete/2',  ['Accept' => 'application/json'])
            ->assertStatus(200); //200 karena berhasil di DELETE . NOTE : SUDAH DI CEK DI DATABASE LANGSUNG
    }
    public function test_show_admin() //SHOW FOR ADMIN ATAY MENAMPILKAN PRODUK SESUAI ID
    {
        $this->json('GET', 'api/edit/1',  ['Accept' => 'application/json'])
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
        $this->json('GET', 'api/1',  ['Accept' => 'application/json'])
            ->assertStatus(200); //200 karena hanya get data. 
    }
    //=========================TEST UNIT LOGIN DAN REGISTER=====================//
    public function test_register()
    {
        $user = [
            "name" => "admin",
            "email" => "admin@gmail.com",
            "password" => "12345678"
        ];

        $this->json('POST', 'api/auth/register', $user, ['Accept' => 'application/json'])
            ->assertStatus(201); //201 created
    }
    public function test_login_dan_test_logout()
    {  //Memaasukan data email dan password #Login
        $user = [
            "email" => "admin@gmail.com",
            "password" => "12345678"
        ];

        //,emdapatkan response 200ok dan menampung data ke variabel $response
        $response =  $this->json('POST', 'api/auth/login', $user, ['Accept' => 'application/json'])
            ->assertStatus(200); //200 ok ases

        //#logout dan mendelete token 
        //mendapatkan data token dari variabel $response dan mendelete token, bisa di cek di database di tabel personal_access_tokens
        auth()->user()->tokens('token', $response)->delete();
    }

    //===================== Dashboard ketika sesudah login Admin dan User ==================//

    //public function test_admin_sesudah_login()
    //{
    //$this->json('GET', 'api/post', ['Accept' => 'application/json'])
    //->assertStatus(200); //hanya megakses halaman page admin view untuk view menggunakan vue js
    //}

    public function test_user_sesudah_login()
    {
        $this->json('GET', 'api/home', ['Accept' => 'application/json'])
            ->assertStatus(200); //hanya megakses halaman page user ada datanya jdi di test
    }
}
