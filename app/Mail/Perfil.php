<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Empresa;
use App\Models\Perfil as PerfilModel;

class Perfil extends Mailable
{
    use Queueable, SerializesModels;

    private $perfil;

    private $empresa;

    private $mensagem;

    private $arquivo;

    private $assunto = "SEABRA – INFORMAÇÕES";

    private $modelo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(PerfilModel $perfil, Empresa $empresa, $mensagem, $arquivo, $assunto, $modelo = 1)
    {
        $this->perfil = $perfil;
        $this->empresa = $empresa;
        $this->mensagem = $mensagem;
        $this->arquivo = $arquivo;
        $this->assunto = $assunto;
        $this->modelo = $modelo;
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
                      'chamado' => $this->perfil,
                      'mensagem' => $this->mensagem,
                      'modelo' => $this->modelo
                  ]);;

        if($this->arquivo) {
            $email->attach(storage_path('app/'.$this->arquivo));
        }

        return $email;

    }
}
