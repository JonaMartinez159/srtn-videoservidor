<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;

class Canal1 extends Controller
{
    public $host;

    public function authNginxService(){
        if(isset($_POST['app']) && isset($_POST['name'])){
            $app = $_POST['app'];
            $swfurl = $_POST['swfurl'];
            $streamkey_pre = $_POST['name'];
            $ipcliente = $_POST['addr'];

            //Obtener el servicio_key
            $explode_url = explode("?", $swfurl);
            $servicio_key = $explode_url[1];

            //obtener el streamkey  
            //el formato de streamkey es [nombre]-[numero de key]
            $explode_streamkey_pre = explode("-", $streamkey_pre);
            $streamkey = $explode_streamkey_pre[0];

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
                    $servicio_a_editar->stream_key_published = $streamkey_pre;
                    $servicio_a_editar->save();
                }elseif($servicio_existente->aplicacion == 'Canal1' && $servicio_existente->stream_key == $streamkey && $servicio_existente->estado == '1'){
                    if($streamkey_pre != $servicio_existente->stream_key_published){
                        //insertar
                        $servicio_a_editar = Servicio::find($servicio_existente->id);

                        $servicio_a_editar->estado = '1';
                        $servicio_a_editar->ip_ultima_publicacion = $ipcliente;
                        $servicio_a_editar->stream_key_published = $streamkey_pre;
                        $servicio_a_editar->save();
                    }else{
                        abort(404);
                    }
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
        $this->host = env('APP_HOST');
        
        return view('canal1', ['servicio_key' => $servicio_key, 'host' => $this->host]);
    }
}
