<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;
use App\Models\Programa;

class VerServicio extends Controller
{

    public function show($servicio_key){
        $host = env('APP_HOST'); 

        $servicios_data = Servicio::FindOrFail($servicio_key)->toArray();

        if($servicios_data['aplicacion'] == "Programas"){
            //obtener el id del programa y preguntar por su ruta
            $id_programa = $servicios_data['id_programa'];
            $programa = Programa::find($id_programa);

            $enlace_publicacion = 'rtmp://'.$host.'/'.$servicios_data['aplicacion'].'?'.$servicios_data['servicio_key'];
        }else{
            $enlace_publicacion = 'rtmp://'.$host.'/'.$servicios_data['aplicacion'].'?'.$servicios_data['servicio_key'];
        }
        $enlace_reproduccion_externa = 'rtmp://'.$host.'/'.$servicios_data['aplicacion'].'/'.$servicios_data['stream_key'];
        $enlace_consumo_hls = 'https://'.$host.'/'.$servicios_data['aplicacion'].'/hls/'.$servicios_data['stream_key'].'.m3u8';
        $enlace_consumo_web = 'https://'.$host.'/ver/show?sk='.$servicios_data['servicio_key'];

        $datos_de_servicio = array(
            "enlace_publicacion" => $enlace_publicacion,
            "enlace_reproduccion_externa" => $enlace_reproduccion_externa,
            "enlace_consumo_hls" => $enlace_consumo_hls,
            "enlace_consumo_web" => $enlace_consumo_web,
        );

        return view('ver-servicio', ['datos_de_servicio'=>$datos_de_servicio, 'aplicacion'=>$servicios_data['aplicacion']]);
    }

    public function otro($retorno){
        $retorno = "algo mas";
    }
}
