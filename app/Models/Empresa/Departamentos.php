<?php

namespace App\Models\Empresa;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Departamentos extends Model
{
    protected $table = 'area';

    public function usuarios()
    {
        return $this->hasMany(User::class, 'area_id');
    }
}
