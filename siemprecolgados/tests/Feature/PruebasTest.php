<?php

namespace Tests\Feature;

use App\Models\Clientes;
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
   //entramos al login
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
    //entramos con adm
    public function test_entraAdmin()
    {
        $adm = User::get()->first();
        $this->actingAs($adm)->get('/')->assertStatus(200);
    }
    public function test_entraAdmin_Cliente()
    {
        $adm = User::get()->first();
        $this->actingAs($adm)->get('clientes')->assertStatus(200);
    }
    //entramos con ope
    public function test_entraOperario()
    {
        $ope = User::get()->skip(1)->first();
        $this->actingAs($ope)->get('/')->assertStatus(200);
    }
    public function test_entraOperario_TareasOpe()
    {
        $ope = User::get()->skip(1)->first();
        $this->actingAs($ope)->get('tareasOpe')->assertStatus(200);
    }
}
