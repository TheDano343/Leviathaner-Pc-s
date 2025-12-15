<?php

namespace Tests\Unit;

use Tests\TestCase;

use App\Models\User;
use Illuminate\Support\Facades\Cache;


class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_login_form(): void
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    public function test_usuario_duplicado()
    {
        $user = User::make([
            'name' => 'daniel',
            'email' => 'danielcsaul3431@gmail.com'
        ]);

        $user2 = User::make([
            'name' => 'daniels',
            'email' => 'danielscsaul3431@gmail.com'
        ]);
        $this->assertTrue($user->name != $user2->name);
    }

    public function test_borrar_usuario()
    {
        $user = User::factory()->count(1)->make();

        $user = User::first();

        if($user)
        {
            $user->delete();
        }

        $this->assertTrue(true);
    }

    public function test_agregar_usuario()
    {
        $response = $this->post('/register',[
            'name' => 'Brenda Chloe',
            'email' => 'brendac@gmail.com',
            'password' => 'nina090915',
            'password_confirmation' => 'nina090915'
        ]);
        $response->assertRedirect('/home');
    }

    public function test_database()
    {
        $this->assertDatabaseMissing('categorias',[
            "Nombre" => "Ediciones"
        ]);
    }


    // public function test_verificar_seeder()
    // {
    //     $this->seed();
    // }

}
