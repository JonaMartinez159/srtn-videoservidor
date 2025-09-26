<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Requerimiento;
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

        //Crear todos los trabajadores-------------------------------------------------------------------------------------------
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

        //switchers------------------------------------------
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

        //Requerimentos---------------------------------------------------------------------------------------------------------
        //Produccion Camaras----------------------------
        DB::table('requerimientos')->insert([
            'nombre' => 'Camara SONY modelo',
            'tipo' => 'Produccion',
            'etiqueta' => 'camaras',
            'imagen' => 'camsony.webp'
        ]);
        
        DB::table('requerimientos')->insert([
            'nombre' => 'Camara SONY modelo B',
            'tipo' => 'Produccion',
            'etiqueta' => 'camaras',
            'imagen' => 'camcanon.webp'
        ]);
        
        //Produccion->Switchers-------------------------
        DB::table('requerimientos')->insert([
            'nombre' => 'Switcher ATEM',
            'tipo' => 'Produccion',
            'etiqueta' => 'switcher',
            'imagen' => 'switatem.webp'
        ]);

        DB::table('requerimientos')->insert([
            'nombre' => 'Switcher FORA',
            'tipo' => 'Produccion',
            'etiqueta' => 'switcher',
            'imagen' => 'desco.webp'
        ]);

        DB::table('requerimientos')->insert([
            'nombre' => 'Switcher Mini-ATEM',
            'tipo' => 'Produccion',
            'etiqueta' => 'switcher',
            'imagen' => 'switatemmini.webp'
        ]);

        DB::table('requerimientos')->insert([
            'nombre' => 'Switcher YOLOBOX',
            'tipo' => 'Produccion',
            'etiqueta' => 'switcher',
            'imagen' => 'swityolo.webp'
        ]);

        //Produccion->iluminacion------------------------------
        DB::table('requerimientos')->insert([
            'nombre' => 'Lamapara neewer 250 con fuente',
            'tipo' => 'Produccion',
            'etiqueta' => 'iluminacion',
            'imagen' => 'desco.webp'
        ]);

        DB::table('requerimientos')->insert([
            'nombre' => 'Lampara con tripie',
            'tipo' => 'Produccion',
            'etiqueta' => 'iluminacion',
            'imagen' => 'desco.webp'
        ]);

        DB::table('requerimientos')->insert([
            'nombre' => 'Cañones luz colores RGB',
            'tipo' => 'Produccion',
            'etiqueta' => 'iluminacion',
            'imagen' => 'luzcanon.webp'
        ]);

        //Produccion->Audios----------------------------------
        DB::table('requerimientos')->insert([
            'nombre' => 'Microfono MANO Shure BLX2',
            'tipo' => 'Produccion',
            'etiqueta' => 'audio',
            'imagen' => 'micblx2.webp'
        ]);

        DB::table('requerimientos')->insert([
            'nombre' => 'Microfono SOLAPA Shure BLX1',
            'tipo' => 'Produccion',
            'etiqueta' => 'audio',
            'imagen' => 'micblx1solapa.webp'
        ]);

        DB::table('requerimientos')->insert([
            'nombre' => 'Microfono SOLAPA Sennheiser EW-X',
            'tipo' => 'Produccion',
            'etiqueta' => 'audio',
            'imagen' => 'micsensolapa.webp'
        ]);

        DB::table('requerimientos')->insert([
            'nombre' => 'Monitor audio bocina Yamaha 8',
            'tipo' => 'Produccion',
            'etiqueta' => 'audio',
            'imagen' => 'moniyamaha.webp'
        ]);

        DB::table('requerimientos')->insert([
            'nombre' => 'Monitor audio bocina Steren 12',
            'tipo' => 'Produccion',
            'etiqueta' => 'audio',
            'imagen' => 'monisteren.webp'
        ]);

        //Tecnico->General------------------------------------------
        DB::table('requerimientos')->insert([
            'nombre' => 'Program de video',
            'tipo' => 'Tecnico',
            'etiqueta' => 'general',
            'imagen' => 'programvideo.webp'
        ]);

        //Administrativo->alimentos---------------------------------
        DB::table('requerimientos')->insert([
            'nombre' => 'Alimentos',
            'tipo' => 'Administrativo',
            'etiqueta' => 'general',
            'imagen' => 'desco.webp'
        ]);

        //Administrativo->vehiculos
        DB::table('requerimientos')->insert([
            'nombre' => 'Tsuru NISSAN 100',
            'tipo' => 'Administrativo',
            'etiqueta' => 'vehiculos',
            'imagen' => 'cartsuru.webp'
        ]);


        DB::table('requerimientos')->insert([
            'nombre' => 'Tsuru NISSAN 101',
            'tipo' => 'Administrativo',
            'etiqueta' => 'vehiculos',
            'imagen' => 'cartsuru.webp'
        ]);

        DB::table('requerimientos')->insert([
            'nombre' => 'Tsuru NISSAN 102',
            'tipo' => 'Administrativo',
            'etiqueta' => 'vehiculos',
            'imagen' => 'cartsuru.webp'
        ]);

        DB::table('requerimientos')->insert([
            'nombre' => 'Tsuru NISSAN 103',
            'tipo' => 'Administrativo',
            'etiqueta' => 'vehiculos',
            'imagen' => 'cartsuru.webp'
        ]);

        DB::table('requerimientos')->insert([
            'nombre' => 'L200 MITSUBISHI',
            'tipo' => 'Administrativo',
            'etiqueta' => 'vehiculos',
            'imagen' => 'carmitsu.webp'
        ]);

        DB::table('requerimientos')->insert([
            'nombre' => 'Tacoma TOYOTA',
            'tipo' => 'Administrativo',
            'etiqueta' => 'vehiculos',
            'imagen' => 'cartacoma.webp'
        ]);

        DB::table('requerimientos')->insert([
            'nombre' => 'Avanza TOYOTA',
            'tipo' => 'Administrativo',
            'etiqueta' => 'vehiculos',
            'imagen' => 'caravanza.webp'
        ]);

        DB::table('requerimientos')->insert([
            'nombre' => 'One MG MOTORS 1',
            'tipo' => 'Administrativo',
            'etiqueta' => 'vehiculos',
            'imagen' => 'desco.webp'
        ]);

        DB::table('requerimientos')->insert([
            'nombre' => 'One MG MOTORS 2',
            'tipo' => 'Administrativo',
            'etiqueta' => 'vehiculos',
            'imagen' => 'desco.webp'
        ]);

        //Administrativo->Oficios de comision
        DB::table('requerimientos')->insert([
            'nombre' => 'Oficios de comision',
            'tipo' => 'Administrativo',
            'etiqueta' => 'oficios',
            'imagen' => 'desco.webp'
        ]);

        //Ubicaciones------------------------------------------------------------------------------------------------------------------------
        //Museos
        DB::table('sitios')->insert([
            'nombre' => 'Museo 5 pueblos',
            'etiqueta' => 'museos',
            'municipio' => 'Tepic',
            'calle' => 'Av Mexico',
            'colonia' => 'Centro',
            'numero' => '105',
            'ubicacion' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3711.9369057753597!2d-104.89497862501193!3d21.510191171069827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842736fe21bb980b%3A0x6269bd642952ee1d!2sCinco%20Pueblos%20Casa%20De%20Artesanias!5e0!3m2!1ses!2smx!4v1756225145035!5m2!1ses!2smx'
        ]);

        DB::table('sitios')->insert([
            'nombre' => 'Museo Regional de Nayarit',
            'etiqueta' => 'museos',
            'municipio' => 'Tepic',
            'calle' => 'Av Mexico',
            'colonia' => 'Centro',
            'numero' => '91',
            'ubicacion' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3711.9401803963983!2d-104.89738662063755!3d21.51006292020364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842736e393bd8f97%3A0xb100d741039c119e!2sMuseo%20Regional%20de%20Nayarit!5e0!3m2!1ses!2smx!4v1756225254972!5m2!1ses!2smx'
        ]);

        DB::table('sitios')->insert([
            'nombre' => 'Casa Museo Amado Nervo',
            'etiqueta' => 'museos',
            'municipio' => 'Tepic',
            'calle' => 'Zacatecas',
            'colonia' => 'Centro',
            'numero' => '284',
            'ubicacion' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3711.879548129742!2d-104.89298542501189!3d21.512437470991017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8427370045ffc7d1%3A0xdceee6dff78416a6!2sCasa%20Museo%20Amado%20Nervo!5e0!3m2!1ses!2smx!4v1756225350364!5m2!1ses!2smx'
        ]);

        DB::table('sitios')->insert([
            'nombre' => 'Museo interactivo de ciencias e innovación de Nayarit',
            'etiqueta' => 'museos',
            'municipio' => 'Tepic',
            'calle' => 'Av. De la salud',
            'colonia' => 'Ciudad Del conocimiento',
            'numero' => '1',
            'ubicacion' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3712.6737343803406!2d-104.8545709206431!3d21.48131482126593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842737571408262d%3A0x1031e9fecb9d645a!2sMuseo%20interactivo%20de%20ciencias%20e%20innovaci%C3%B3n%20de%20Nayarit!5e0!3m2!1ses!2smx!4v1756225538835!5m2!1ses!2smx'
        ]);

        DB::table('sitios')->insert([
            'nombre' => 'Centro de arte contemporaneo Emilia Ortiz',
            'etiqueta' => 'museos',
            'municipio' => 'Tepic',
            'calle' => 'Miguel Hidalgo',
            'colonia' => 'Centro',
            'numero' => '17',
            'ubicacion' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59390.69919543761!2d-104.9679058513672!3d21.510904200000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8427374d351fd673%3A0x688512bed04da5ab!2sCentro%20de%20arte%20contempor%C3%A1neo%20del%20bicentenario%20Emilia%20Ort%C3%ADz!5e0!3m2!1ses!2smx!4v1756227015457!5m2!1ses!2smx'
        ]);

        //instituciones-------------------------------------
        DB::table('sitios')->insert([
            'nombre' => 'Tribunal Superior de Justicia',
            'etiqueta' => 'instituciones',
            'municipio' => 'Tepic',
            'calle' => 'Zacatecas',
            'colonia' => 'Centro',
            'numero' => '109',
            'ubicacion' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3712.034838262435!2d-104.89758962063834!3d21.506355320340734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842736fd8543de53%3A0xbaee5ed0e5b0a10a!2sTribunal%20Superior%20de%20Justicia!5e0!3m2!1ses!2smx!4v1756227627534!5m2!1ses!2smx'
        ]);

        DB::table('sitios')->insert([
            'nombre' => 'H. Congreso del estado de Nayarit',
            'etiqueta' => 'instituciones',
            'municipio' => 'Tepic',
            'calle' => 'Mexico',
            'colonia' => 'Centro',
            'numero' => '38',
            'ubicacion' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d463.9961889443837!2d-104.89309776258686!3d21.508914129905513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842737ac1443a0a3%3A0x657624db474b7354!2sH.%20Congreso%20del%20estado%20de%20Nayarit!5e0!3m2!1ses!2smx!4v1756227710293!5m2!1ses!2smx'
        ]);

        DB::table('sitios')->insert([
            'nombre' => 'NAYARTE Galeria artesanal',
            'etiqueta' => 'instituciones',
            'municipio' => 'Tepic',
            'calle' => 'Av. Paseo de la loma',
            'colonia' => 'Centro',
            'numero' => '1',
            'ubicacion' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3712.116823379949!2d-104.90678870321038!3d21.50314360000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842737000e6c6093%3A0xf78229064b045bf!2sNayarte!5e0!3m2!1ses!2smx!4v1756228399073!5m2!1ses!2smx'
        ]);

        //Restaurantes--------------------------------
    }
}
