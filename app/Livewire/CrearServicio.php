<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Servicio;



class CrearServicio extends Component
{
    //modales
    public $showModal=false;
    public $showModalEliminar=false;

    //info de servicios
    public $nombre;
    public $aplicacion;
    public $stream_key;
    public $descripcion;
    
    //seleccionado a eliminar
    public $id_servicio;

    protected $rules = [
        'nombre' => 'required|unique:servicios|min:3',
        'stream_key' => 'required|unique:servicios|min:3|alpha_num',
    ];
        
    public function crearServicio(){
        //Validar campos
        $this->validate();

        $servicio = new Servicio;

        $servicio->nombre = $this->nombre;
        $servicio->aplicacion = $this->aplicacion;
        $servicio->stream_key = $this->stream_key;
        $servicio->descripcion = $this->descripcion;

        //Crear servicio_key 
        $servicio->servicio_key = substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(15 / strlen($x)))), 1, 15);
        $servicio->estado = '0';

        $servicio->save();
        $this->showModal=false;
    }

    public function eliminarServicio($id_servicio){
        $this->id_servicio = $id_servicio;
        $this->dispatch('confirmDelete', id_servicio_a_eliminar: $this->id_servicio);
    }

    #[On('eliminarConfirmado')]
    public function eliminar($id_servicio_a_eliminar){
        $this->servicio_a_eliminar = Servicio::find($id_servicio_a_eliminar);

        if($this->servicio_a_eliminar->estado != '1'){
            $this->servicio_a_eliminar->delete();
        }else{
            $this->dispatch('errorDelete');
        }
    }

    public function render()
    {   
        $servicios_activos = Servicio::all();
        return view('livewire.crear-servicio', ['servicios_activos' => $servicios_activos]);
    }
}
