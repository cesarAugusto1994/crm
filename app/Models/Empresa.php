<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Clientes\Midias;

class Empresa extends Model
{
    protected $table = 'empresas';

    public function midias()
    {
        return $this->hasMany(Midias::class, 'empresa_id');
    }
}
