<?php

namespace App\Models\Clientes;

use Illuminate\Database\Eloquent\Model;

class Emails extends Model
{
    protected $fillable = ['cliente_id', 'email', 'principal'];
}
