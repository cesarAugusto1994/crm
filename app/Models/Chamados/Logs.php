<?php

namespace App\Models\Chamados;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\LogEmail;

class Logs extends Model
{
    protected $table = 'chamado_descricao';

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function logEmail()
    {
        return $this->belongsTo(LogEmail::class, 'email_log_id');
    }
}
