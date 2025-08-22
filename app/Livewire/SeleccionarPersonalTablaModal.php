<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class SeleccionarPersonalTablaModal extends Component
{
    public $showModal=false;
    public $area='camarografo';
    public $trabajadores;
    public $array_trabajadores_seleccionados=[];

    public function setChecked($id_trabajador){
        if (in_array($id_trabajador, $this->array_trabajadores_seleccionados)) {
            $this->array_trabajadores_seleccionados = array_diff($this->array_trabajadores_seleccionados, [$id_trabajador]);
        } else {
            $this->array_trabajadores_seleccionados[] = $id_trabajador;
        }
    }

    public function enviarTrabajadoresConvocados(){
        $this->dispatch('TrabajadoresConvocados');
        $this->showModal = false;
    }

    public function render()
    {
        $this->trabajadores = User::where('area', $this->area)->get();
        return view('livewire.seleccionar-personal-tabla-modal');
    }
}
