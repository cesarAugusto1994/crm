<?php

namespace App\Models\Manifestacao\Grupo;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $table = 'tipo_manifestacao';

    protected $fillable = ['id', 'descricao', 'id_grupo'];
}
