<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grabacion;
use App\Models\Programa;

class ApiController extends Controller
{
    public function showAll(){
        $all_episodios = Programa::all();

        $all_episodios_json = json_encode($all_episodios);
        echo $all_episodios_json;
    }

    public function showById($id_programa){
        $programa = Programa::find($id_programa)->toArray();
        $episodios = Grabacion::where('programa', $id_programa)->get()->toArray();

        $result = array_merge($programa, $episodios);

        $all_data_json = json_encode($result);
        echo $all_data_json;
    }
}
