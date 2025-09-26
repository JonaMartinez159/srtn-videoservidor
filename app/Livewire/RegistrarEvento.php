<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\Attributes\On; 
use Illuminate\Support\Facades\Mail;
use App\Mail\AvisoEventoCreado;

use App\Models\Transmision;

class RegistrarEvento extends Component
{
    //De formulario
    #[Validate('required', message: 'Debes elegir una fecha')]
    public $fecha;
    #[Validate('required', message: 'Agrega la hora de llegada')]
    public $hora_llegada;
    #[Validate('required', message: 'Agrega la hora de inicio')]
    public $hora_inicio;
    #[Validate('required', message: 'Asigna un nombre al evento')]
    public $nombre;
    #[Validate('required', message: 'Explicale al equipo de que trata el evento')]
    public $descripcion;
    #[Validate('required', message: 'Selecciona un tipo de evento')]
    public $tipo;

    //De Componentes
    public $personal_convocado;
    public $requerimientos;
    public $ubicacion;
    public $fotos;

    #[On('TrabajadoresConvocados')] 
    public function getPersonalConvocado($array_trabajadores_seleccionados){
        //dd($array_trabajadores_seleccionados);
        $this->personal_convocado = $array_trabajadores_seleccionados;
    }

    #[On('RequerimientosSeleccionados')] 
    public function getRequerimientos($array_requerimientos_seleccionados){
        //dd($array_requerimientos_seleccionados);
        $this->requerimientos = $array_requerimientos_seleccionados;
    }

    #[On('UbicacionSeleccionada')] 
    public function getUbicacion($ubicacion_seleccionada){
        $this->ubicacion = $ubicacion_seleccionada;
        
    }

    #[On('FotosSeleccionadas')]
    public function getFotos($fotos_url){
        //dd($fotos_url);
        $this->fotos = $fotos_url;
    }

    public function save(){
        $validaciones = $this->validate();
        
        $transmision = new Transmision();

        //De formulario
        $transmision->fecha = $this->fecha;
        $transmision->hora_llegada = $this->hora_llegada;
        $transmision->hora_inicio = $this->hora_inicio;
        $transmision->nombre = $this->nombre;
        $transmision->descripcion = $this->descripcion;
        $transmision->tipo = $this->tipo;

        //De componentes
        if($this->personal_convocado != null){
            $transmision->personal_convocado = implode(',', $this->personal_convocado);
        }

        if($this->requerimientos != null){
           $transmision->requerimientos = implode(',', $this->requerimientos);
        }

        //dd($this->ubicacion);
        $transmision->ubicacion = $this->ubicacion;

        if($this->fotos != null){
            $transmision->fotografias = implode(',', $this->fotos);
        }

        $transmision->save();

        //enviar correo
        Mail::to('clara50_267@lavep.org')->send(new AvisoEventoCreado($transmision->toArray()));

        $this->dispatch('registradoCorrectamente');
    }

    #[On('creadoConfirmado')]
    public function redirectConfirmado(){
        $this->redirectRoute('transmisiones');
    }

    public function render()
    {
        return view('livewire.registrar-evento');
    }
}
