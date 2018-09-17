<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Empresa;

class Area extends Model
{
    protected $table = 'area';

    protected $fillable = ['id', 'descricao', 'id_empresa'];

    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'id_empresa');
    }
}
