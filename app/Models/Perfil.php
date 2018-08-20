<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $fillable = ['nome'];

    public function imoveis()
    {
        return $this->hasMany('App\Models\Perfil\Imoveis', 'perfil_id');
    }
}
