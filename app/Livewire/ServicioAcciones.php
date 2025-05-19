<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Servicio;
use Livewire\Attributes\On; 

class ServicioAcciones extends Component
{
    public $servicio_key;
    public $stream_key="hola";

    public function render()
    {
        //$this->stream_key = Servicio::select('stream_key')->where('servicio_key', $this->servicio_key)->get();
        $this->stream_key = "hola";
        return view('livewire.servicio-acciones');
    }
}
