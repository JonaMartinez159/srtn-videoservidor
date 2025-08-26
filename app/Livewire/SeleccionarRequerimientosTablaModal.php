<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Requerimiento;

class SeleccionarRequerimientosTablaModal extends Component
{
    public $showModalrequerimientos=false;
    public $requerimientos;
    public $etiqueta='camaras';
    public $array_requerimientos_seleccionados=[];

    public function setChecked($id_requerimiento){
        if (in_array($id_requerimiento, $this->array_requerimientos_seleccionados)) {
            $this->array_requerimientos_seleccionados = array_diff($this->array_requerimientos_seleccionados, [$id_requerimiento]);
        } else {
            $this->array_requerimientos_seleccionados[] = $id_requerimiento;
        }
    }

    public function enviarTrabajadoresConvocados(){
        $this->dispatch('TrabajadoresConvocados');
        $this->showModalrequerimientos = false;
    }

    public function render()
    {
        $this->requerimientos = Requerimiento::where('etiqueta', $this->etiqueta)->get(); 
        return view('livewire.seleccionar-requerimientos-tabla-modal');
    }
}
