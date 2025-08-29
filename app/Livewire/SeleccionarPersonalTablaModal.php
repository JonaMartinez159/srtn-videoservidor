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
    public $array_trabajadores_seleccionados_photo=[];

    public function setChecked($trabajador_data){

        if (in_array($trabajador_data['id'], $this->array_trabajadores_seleccionados)) {
            $this->array_trabajadores_seleccionados = array_diff($this->array_trabajadores_seleccionados, [$trabajador_data['id']]);
            $this->array_trabajadores_seleccionados_photo = array_diff($this->array_trabajadores_seleccionados_photo, [$trabajador_data['profile_photo_url']]);
        } else {
            $this->array_trabajadores_seleccionados[] = $trabajador_data['id'];
            $this->array_trabajadores_seleccionados_photo[] = $trabajador_data['profile_photo_url'];
        }
        //dd($this->array_trabajadores_seleccionados);
    }

    public function enviarTrabajadoresConvocados(){
        $this->dispatch('TrabajadoresConvocados', array_trabajadores_seleccionados: $this->array_trabajadores_seleccionados);
        $this->showModal = false;
    }

    public function render()
    {
        $this->trabajadores = User::where('area', $this->area)->get();
        //dd($this->trabajadores);
        return view('livewire.seleccionar-personal-tabla-modal');
    }
}
