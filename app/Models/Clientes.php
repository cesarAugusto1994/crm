<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Clientes\{Produtos, Midias, Emails, Telefones};

class Clientes extends Model
{
    protected $table = 'clientes';

    public function empreendimentos()
    {
        return $this->hasMany(Produtos::class, 'cliente_id');
    }

    public function midias()
    {
        return $this->hasMany(Midias::class, 'cliente_id');
    }

    public function emails()
    {
        return $this->hasMany(Emails::class, 'cliente_id');
    }

    public function email()
    {
        return $this->hasOne(Emails::class, 'cliente_id');
    }

    public function telefones()
    {
        return $this->hasMany(Telefones::class, 'cliente_id');
    }
}
