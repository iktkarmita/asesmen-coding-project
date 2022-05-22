<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShowPage extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_homePage()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_register()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }
    public function test_login()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }
    public function test_home_prduk()
    {
        $response = $this->get('/home'); //gabisa di akses karna karus login

        $response->assertStatus(200);
    }
    public function test_product()
    {
        $response = $this->get('/post'); //gabisa di akses karna karus login

        $response->assertStatus(200);
    }
}
