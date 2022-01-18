<?php

namespace Database\Seeders;

use App\Models\Permission as ModelsPermission;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # ROLES DEL SISTEMA
        $rol1 = Role::create(['name' => 'institute']);
        $rol2 = Role::create(['name' => 'teacher']);
        $rol3 = Role::create(['name' => 'student']);

        # PERMISO PARA VER EL DASHBOARD
        Permission::create(['name' => 'dashboard'])->syncRoles($rol1, $rol2, $rol3);

        #PERMISOS PARA LOS POSTS
        Permission::create(['name' => 'table-posts'])->syncRoles($rol1, $rol2);
        Permission::create(['name' => 'show-posts'])->syncRoles($rol2, $rol3);
        Permission::create(['name' => 'creation-posts'])->syncRoles($rol1, $rol2);

        # PERMISOS PARA LAS AREAS
        Permission::create(['name' => 'show-area'])->syncRoles($rol2, $rol3);
        Permission::create(['name' => 'creation-area'])->syncRoles($rol1);
        Permission::create(['name' => 'table-area'])->syncRoles($rol1);

        # PERMISOS PARA LOS COURSES
        Permission::create(['name' => 'show-courses'])->syncRoles($rol3);
        Permission::create(['name' => 'creation-courses'])->syncRoles($rol1, $rol2);
        Permission::create(["name" => 'table-courses'])->syncRoles($rol1, $rol2);

        # PERMISOS PARA LAS ASIGNATURAS
        Permission::create(['name' => 'show-asig'])->syncRoles($rol3);

        # PERMISOS PARA LAS INSTITUCIONES
        Permission::create(['name' => 'show-institutes'])->syncRoles($rol2, $rol3);

    }
}
