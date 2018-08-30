<?php

namespace App\Models\Clientes;

use Illuminate\Database\Eloquent\Model;
use App\Models\Clientes\Telefones\Tipo;

class Telefones extends Model
{
    protected $fillable = ['cliente_id', 'telefone', 'tipo', 'ddi', 'ddd', 'telefone', 'ramal', 'principal'];

    public function tipoTelefone()
    {
        return $this->belongsTo(Tipo::class, 'tipo');
    }
}
