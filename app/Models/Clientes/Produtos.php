<?php

namespace App\Models\Clientes;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $table = 'cliente_produtos';

    public function empreendimento()
    {
        return $this->belongsTo(\App\Models\Produtos::class, 'produto_id');
    }
}
