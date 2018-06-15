<?php

namespace App\Models\Clientes;

use Illuminate\Database\Eloquent\Model;
use App\Models\Clientes\Enderecos\Tipo;

class Enderecos extends Model
{
    protected $table = 'enderecos';

    public function tipoEndereco()
    {
        return $this->belongsTo(Tipo::class, 'tipo');
    }
}
