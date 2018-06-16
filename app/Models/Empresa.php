<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Clientes\Midias;

class Empresa extends Model
{
    protected $table = 'empresas';

    protected $fillable = ['nome', 'num_usuarios', 'status', 'mail_driver', 'mail_host', 'mail_port', 'mail_username', 'mail_password', 'mail_encription'];

    public function midias()
    {
        return $this->hasMany(Midias::class, 'empresa_id');
    }
}
