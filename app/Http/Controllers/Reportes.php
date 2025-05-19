<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reporte;

class Reportes extends Controller
{
    function enviarReporte(Request $request, $id_aplicacion){

        $reporte = new Reporte;

        $reporte->correo = $request->correo; 
        $reporte->nombre = $request->nombre; 
        $reporte->reporte = $request->reporte; 
        
        $reporte->save();

        return view('reportes', ['id_aplicacion' => $id_aplicacion, 'success' => 'true']);
        
    }

    function show($id_aplicacion){

        return view('reportes', ['id_aplicacion' => $id_aplicacion]);
    }
}
