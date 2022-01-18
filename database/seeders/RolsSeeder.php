<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rol;

class RolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rol::create([
            'rol_type' => 'Institución',
        ]);
        Rol::create([
            'rol_type' => 'Profesor',
        ]);
        Rol::create([
            'rol_type' => 'Estudiante',
        ]);
    }
}
