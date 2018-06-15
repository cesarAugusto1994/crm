<?php

namespace App\Models\Chamados;

use Illuminate\Database\Eloquent\Model;
use App\Models\Produtos;

class Empreendimentos extends Model
{
    protected $table = 'cliente_produtos';

    public function empreendimento()
    {
        return $this->belongsTo(Produtos::class, 'produto_id');
    }

}
