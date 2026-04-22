<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'UsuarioNormal',
            'email' => 'usuario@gmail.com',
            'password' => 'contraseña123',
            'es_admin' => '0',
        ]);

        DB::table('users')->insert([
            'name' => 'UsuarioAdmin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('contraseña123'),
            'es_admin' => '1',
        ]);
    }
}
