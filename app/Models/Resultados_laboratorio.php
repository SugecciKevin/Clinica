<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultados_laboratorio extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    public function paciente()
{
    return $this->belongsTo('App\Models\Paciente','id_paciente');
}

}
