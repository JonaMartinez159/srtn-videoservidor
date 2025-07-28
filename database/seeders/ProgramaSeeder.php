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
        //programas para el select 
        $programa = [
            ['nombre' => 'Derecho de mujer', 'descripcion' => 'Derecho de mujer', 'categoria' => 'Legal', 'ruta' => 'derechomujer'],
            ['nombre' => 'Abrazando el Caos con Ruth Tovar', 'descripcion' => 'Abrazando el Caos con Ruth Tovar', 'categoria' => 'Psicologia', 'ruta' => 'abrazandocaos'],
            ['nombre' => 'Juventízate', 'descripcion' => 'Juventízate de opinión', 'categoria' => 'Juvenil', 'ruta' => 'juventizate'],
            ['nombre' => 'El Mensajero de la Salud', 'descripcion' => 'El Mensajero de la Salud', 'categoria' => 'Salud', 'ruta' => 'mensajerosalud'],
            ['nombre' => 'Latiendo por ti', 'descripcion' => 'Latiendo por ti', 'categoria' => 'Informativo', 'ruta' => 'latiendoporti'],
            ['nombre' => 'Poder Judicial TV y Escucha', 'descripcion' => 'Poder Judicial TV y Escucha', 'categoria' => 'Legal', 'ruta' => 'poderjudicial'],
            ['nombre' => 'La Hora del Recreo con COCO', 'descripcion' => 'La Hora del Recreo con COCO', 'categoria' => 'Infantil', 'ruta' => 'horadelrecreo'],
            ['nombre' => 'Deporte 10', 'descripcion' => 'Deporte 10', 'categoria' => 'deportes', 'ruta' => 'deporte10'],

        ];

        //servicios de los programas
        $servicios_programa = [
            ['aplicacion' => 'Programas', 'id_programa' => 1, 'servicio_key' => 'wzopv0qjggsj681', 'stream_key' => 'derechomujer',  'stream_key_published' => '', 'nombre' => 'Derecho de mujer', 'descripcion' => 'Derecho de mujer', 'estado' => '0', 'ip_ultima_publicacion' => ''],
            ['aplicacion' => 'Programas', 'id_programa' => 2, 'servicio_key' => '56xnb80lj1ctq8l', 'stream_key' => 'abrazandocaos', 'stream_key_published' => '', 'nombre' => 'Abrazando el Caos con Ruth Tovar', 'descripcion' => 'Abrazando el Caos con Ruth Tovar', 'estado' => '0', 'ip_ultima_publicacion' => ''],
            ['aplicacion' => 'Programas', 'id_programa' => 3, 'servicio_key' => 'bprc45vkgk1lrpl', 'stream_key' => 'juventizate',   'stream_key_published' => '', 'nombre' => 'Juventízate', 'descripcion' => 'Juventízate de opinión', 'estado' => '0', 'ip_ultima_publicacion' => ''],
            ['aplicacion' => 'Programas', 'id_programa' => 4, 'servicio_key' => '02db9opp1kl0a43', 'stream_key' => 'mensajerosalud', 'stream_key_published' => '', 'nombre' => 'El Mensajero de la Salud', 'descripcion' => 'El Mensajero de la Salud', 'estado' => '0', 'ip_ultima_publicacion' => ''],
            ['aplicacion' => 'Programas', 'id_programa' => 5, 'servicio_key' => 'zdaw02vx362dtb1', 'stream_key' => 'latiendoporti', 'stream_key_published' => '', 'nombre' => 'Latiendo por ti', 'descripcion' => 'Latiendo por ti', 'estado' => '0', 'ip_ultima_publicacion' => ''],
            ['aplicacion' => 'Programas', 'id_programa' => 6, 'servicio_key' => '31u4aboesrxl9eb', 'stream_key' => 'poderjudicial', 'stream_key_published' => '', 'nombre' => 'Poder Judicial TV y Escucha', 'descripcion' => 'Poder Judicial TV y Escucha', 'estado' => '0', 'ip_ultima_publicacion' => ''],
            ['aplicacion' => 'Programas', 'id_programa' => 7, 'servicio_key' => 'zsywhnv9fr30h9o', 'stream_key' => 'horadelrecreo', 'stream_key_published' => '', 'nombre' => 'La Hora del Recreo con COCO', 'descripcion' => 'La Hora del Recreo con COCO', 'estado' => '0', 'ip_ultima_publicacion' => ''],
            ['aplicacion' => 'Programas', 'id_programa' => 8, 'servicio_key' => 'mb03vq7e1xny1xc', 'stream_key' => 'deporte10',     'stream_key_published' => '', 'nombre' => 'Deporte 10', 'descripcion' => 'Deporte 10', 'estado' => '0', 'ip_ultima_publicacion' => '', ],
            ['aplicacion' => 'Permanentes', 'id_programa' => 0, 'servicio_key' => 'UWqBR3aKfb8FJGw', 'stream_key' => 'nayarittv',    'stream_key_published' => '', 'nombre' => 'tele10', 'descripcion' => 'Streaming permanente de tele10', 'estado' => '0', 'ip_ultima_publicacion' => ''],
        ];

        DB::table('servicios')->insert($servicios_programa);
        DB::table('programas')->insert($programa);
    }
}
