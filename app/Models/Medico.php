<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Especialidade;


class Medico extends Model
{
    use HasFactory;

    protected $table        = 'medicos';
    protected $fillable     = ['nome', 'crm', 'especialidade_id'];

    public function especialidade()
    {
        return $this->belongsTo(Especialidade::class, 'especialidade_id', 'id');
    }
}
