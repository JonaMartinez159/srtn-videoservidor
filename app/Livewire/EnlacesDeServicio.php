<?php

namespace App\Livewire;

use Livewire\Component;

class EnlacesDeServicio extends Component
{
    public $datos_de_servicio;
    
    public function render()
    {
        return view('livewire.enlaces-de-servicio');
    }
}
