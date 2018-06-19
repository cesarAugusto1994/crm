<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $table = 'agenda';

    protected $fillable = ['agd_data', 'agd_hora', 'agd_local', 'agd_func_area', 'agd_func_id', 'agd_nome', 'agd_lemb_data', 'agd_lemb_hora', 'agd_status'];

    protected $dates = ['agd_data', 'agd_lemb_data'];
}
