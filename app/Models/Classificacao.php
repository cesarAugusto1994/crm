<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classificacao extends Model
{
    protected $table = 'classificacao';

    protected $fillable = ['descricao', 'empresa_id'];
}
