<?php

namespace App\Models\Chamados;

use Illuminate\Database\Eloquent\Model;

class Midias extends Model
{
    protected $table = 'cliente_midias';

    public function midia()
    {
        return $this->belongsTo(\App\Models\Midias::class, 'midia_id');
    }
}
