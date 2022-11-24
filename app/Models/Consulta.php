<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;

    protected $table        = 'consultas';
    protected $fillable     = [
        'paciente_id', 'medico_id',
        'data_agendamento', 'hora_agendamento'
    ];

    public function medicos()
    {
        return $this->belongsTo(Medico::class, 'medico_id', 'id');
    }

    public function pacientes()
    {
        return $this->belongsTo(Paciente::class, 'paciente_id', 'id');
    }
}
