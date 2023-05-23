<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    public function citas()
{
    return $this->hasMany('App\Models\Cita', 'id_médico');
}
}
