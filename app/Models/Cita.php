<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    public function medico()
    {
        return $this->belongsTo('App\Models\Medico', 'id_médico');
    }
    
    public function paciente()
    {
        return $this->belongsTo('App\Models\Paciente', 'id_paciente');
    }
}
