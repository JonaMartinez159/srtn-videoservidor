<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class SubirFotosDeUbicacion extends Component
{
    use WithFileUploads;

    public $foto=null;
    public $fotos_url=[];
    public $uploading=true;

    public function updatedFoto(){
        $this->validate([
            'foto' => 'required|file', // Example validation rules
        ]);

        $path = $this->foto->store('uploads');

        $this->fotos_url[] = $path;

        session()->flash('message', 'File uploaded successfully!');
    }

    public function render()
    {
        return view('livewire.subir-fotos-de-ubicacion');
    }
}
