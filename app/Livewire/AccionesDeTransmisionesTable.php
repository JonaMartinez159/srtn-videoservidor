<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Transmision;

class AccionesDeTransmisionesTable extends Component
{
    public $id_transmision;

    public function eliminarTransmision(){
        $transmision_a_borrar = Transmision::find($this->id_transmision);
        $transmision_a_borrar->delete();

        //dispatch to component table
        $this->dispatch('elemento-eliminado'); 
    }

    public function render()
    {
        return view('livewire.acciones-de-transmisiones-table');
    }
}
