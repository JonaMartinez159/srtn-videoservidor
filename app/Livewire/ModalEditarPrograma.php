<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Programa;

class ModalEditarPrograma extends Component
{
    use WithFileUploads;

    public $showModalEditar=false;

    public $nombre;
    public $descripcion;
    public $id_programa;

    public $foto;

    public function actualizarPrograma()
    {
        $programa = Programa::find($this->id_programa);

        $programa->nombre = $this->nombre;
        $programa->descripcion = $this->descripcion;

        // Validamos y procesamos la imagen solo si fue seleccionada
        if ($this->foto) {
            $this->validate([
                'foto' => 'image|max:2048', // solo se valida si hay archivo
            ]);

            $path = $this->foto->store('banners', 'public');
            $url = asset('storage/' . $path);
            $programa->banner = $url;
        }

        $programa->save();

        $this->showModalEditar = false;
        $this->dispatch('refresh-the-component');   
    }

    public function render()
    {
        return view('livewire.modal-editar-programa');
    }
}
