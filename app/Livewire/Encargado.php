<?php

namespace App\Livewire;

use Livewire\Component;

class Encargado extends Component
{
    public $tipo;
    
    public function render()
    {
        return view('livewire.encargado');
    }
}
