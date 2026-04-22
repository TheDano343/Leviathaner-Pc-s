<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstatusEntidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estatus_entidads')->insert([
            'Nombre_Estatus' => 'Activo',
        ]);

        DB::table('estatus_entidads')->insert([
            'Nombre_Estatus' => 'Inactivo',
        ]);
    }
}
