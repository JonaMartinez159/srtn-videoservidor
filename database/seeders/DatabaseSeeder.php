<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
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

        //Crear todos los trabajadores-------------------------------------
        //Camaras
        DB::table('users')->insert([
            'name' => 'Felipe Ramirez',
            'email' => 'feliperamirez@srtn.org',
            'area' => 'camarografo',
            'password' => bcrypt('srtn10tv')
        ]);

        DB::table('users')->insert([
            'name' => 'Sergio ',
            'email' => 'sergio@srtn.org',
            'area' => 'camarografo',
            'password' => bcrypt('srtn10tv')
        ]);

        DB::table('users')->insert([
            'name' => 'Kevin Ruelas',
            'email' => 'kevinruelas@srtn.org',
            'area' => 'camarografo',
            'password' => bcrypt('srtn10tv')
        ]);

        DB::table('users')->insert([
            'name' => 'Alonso ',
            'email' => 'alonso@srtn.org',
            'area' => 'camarografo',
            'password' => bcrypt('srtn10tv')
        ]);

        DB::table('users')->insert([
            'name' => 'Oscar Valdivia',
            'email' => 'oscarvaldivia@srtn.org',
            'area' => 'camarografo',
            'password' => bcrypt('srtn10tv')
        ]);

        DB::table('users')->insert([
            'name' => 'Jose',
            'email' => 'jose@srtn.org',
            'area' => 'camarografo',
            'password' => bcrypt('srtn10tv')
        ]);


        //Audios-------------------------------------------
        DB::table('users')->insert([
            'name' => 'David Meza',
            'email' => 'davidmeza@srtn.org',
            'area' => 'audios',
            'password' => bcrypt('srtn10tv')
        ]);

        DB::table('users')->insert([
            'name' => 'Roberto ',
            'email' => 'roberto@srtn.org',
            'area' => 'audios',
            'password' => bcrypt('srtn10tv')
        ]);

        DB::table('users')->insert([
            'name' => 'Fernando ',
            'email' => 'fernando@srtn.org',
            'area' => 'audios',
            'password' => bcrypt('srtn10tv')
        ]);

        DB::table('users')->insert([
            'name' => 'Salvador Herena',
            'email' => 'salvadorherena@srtn.org',
            'area' => 'audios',
            'password' => bcrypt('srtn10tv')
        ]);

        //Ingenieria-----------------------------------------
        DB::table('users')->insert([
            'name' => 'Dario Quintero',
            'email' => 'darioquintero@srtn.org',
            'area' => 'ingenieria',
            'password' => bcrypt('srtn10tv')
        ]);

        DB::table('users')->insert([
            'name' => 'Alberto Jacobo',
            'email' => 'albertojacobo@srtn.org',
            'area' => 'ingenieria',
            'password' => bcrypt('srtn10tv')
        ]);

        DB::table('users')->insert([
            'name' => 'Antonio Guillen',
            'email' => 'antonioguillen@srtn.org',
            'area' => 'ingenieria',
            'password' => bcrypt('srtn10tv')
        ]);

        DB::table('users')->insert([
            'name' => 'Jesus Campos',
            'email' => 'jesuscampos@srtn.org',
            'area' => 'ingenieria',
            'password' => bcrypt('srtn10tv')
        ]);

        DB::table('users')->insert([
            'name' => 'Manuel Campos',
            'email' => 'manuelcampos@srtn.org',
            'area' => 'ingenieria',
            'password' => bcrypt('srtn10tv')
        ]);

        DB::table('users')->insert([
            'name' => 'Jonathan Martinez',
            'email' => 'jonathanmartinez@srtn.org',
            'area' => 'ingenieria',
            'password' => bcrypt('srtn10tv')
        ]);

        DB::table('users')->insert([
            'name' => 'Gustavo Salinas',
            'email' => 'gustavosalinas@srtn.org',
            'area' => 'ingenieria',
            'password' => bcrypt('srtn10tv')
        ]);

        DB::table('users')->insert([
            'name' => 'Roberto ',
            'email' => 'roberto2@srtn.org',
            'area' => 'ingenieria',
            'password' => bcrypt('srtn10tv')
        ]);

        //Redes Sociales------------------------------------------
        DB::table('users')->insert([
            'name' => 'Jesus Flores',
            'email' => 'jesusflores@srtn.org',
            'area' => 'redes',
            'password' => bcrypt('srtn10tv')
        ]);

        //Presentadores
        DB::table('users')->insert([
            'name' => 'Alfonso De La Vega',
            'email' => 'alfonsodelavega@srtn.org',
            'area' => 'presentador',
            'password' => bcrypt('srtn10tv')
        ]);

        DB::table('users')->insert([
            'name' => 'Alejandro Hinojosa',
            'email' => 'alejandrohinojosa@srtn.org',
            'area' => 'presentador',
            'password' => bcrypt('srtn10tv')
        ]);

        DB::table('users')->insert([
            'name' => 'Gabriel Carrillo',
            'email' => 'gabrielcarrillo@srtn.org',
            'area' => 'presentador',
            'password' => bcrypt('srtn10tv')
        ]);

        DB::table('users')->insert([
            'name' => 'Victoria Leija',
            'email' => 'victorialeija@srtn.org',
            'area' => 'presentador',
            'password' => bcrypt('srtn10tv')
        ]);

        DB::table('users')->insert([
            'name' => 'Karla Rosado',
            'email' => 'karlarosado@srtn.org',
            'area' => 'presentador',
            'password' => bcrypt('srtn10tv')
        ]);

        //switchers-----------------------------------------------
        DB::table('users')->insert([
            'name' => 'Lizeth Luna',
            'email' => 'lizethluna@srtn.org',
            'area' => 'switcher',
            'password' => bcrypt('srtn10tv')
        ]);

        DB::table('users')->insert([
            'name' => 'Oscar ',
            'email' => 'oscar@srtn.org',
            'area' => 'switcher',
            'password' => bcrypt('srtn10tv')
        ]);

        DB::table('users')->insert([
            'name' => 'Angel Ibarra',
            'email' => 'angelibarra@srtn.org',
            'area' => 'switcher',
            'password' => bcrypt('srtn10tv')
        ]);

        DB::table('users')->insert([
            'name' => 'Teo Medina',
            'email' => 'teomedina@srtn.org',
            'area' => 'switcher',
            'password' => bcrypt('srtn10tv')
        ]);

        DB::table('users')->insert([
            'name' => 'Erika Moreno',
            'email' => 'eriakamoreno@srtn.org',
            'area' => 'switcher',
            'password' => bcrypt('srtn10tv')
        ]);

        DB::table('users')->insert([
            'name' => 'Casado',
            'email' => 'casado@srtn.org',
            'area' => 'switcher',
            'password' => bcrypt('srtn10tv')
        ]);
    }
}
