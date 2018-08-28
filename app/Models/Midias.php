<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Empresa;

class Midias extends Model
{
    protected $table = 'midias';

    protected $fillable = [
        'id', 'nome', 'empresa_id', 'ativo',
    ];

    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'empresa_id');
    }
}
