<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Transmision;

class ModalEditarTransmisiones extends Component
{
    public $id_transmision;
    public $showModal=false;

    public $tipo;
    public $fecha;
    public $hora_llegada;
    public $hora_inicio;
    public $lugar;
    public $descripcion;
    public $nota;
    public $responsable;

    public function editarTransmision(){
        $transmision_a_editar = Transmision::find($this->id_transmision);

        $transmision_a_editar->tipo = $this->tipo;
        $transmision_a_editar->fecha = $this->fecha;
        $transmision_a_editar->hora_llegada = $this->hora_llegada;
        $transmision_a_editar->hora_inicio = $this->hora_inicio;
        $transmision_a_editar->lugar = $this->lugar;
        $transmision_a_editar->descripcion = $this->descripcion;
        $transmision_a_editar->nota = $this->nota;
        $transmision_a_editar->responsable = $this->responsable;

        $transmision_a_editar->save();
    }

    public function render()
    {
        $transmision_data = Transmision::find($this->id_transmision);

        $this->tipo = $transmision_data->tipo;
        $this->fecha = $transmision_data->fecha;
        $this->hora_llegada = $transmision_data->hora_llegada;
        $this->hora_inicio = $transmision_data->hora_inicio;
        $this->lugar = $transmision_data->lugar;
        $this->descripcion = $transmision_data->descripcion;
        $this->nota = $transmision_data->nota;
        $this->responsable = $transmision_data->responsable;

        return view('livewire.modal-editar-transmisiones');
    }
}
