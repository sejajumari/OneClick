<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividades extends Model
{
    protected $table = 'actividad';
    public $timestamps = false;
    protected $primaryKey = 'IdActividad';
    protected $fillable = [
        'IdActividad',
        'Nombre'
    ];
}
