<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;

class Canal1 extends Controller
{
    public function authNginxService(){
        if(isset($_POST['app']) && isset($_POST['name'])){
            $app = $_POST['app'];
            $swfurl = $_POST['swfurl'];
            $streamkey = $_POST['name'];
            $ipcliente = $_POST['addr'];

            //Obtener el servicio_key
            $explode_url = explode("?", $swfurl);
            $servicio_key = $explode_url[1];

            $servicio_existente = Servicio::where('servicio_key', $servicio_key)->firstOrFail();

            
            if(isset($_GET['done'])){
                $servicio_a_editar = Servicio::find($servicio_existente->id);
                $servicio_a_editar->estado = '0';
                $servicio_a_editar->save();
            }else{
                if($servicio_existente->aplicacion == 'Canal1' && $servicio_existente->stream_key == $streamkey && $servicio_existente->estado != '1'){
                    //insertar
                    $servicio_a_editar = Servicio::find($servicio_existente->id);

                    $servicio_a_editar->estado = '1';
                    $servicio_a_editar->ip_ultima_publicacion = $ipcliente;
                    $servicio_a_editar->save();
                }else{
                    abort(404);
                }
            }
        }
    }

    public function getStreamKey($servicio_key){
        $servicio = Servicio::where('servicio_key',$servicio_key)->get();

        echo json_encode($servicio);
    }

    public function show($servicio_key){
        //Obtener el streamkey
        
        return view('canal1', ['servicio_key' => $servicio_key]);
    }
}
