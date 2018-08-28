<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manifestacao extends Model
{
    protected $table = 'manifestacao';

    protected $fillable = ['id', 'descricao', 'id_prod_serv'];
}
