<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UrlTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    //================================= INI HANYA TEST URL SAJA JADI ADA YG ERORR KARENA HARUS DI INPUTKAN DATA | ADA 3 YG EROR method POST ===============================//
    //================================ yg di Test hanya url Method GET saja ========================================================//
    public function test_homePage()
    {
        $response = $this->get('api/'); //READ FOR USER

        $response->assertStatus(200);
    }
    public function test_homePageKedua()
    {
        $response = $this->get('api/1'); //SHOW FOR USER

        $response->assertStatus(200);
    }
    //public function test_register()
    //{
    //$response = $this->post('api/register'); //tidak bisa karena tidak ada data yg di inputkan (1)

    //$response->assertStatus(200);
    //}
    //public function test_login()
    //{
    //$response = $this->post('api/login'); //tidak bisa karena tidak ada data yg di inputkan (2)

    //$response->assertStatus(200);
    // }
    public function test_home_prduk()
    {
        $response = $this->get('api/home'); //akses ketika user sudah login

        $response->assertStatus(200);
    }
    //public function test_product()
    //{
    //$response = $this->get('api/post'); //halaman dashboard admin akses ketika admin sudah login halaman view tidak ada halaman akan di buat pkek vue js

    //$response->assertStatus(200);
    //}

    public function test_edit()
    {
        $response = $this->get('api/edit'); //READ FOR ADMIN

        $response->assertStatus(200);
    }
    //public function test_Create() //CREATE FOR ADMIN
    //{
    //$response = $this->post('api/post/store'); //tidak bisa karena tidak ada data yg di inputkan (3)

    //$response->assertStatus(200);
    //}

    public function test_Read() //SHOW FOR ADMIN
    {
        $response = $this->get('api/edit/1');
        $response->assertStatus(200);
    }

    //public function test_update() //UPDATE FOR ADMIN
    //{
    //$response = $this->put('api/edit/post/6');

    //$response->assertStatus(200);
    //}

    public function test_Delete() //DELETE FOR ADMIN
    {
        $response = $this->get('api/edit/post/delete/1');

        $response->assertStatus(200);
    }
}
