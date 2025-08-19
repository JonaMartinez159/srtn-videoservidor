<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transmision;

class Transmisiones extends Controller
{
    public function all(){
        $todas = Transmision::all();
        //$formato_calendario=[];

        foreach($todas as $transmision){
            $formato_calendario[] = [
                'id' => $transmision->id,
                'start' => $transmision->fecha,
                'display' => 'background',
            ];
        }
        echo json_encode($formato_calendario);
    }
}
