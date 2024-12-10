<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('alumno')->insert([
            [
                'nombre' => 'Pablo',
                'telefono' => '123456789',
                'edad' => 20,
                'password' => 'contrasena1',
                'email' => 'pablo@gmail.com',
                'sexo' => 'M',
            ],
            [
                'nombre' => 'Dani',
                'telefono' => '987654321',
                'edad' => 29,
                'password' => 'contrasena2',
                'email' => 'dani@gmail.com',
                'sexo' => 'M',
            ],
        ]);
    }
}
