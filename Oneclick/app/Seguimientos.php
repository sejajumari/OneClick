<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seguimientos extends Model
{
    //
    public $timestamps = false;
    protected $table = 'seguimiento';
    protected $primaryKey = 'IdSeguimiento';
    protected $fillable = [
        'IdSeguimiento',
        'IdUsuario',
        'IdInstructor',
        'Fecha',
        'Peso',
        'Talla'
    ];

    // public function aprendices(){

    //     return $this->belongsTo(Aprendices::class);
    // }
    // public function instructores(){

    //     return $this->belongsTo(Instructores::class);
    // }
}
