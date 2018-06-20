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

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Logs $logs, Chamados $chamado, Empresa $empresa)
    {
        $this->logs = $logs;
        $this->chamados = $chamado;
        $this->empresa = $empresa;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->empresa->mail_username)
        ->subject('Novidades '. config('app.name'))
        ->markdown('mail.resposta')
        ->with([
                  'chamado' => $this->chamados,
              ]);;
    }
}
