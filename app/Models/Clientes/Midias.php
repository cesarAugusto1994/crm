<?php

namespace App\Models\Clientes;

use Illuminate\Database\Eloquent\Model;

class Midias extends Model
{
    protected $table = 'cliente_midias';

    protected $fillable = ['id', 'midia_id', 'cliente_id', 'chamado_id', 'ativo'];

    public function midia()
    {
        return $this->belongsTo(\App\Models\Midias::class, 'midia_id');
    }
}
