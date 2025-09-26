<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Transmision;
use Carbon\Carbon;

class Calendario extends Component
{
    public $transmisiones_mes;
    public $diaDelMes;
    public $nombreDelMes;
    public $fechaActual;

    public function mount(){
        $this->fechaActual = Carbon::now();
        $this->diaDelMes = $this->fechaActual->format('m');
        $this->nombreDelMes = $this->fechaActual->monthName;

    }

    public function eventoSeleccionado($id_evento){
        //dd($id_evento);
        $this->dispatch("evento_seleccionado", $id_evento);
    }

    public function avanzarMes(){
        $this->diaDelMes++;
        $mesSiguiente = $this->fechaActual->addMonth();
        
        $this->nombreDelMes = $mesSiguiente->monthName;
    }

    public function atrazarMes(){
        $this->diaDelMes--;
        $mesAnterior = $this->fechaActual->subMonth();
        
        $this->nombreDelMes = $mesAnterior->monthName;
    }

    public function render(){
        $this->transmisiones_mes = Transmision::whereMonth('created_at', $this->diaDelMes)->orderBy('fecha', 'asc')->get();

        return view('livewire.calendario');
    }

}
