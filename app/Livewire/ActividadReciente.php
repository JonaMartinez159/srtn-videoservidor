<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Transmision;

class ActividadReciente extends Component
{
    public $transmisiones_recientes;

    public function render()
    {
        $this->transmisiones_recientes = Transmision::limit(4)->orderBy('created_at', 'desc')->get();
        return view('livewire.actividad-reciente');
    }
}
