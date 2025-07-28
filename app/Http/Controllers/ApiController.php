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

    public function showPrincipales(){
        $all_episodios = Programa::where('categoria', 'Principales')->get();

        $all_episodios_json = json_encode($all_episodios);
        echo $all_episodios_json;
    }

    public function showNuestraSeleccion(){
        $all_episodios = Programa::where('categoria', 'Seleccion')->get();

        $all_episodios_json = json_encode($all_episodios);
        echo $all_episodios_json;
    }

    public function showById($id_programa){
        $programa = Programa::find($id_programa)->toArray();

        $all_data_json = json_encode($programa);
        echo $all_data_json;
    }

    public function showEpisodiosById($id_programa){
        $episodios = Grabacion::where('programa', $id_programa)->get()->toArray();

        $all_data_json = json_encode($episodios);
        echo $all_data_json;
    }
}
