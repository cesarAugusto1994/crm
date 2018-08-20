<?php

namespace App\Models\Chamados;

use Illuminate\Database\Eloquent\Model;

class Fase extends Model
{
    protected $table = 'chamado_fases';

    protected $fillable = ['nome', 'empresa_id', 'fechar_chamado'];
}
