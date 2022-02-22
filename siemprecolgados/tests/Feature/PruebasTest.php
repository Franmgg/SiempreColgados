<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class PruebasTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_main()
    {
        $response = $this->get('/cliente');
        $response->assertStatus(200);
    }
   
    public function test_login()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }
    //vemos si nos hace redirección 
    public function test_avisos()
    {
        $response = $this->get('/avisos');
        $response->assertRedirect('/login');
    }
    
}
