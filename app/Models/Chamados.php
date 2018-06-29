<?php

namespace App\Models;

use App\Models\Chamados\Logs;
use Illuminate\Database\Eloquent\Model;
use App\Models\Chamados\Empreendimentos;
use App\Models\Chamados\Midias;
use App\Models\Chamados\Status;
use App\Models\Chamados\Classificacao;
use App\User;

class Chamados extends Model
{
    protected $table = 'chamado';

    protected $dates = ['abertura_chamado', 'previsao_conclusao', 'conclusao_chamado', 'atendimento_chamado'];

    public function cliente()
    {
        return $this->belongsTo(Clientes::class, 'id_cliente');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'situacao');
    }

    public function logs()
    {
        return $this->hasMany(Logs::class, 'chamado_id');
    }

    public function empreendimentos()
    {
        return $this->hasMany(Empreendimentos::class, 'chamado_id');
    }

    public function midias()
    {
        return $this->hasMany(Midias::class, 'chamado_id');
    }

    public function responsavel()
    {
        return $this->belongsTo(User::class, 'pessoa_responsavel');
    }

    public function categoria()
    {
        return $this->belongsTo(Classificacao::class, 'classificacao');
    }
}
