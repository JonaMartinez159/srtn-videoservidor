<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Servicio;

class MostrarTransmisionesEnUso extends Component
{
    public $id_servicio;
    public $servicios_en_uso;

    public function render()
    {
        $this->servicios_en_uso = Servicio::where('estado', '1')->get();
        return view('livewire.mostrar-transmisiones-en-uso');
    }
}
