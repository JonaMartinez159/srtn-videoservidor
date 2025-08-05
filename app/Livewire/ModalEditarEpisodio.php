<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Grabacion;
use Livewire\WithFileUploads;
use Livewire\Attributes\On;

class ModalEditarEpisodio extends Component
{
    use WithFileUploads;

    public $showModal=false;
    public $nombre;
    public $descripcion;
    public $id_episodio;

    public $en_demanda;

    public $foto;

    public function actualizarGrabacion()
    {
        $grabacion = Grabacion::find($this->id_episodio);

        $grabacion->nombre = $this->nombre;
        $grabacion->descripcion = $this->descripcion;
        //dd($this->foto);


        // Validamos y procesamos la imagen solo si fue seleccionada
        if ($this->foto) {
            $this->validate([
                'foto' => 'image|max:2048', // solo se valida si hay archivo
            ]);

            $path = $this->foto->store('fotos', 'public');
            $url = asset('storage/' . $path);
            $grabacion->miniatura = $url;
        }

        $grabacion->save();

        $this->showModal = false;
        $this->dispatch('refresh-the-component');   
    }

    public function ponerEnDemanda(){
        $episodio_en_demanda = Grabacion::find($this->id_episodio);

        if($episodio_en_demanda->en_demanda == "1"){
            $episodio_en_demanda->en_demanda = "0";
        }else{
            $episodio_en_demanda->en_demanda = "1";
        }

        $episodio_en_demanda->save();
    }

    #[On('refresh-the-component')]
    public function render()
    {
        $this->en_demanda = Grabacion::find($this->id_episodio);

        return view('livewire.modal-editar-episodio');
    }
}
