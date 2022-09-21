<?php
namespace App\Mail;

Use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
Use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Maible{
    use Queueable, SerializesModels;
    public $detalle;

    public function __construct($detalle)
    {
        $this->detalle=$detalle;
    }

    public function build(){
        return $this->subject('email enviado');
    }
}
?>