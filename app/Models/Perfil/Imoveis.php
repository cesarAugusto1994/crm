<?php

namespace App\Models\Perfil;

use Illuminate\Database\Eloquent\Model;

class Imoveis extends Model
{
    protected $table = 'perfil_imoveis';

    protected $fillable = ['perfil_id', 'imovel_id'];

    public function imovel()
    {
        return $this->belongsTo('App\Models\Imovel', 'imovel_id');
    }
}
