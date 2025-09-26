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
    public $array_requerimientos_seleccionados_photo=[];

    public function setChecked($requerimiento_data){
        if (in_array($requerimiento_data['id'], $this->array_requerimientos_seleccionados)) {
            $this->array_requerimientos_seleccionados = array_diff($this->array_requerimientos_seleccionados, [$requerimiento_data['id']]);
            $this->array_requerimientos_seleccionados_photo = array_diff($this->array_requerimientos_seleccionados_photo, [$requerimiento_data['imagen']]);
        } else {
            $this->array_requerimientos_seleccionados[] = $requerimiento_data['id'];
            $this->array_requerimientos_seleccionados_photo[] = $requerimiento_data['imagen'];
        }
    }

    public function enviarTrabajadoresConvocados(){
        $this->dispatch('RequerimientosSeleccionados', array_requerimientos_seleccionados: $this->array_requerimientos_seleccionados);
        $this->showModalrequerimientos = false;
    }

    public function render()
    {
        $this->requerimientos = Requerimiento::where('etiqueta', $this->etiqueta)->get(); 
        return view('livewire.seleccionar-requerimientos-tabla-modal');
    }
}
