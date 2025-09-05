<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Transmision;
use App\Models\User;
use App\Models\Requerimiento;
use App\Models\Sitio;

class InformacionDeEventoDeCalendario extends Component
{
    public $id_evento='0';
    public $transmision_data;
    public $personal_convocado=[];
    public $requerimientos=[];
    public $ubicacion;
    public $fotos=[];

    #[On('evento_seleccionado')]
    public function evento($id_evento){
        $this->id_evento = $id_evento;

        //limpiar arreglos
        $this->personal_convocado = [];
        $this->requerimientos = [];
        $this->fotos = [];
    }

    public function render()
    {
        if($this->id_evento!='0'){
            $this->transmision_data = Transmision::find($this->id_evento);

            //personal convocado
            $personal_convocado_lenght = explode(',', $this->transmision_data[0]['personal_convocado']);
            
            foreach($personal_convocado_lenght as $personal_id){
                $personal = User::find($personal_id);

                $this->personal_convocado[] =  array(['nombre' => $personal->name, 'photo' => $personal->profile_photo_url, 'area' => $personal->area]);
            }

            //Requerimientos
            $requerimientos_lenght = explode(',', $this->transmision_data[0]['requerimientos']);
            
            foreach($requerimientos_lenght as $requerimientos_id){
                $requerimiento = Requerimiento::find($requerimientos_id);

                $this->requerimientos[] =  array(['nombre' => $requerimiento->nombre, 'photo' => $requerimiento->foto]);
            }

            //Ubicacion
            $this->ubicacion = Sitio::select('nombre', 'ubicacion')->where('id', $this->transmision_data[0]['ubicacion'])->get();

            //fotos
            $fotos_lenght = explode(',', $this->transmision_data[0]['fotografias']);
            
            foreach($fotos_lenght as $foto){
                $this->fotos[] =  $foto;
                //dd($this->fotos);
            }
        }
        return view('livewire.informacion-de-evento-de-calendario');
    }
}
