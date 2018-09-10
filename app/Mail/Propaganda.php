<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Propaganda as PropagandaModel;

class Propaganda extends Mailable
{
    use Queueable, SerializesModels;

    private $mensagem;

    private $propaganda;

    private $assunto;

    private $arquivo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(PropagandaModel $propaganda, $mensagem, $assunto, $arquivo)
    {
        $this->propaganda = $propaganda;
        $this->mensagem = $mensagem;
        $this->assunto = $assunto;
        $this->arquivo = $arquivo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->markdown('mail.resposta')
           ->subject($this->assunto)
           ->with([
                     'mensagem' => $this->mensagem,
                 ]);;

       if($this->arquivo) {
           $email->attach(storage_path('app/'.$this->arquivo));
       }

       return $email;
    }
}
