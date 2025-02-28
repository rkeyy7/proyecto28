<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 🔥 Elimina todos los registros antes de insertar nuevos
        DB::table('users')->truncate();

        // 🔹 Crear un usuario fijo
        User::create([
            'name' => 'Ruben Castaño',
            'email' => 'rubencg1930@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        // 🔹 Generar 99 usuarios aleatorios
        User::factory(99)->create();
    }
}
