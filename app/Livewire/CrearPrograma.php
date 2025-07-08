<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Programa;

class CrearPrograma extends Component
{
    public $programas;

    //Metodo para crear programas
    
    public function render()
    {
        $this->programas = Programa::all();
        return view('livewire.crear-programa');
    }
}
