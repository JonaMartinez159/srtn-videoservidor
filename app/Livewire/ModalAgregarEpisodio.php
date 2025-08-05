<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Grabacion;

class ModalAgregarEpisodio extends Component
{
    public $showModal=false;
    public $id_programa;

    public $path;
    public $streamkey;
    public $nombre;
    public $descripcion;

    public function agregarEpisodio(){
        $nuevo_episodio = new Grabacion();

        $nuevo_episodio->path = $this->path;
        $nuevo_episodio->streamkey = $this->streamkey;
        $nuevo_episodio->programa = $this->id_programa;
        $nuevo_episodio->nombre = $this->nombre;
        $nuevo_episodio->descripcion = $this->descripcion;

        $nuevo_episodio->save();

        $this->dispatch('refresh-the-component'); 
        $this->showModal=false;
    }

    public function render()
    {
        return view('livewire.modal-agregar-episodio');
    }
}
