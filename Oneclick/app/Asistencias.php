<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistencias extends Model
{
    protected $table = 'asistencia';
    public $timestamps = false;
    protected $primaryKey = 'IdAsistencia';
    protected $fillable = [
        'IdAsistencia',
        'IdUsuario',
        'IdActividad',
        'IdInstructor',
        'ComponenteEstrategico',
        'Fecha',
        'Hora'

    ];



}
