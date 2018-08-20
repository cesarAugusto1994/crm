<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Previsao extends Model
{
    protected $table = 'previsao';

    protected $fillable = ['descricao', 'id_classificacao'];
}
