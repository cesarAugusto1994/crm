<?php

namespace App\Models\Clientes;

use Illuminate\Database\Eloquent\Model;
use App\Models\Empresa;

class Departamentos extends Model
{
    protected $table = 'area';

    public function usuarios()
    {
        return $this->hasMany(User::class, 'area_id');
    }

    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'id_empresa');
    }
}
