<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructores extends Model
{
    //
    protected $table = 'instructor';
    public $timestamps = false;
    public $primaryKey = 'IdInstructor';
    protected $fillable = [
        'IdInstructor',
        'Nombre',
        'Apellido',
        'Documento',
        'Clave',
        'Estado'
    ];

    // public function seguimientos(){

    //     return $this->hasMany(Seguimientos::class);
    // }
}
