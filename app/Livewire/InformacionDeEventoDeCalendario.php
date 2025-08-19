<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Transmision;

class InformacionDeEventoDeCalendario extends Component
{
    public $id_evento='0';
    public $transmision_data;

    #[On('evento_seleccionado')]
    public function evento($id_evento){
        $this->id_evento = $id_evento;
        //$this->dispatch('cambioDeFecha', );
        //$this->dispatch('cambioDeFecha');
    }

    public function render()
    {
        if($this->id_evento!='0'){
            $this->transmision_data = Transmision::find($this->id_evento);
        }
        return view('livewire.informacion-de-evento-de-calendario');
    }
}
