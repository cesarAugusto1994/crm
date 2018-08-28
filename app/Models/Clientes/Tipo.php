<?php

namespace App\Models\Clientes;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $table = 'tipo_cliente';

    protected $fillable = ['id', 'nome', 'exibir'];
}
