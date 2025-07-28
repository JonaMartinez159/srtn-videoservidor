<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Tecnologias',
            'email' => 'tecnologias@srtn.org',
            'password' => bcrypt('10tvnayarit')
        ]);
        $admin->assignRole('admin');

        $editor = User::create([
            'name' => 'Pauta',
            'email' => 'pautaycontinuidad@srtn.org',
            'password' => bcrypt('srtn10tv')
        ]);
        $editor->assignRole('pauta');
    }
}
