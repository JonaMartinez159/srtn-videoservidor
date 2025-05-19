<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Servicio;

class ChekServicioDisponibilidad extends Component
{
    public $disponibilidad;
    public $modelo_existe;
    public $id_servicio;

    public function refreshDisponibilidad(){
        
            
    }

    public function render()
    {
        $this->disponibilidad = Servicio::find($this->id_servicio);
        return view('livewire.chek-servicio-disponibilidad', ['disponibilidad_final' => $this->disponibilidad, 'id_servicio_final' => $this->id_servicio]);
    }
}
