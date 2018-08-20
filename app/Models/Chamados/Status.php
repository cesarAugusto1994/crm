<?php

namespace App\Models\Chamados;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status';

    protected $fillable = ['descricao', 'id_empresa'];
}
