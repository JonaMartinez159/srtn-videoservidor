<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;

class VerServicio extends Controller
{

    public function show($servicio_key){
        $host = env('APP_HOST', 'localhost'); 

        $servicios_data = Servicio::FindOrFail($servicio_key)->toArray();
        $enlace_publicacion = 'rtmp://'.$host.'/'.$servicios_data['aplicacion'].'?'.$servicios_data['servicio_key'];
        $enlace_consumo_hls = 'rtmp://'.$host.'/'.$servicios_data['aplicacion'].'/hls/'.$servicios_data['stream_key'].'.m3u8';
        $enlace_consumo_web = 'http://'.$host.'/'.$servicios_data['aplicacion'].'/show?sk='.$servicios_data['servicio_key'];

        $datos_de_servicio = array(
            "enlace_publicacion" => $enlace_publicacion,
            "enlace_consumo_hls" => $enlace_consumo_hls,
            "enlace_consumo_web" => $enlace_consumo_web,
        );

        return view('ver-servicio', ['datos_de_servicio'=>$datos_de_servicio]);
    }

    public function otro($retorno){
        $retorno = "algo mas";
    }
}
