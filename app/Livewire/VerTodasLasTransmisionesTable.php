<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Transmision;
use Livewire\Attributes\On; 

class VerTodasLasTransmisionesTable extends Component
{
    public $transmisiones;

    #[On('elemento-eliminado')] 
    public function render()
    {
        $this->transmisiones = Transmision::orderBy('created_at', 'desc')->get();
         
        return view('livewire.ver-todas-las-transmisiones-table');
    }
}
