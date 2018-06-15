<?php

namespace App\Models\Chamados;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Logs extends Model
{
    protected $table = 'chamado_descricao';

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
