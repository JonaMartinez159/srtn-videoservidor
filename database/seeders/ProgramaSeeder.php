<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ProgramaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $programa = [
            ['nombre' => 'Derecho de mujer', 'descripcion' => 'Derecho de mujer', 'categoria' => 'Legal', 'ruta' => 'derechomujer'],
            ['nombre' => 'Abrazando el Caos con Ruth Tovar', 'descripcion' => 'Abrazando el Caos con Ruth Tovar', 'categoria' => 'Psicologia', 'ruta' => 'abrazandocaos'],
            ['nombre' => 'Juventízate', 'descripcion' => 'Juventízate de opinión', 'categoria' => 'Juvenil', 'ruta' => 'juventizate'],
            ['nombre' => 'El Mensajero de la Salud', 'descripcion' => 'El Mensajero de la Salud', 'categoria' => 'Salud', 'ruta' => 'mensajerosalud'],
            ['nombre' => 'Latiendo por ti', 'descripcion' => 'Latiendo por ti', 'categoria' => 'Informativo', 'ruta' => 'latiendo'],
            ['nombre' => 'Poder Judicial TV y Escucha', 'descripcion' => 'Poder Judicial TV y Escucha', 'categoria' => 'Legal', 'ruta' => 'poderjudicial'],
            ['nombre' => 'La Hora del Recreo con COCO', 'descripcion' => 'La Hora del Recreo con COCO', 'categoria' => 'Infantil', 'ruta' => 'horarecreo'],
            ['nombre' => 'Poder Judicial TV y Escucha', 'descripcion' => 'Poder Judicial TV y Escucha', 'categoria' => 'Legal', 'ruta' => 'poderjudicial'],

        ];

        DB::table('programas')->insert($programa);
    }
}
