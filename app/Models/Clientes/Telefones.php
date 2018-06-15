<?php

namespace App\Models\Clientes;

use Illuminate\Database\Eloquent\Model;
use App\Models\Clientes\Telefones\Tipo;

class Telefones extends Model
{
    public function tipoTelefone()
    {
        return $this->belongsTo(Tipo::class, 'tipo');
    }
}
