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
            [
                'int_rol' => 1,
                'int_rut' => '21770', // The user wrote RUT 21770
                'int_nombre' => 'Admin Nombre',
                'int_apellido_paterno' => 'Admin Apellido',
                'int_apellido_materno' => 'Paterno',
                'int_nombre_completo' => 'Admin Nombre Admin Apellido Paterno',
                'numero_camiseta' => '10',
                'int_posicion' => 'Administrador',
                'int_telefono' => '+56912345678',
                'int_fecha_nacimiento' => '1990-01-01',
                'int_instagram' => '@admin',
                'int_estado' => true,
                'password' => Hash::make('admin'), // The user wrote password admin
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'int_rol' => 2,
                'int_rut' => '21770-C', // Must be less than 12
                'int_nombre' => 'Cuerpo Nombre',
                'int_apellido_paterno' => 'Tecnico Apellido',
                'int_apellido_materno' => 'Materno',
                'int_nombre_completo' => 'Cuerpo Nombre Tecnico Apellido Materno',
                'numero_camiseta' => 'NULL',
                'int_posicion' => 'DT',
                'int_telefono' => '+56987654321',
                'int_fecha_nacimiento' => '1980-05-15',
                'int_instagram' => '@dt',
                'int_estado' => true,
                'password' => Hash::make('cuerpo'), // Default password or the user requested? user said "21770 cuerpo" meaning pass cuerpo?
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'int_rol' => 3,
                'int_rut' => '21770-J', // Must be less than 12
                'int_nombre' => 'Jugador Nombre',
                'int_apellido_paterno' => 'Estrella',
                'int_apellido_materno' => 'Materno',
                'int_nombre_completo' => 'Jugador Nombre Estrella Materno',
                'numero_camiseta' => '7',
                'int_posicion' => 'Delantero',
                'int_telefono' => '+56900000000',
                'int_fecha_nacimiento' => '2000-10-10',
                'int_instagram' => '@jugador',
                'int_estado' => true,
                'password' => Hash::make('jugadores'), // password 'jugadores'
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
