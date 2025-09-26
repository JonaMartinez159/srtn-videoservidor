<?php

namespace App\Livewire;

use Livewire\Component;

class Calendario extends Component
{
    public $transmisiones_hoy;

    public function mount(){
        $this->dispatch('renderTable');

        return view('livewire.calendario');
    }

}
