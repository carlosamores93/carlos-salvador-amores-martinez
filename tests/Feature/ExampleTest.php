<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');
        $response->assertStatus(302);
    }


    /** 
     * @test
     * @return [type] [description]
     */
    function test_curriculum_vitae_page() 
    {
        $response = $this->get('/curriculum-vitae-carlos-amores');
        $response->assertStatus(200);
    }

    function test_login_page() 
    {
        $response = $this->get('/login');
        $response->assertSee('login');
        $response->assertStatus(200);
    }

    function test_admin_page() 
    {
        $response = $this->get('/admin');
        $response->assertStatus(302);
    }

    /** test */
    public function test_authenticated_to_a_user()
    {

        $this->get('/login')->assertSee('Login');
        $credentials = [
            "email" => "amorescarlos93@hotmail.com",
            "password" => "secret"
        ];

        $response = $this->post('/login', $credentials);
        $response->assertRedirect('/admin');
        $this->assertCredentials($credentials);
    }
}
