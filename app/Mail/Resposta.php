<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Chamados\Logs;
use App\Models\Empresa;
use App\Models\Chamados;

class Resposta extends Mailable
{
    use Queueable, SerializesModels;

    private $logs;

    private $chamados;

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
    public function __construct(Logs $logs, Chamados $chamado, Empresa $empresa, $mensagem, $arquivo, $assunto, $modelo = 1)
    {
        $this->logs = $logs;
        $this->chamados = $chamado;
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
                      'chamado' => $this->chamados,
                      'mensagem' => $this->mensagem,
                      'modelo' => $this->modelo
                  ]);;

        if($this->arquivo) {
            $email->attach(storage_path('app/'.$this->arquivo));
        }

        return $email;

    }
}
