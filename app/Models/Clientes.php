<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Clientes\{Produtos, Midias, Emails, Telefones, Tipo, Tratamento, Enderecos, Departamentos};

class Clientes extends Model
{
    protected $table = 'clientes';

    public function chamados()
    {
        return $this->hasMany(Chamados::class, 'id_cliente');
    }

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

    public function enderecos()
    {
        return $this->hasMany(Enderecos::class, 'cliente_id');
    }

    public function email()
    {
        return $this->hasOne(Emails::class, 'cliente_id');
    }

    public function telefones()
    {
        return $this->hasMany(Telefones::class, 'cliente_id');
    }

    public function tipoCadastro()
    {
        return $this->belongsTo(Tipo::class, 'tipo');
    }

    public function tratamento()
    {
        return $this->belongsTo(Tratamento::class, 'forma_tratamento');
    }

    public function departamento()
    {
        return $this->belongsTo(Departamentos::class, 'area_id');
    }
}
