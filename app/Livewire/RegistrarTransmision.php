<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Transmision;

class RegistrarTransmision extends Component
{
    public $showModal=false;

    public $tipo;
    public $fecha;
    public $hora_llegada;
    public $hora_inicio;
    public $lugar;
    public $descripcion;
    public $nota;
    public $responsable;

    public function registrarTransmision(){
        //validar
        //
        
        $transmision_a_crear = new Transmision();

        $transmision_a_crear->tipo = $this->tipo;
        $transmision_a_crear->fecha = $this->fecha;
        $transmision_a_crear->hora_llegada = $this->hora_llegada;
        $transmision_a_crear->hora_inicio = $this->hora_inicio;
        $transmision_a_crear->lugar = $this->lugar;
        $transmision_a_crear->descripcion = $this->descripcion;
        $transmision_a_crear->nota = $this->nota;
        $transmision_a_crear->responsable = $this->responsable;

        $transmision_a_crear->save();

        //redireccionar
        session()->flash('status', 'Registro creado correctamente');
        $this->redirectRoute('transmisiones');
    }

    public function render()
    {
        return view('livewire.registrar-transmision');
    }
}
