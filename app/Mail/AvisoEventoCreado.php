<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

use App\Models\Transmision;
use App\Models\Sitio;
use App\Models\User;
use App\Models\Requerimiento;

class AvisoEventoCreado extends Mailable
{
    use Queueable, SerializesModels;

    //public $evento_data;
    
    public $id_evento;
    public $transmision_data;
    public $personal_convocado=[];
    public $requerimientos=[];
    public $ubicacion;
    public $fotos=[];

    /**
     * Create a new message instance.
     */
    public function __construct($evento_data)
    {
        $this->id_evento = $evento_data['id'];

        //obtener el data de evento
        $this->transmision_data = Transmision::find($this->id_evento)->toArray();
        //dd($this->transmision_data->personal_convocado);

        //personal convocado
        if($this->transmision_data['personal_convocado'] != null){
            $personal_convocado_lenght = explode(',', $this->transmision_data['personal_convocado']);
            
            foreach($personal_convocado_lenght as $personal_id){
                $personal = User::find($personal_id);

                $this->personal_convocado[] =  array(['nombre' => $personal->name, 'photo' => $personal->profile_photo_url, 'area' => $personal->area]);
            }
        }

        //Requerimientos
        if($this->transmision_data['requerimientos'] != null){
            $requerimientos_lenght = explode(',', $this->transmision_data['requerimientos']);
            
            foreach($requerimientos_lenght as $requerimientos_id){
                $requerimiento = Requerimiento::find($requerimientos_id);

                $this->requerimientos[] =  array(['nombre' => $requerimiento->nombre, 'photo' => $requerimiento->imagen]);
            }
        }

        //Ubicacion
        if($this->transmision_data['ubicacion'] != null){
            $this->ubicacion = Sitio::find($this->transmision_data['ubicacion']);
        }

        //fotos
        $fotos_lenght = explode(',', $this->transmision_data['fotografias']);
        
        foreach($fotos_lenght as $foto){
            $this->fotos[] =  $foto;
            //dd($this->fotos);
        }
        
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Aviso Evento Creado',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.evento-creado',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
