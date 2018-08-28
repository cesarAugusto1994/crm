<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $table = 'agenda';

    protected $fillable = ['data_hora', 'local', 'area_id', 'user_id', 'descricao', 'status', 'ativo'];

    protected $dates = ['data_hora'];
}
