<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CrearRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::create(['name' => 'admin']);
        $pautaRole = Role::create(['name' => 'pauta']);
        $userRole = Role::create(['name' => 'usuario']);

        Permission::create(['name' => 'ver transmisiones']);
        Permission::create(['name' => 'crear servicio']);
        Permission::create(['name' => 'borrar servicio']);
        Permission::create(['name' => 'crear programa']);
        Permission::create(['name' => 'editar programa']);
        Permission::create(['name' => 'editar episodio']);
        Permission::create(['name' => 'crear transmision']);
        Permission::create(['name' => 'editar transmision']);
        Permission::create(['name' => 'borrar transmision']);

        $adminRole->givePermissionTo(['ver transmisiones', 'crear servicio', 'borrar servicio', 'crear programa', 'editar programa', 'editar episodio', 'editar transmision', 'borrar transmision']);
        $pautaRole->givePermissionTo(['ver transmisiones']);
        $userRole->givePermissionTo(['ver transmisiones', 'crear transmision', 'editar transmision', 'borrar transmision']);
    }
}
