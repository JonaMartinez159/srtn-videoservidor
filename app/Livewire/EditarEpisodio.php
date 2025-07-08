<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Grabacion;
use Livewire\Attributes\On;

class EditarEpisodio extends Component
{
    public $episodios;
    public $id_programa;

    #[On('refresh-the-component')]
    public function render()
    {   
        $this->episodios = Grabacion::where('programa', $this->id_programa)->get();
        return view('livewire.editar-episodio');
    }
}
