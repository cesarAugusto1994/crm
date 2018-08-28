<?php

namespace App\Models\Manifestacao;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $table = 'grupo_manifestacao';

    protected $fillable = ['id', 'descricao', 'id_manifestacao'];
}
