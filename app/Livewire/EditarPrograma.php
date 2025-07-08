<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Programa;
use Livewire\Attributes\On;

class EditarPrograma extends Component
{
    public $id_programa;
    public $programas_data;

    #[On('refresh-the-component')]
    public function render()
    {
        $this->programas_data = Programa::find($this->id_programa);

        return view('livewire.editar-programa');
    }
}
