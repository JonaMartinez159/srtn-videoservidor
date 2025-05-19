<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;

class Canal1 extends Controller
{
    public function getStreamKey($servicio_key){
        $servicio = Servicio::where('servicio_key',$servicio_key)->get();

        echo json_encode($servicio);
    }

    public function show($servicio_key){
        //Obtener el streamkey
        
        return view('canal1', ['servicio_key' => $servicio_key]);
    }
}
