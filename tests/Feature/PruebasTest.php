<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PruebasTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    public function contraseñan_requerida()
    {
        $usuario = create('App\User', ['email' => 'danielcs@gmail.com']);
        $credenciales = [
            'email' => 'danielcs@gmail.com',
            'password' => null
        ];

        $response = $this->from('/login')->post('/login', $credenciales);
        $response->assertRedirect('/login')
        ->assertSessionHasErrors([
            'password' => 'La contraseña es requerida',
        ]);
    }
}
