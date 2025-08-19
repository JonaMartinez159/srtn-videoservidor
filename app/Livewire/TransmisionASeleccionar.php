<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Transmision;

class TransmisionASeleccionar extends Component
{
    public $transmisiones_hoy;

    #[On('fecha_seleccionada')]
    public function cambioFecha($fecha){
        $this->transmisiones_hoy=Transmision::where('fecha', $fecha)->get();
    }

    public function verEventoSeleccionado($id_evento){
        $this->dispatch('evento_seleccionado', ['id_evento' => $id_evento]);
    }

    public function mount()
    {
         $this->transmisiones_hoy=Transmision::where('fecha', '2025-08-19')->get();
        return view('livewire.transmision-a-seleccionar');
    }

    public function render()
    {
        return view('livewire.transmision-a-seleccionar');
    }
}
