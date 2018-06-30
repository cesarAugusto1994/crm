<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Chamados\Logs;

class LogEmail extends Model
{
    public function log()
    {
        return $this->belongsTo(Logs::class, 'email_log_id');
    }
}
