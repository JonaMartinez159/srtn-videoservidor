<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Sitio;

class SeleccionarUbicacionTablaModal extends Component
{
    public $showModalubicacion=false;
    public $etiqueta='museos';
    public $ubicaciones;
    public $ubicacion_seleccionada='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59394.558998169996!2d-104.86331745!3d21.50145445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842735d8893dcfdb%3A0x83784645f40c2d79!2sTepic%2C%20Nay.!5e0!3m2!1ses!2smx!4v1756230631404!5m2!1ses!2smx';

    public function setUbicacion($ubicacion_data){
        //dd($ubicacion_data);
        $this->ubicacion_seleccionada = $ubicacion_data;
        $this->showModalubicacion=false;
    }

    public function render()
    {
        $this->ubicaciones = Sitio::where('etiqueta', $this->etiqueta)->get();
        return view('livewire.seleccionar-ubicacion-tabla-modal');
    }
}
