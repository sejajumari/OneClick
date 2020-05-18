<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aprendices extends Model
{
    //
    protected $table = "usuario";
    protected $primaryKey = 'IdUsuario';
    public $timestamps = false;
    
    protected $fillable = [
        'Idusuario',
        'IdPrograma',
        'Nombre',
        'Apellido',
        'Telefono',
        'Documento',
        'Genero',
        'Correo'

    ];

    // public function seguimientos(){

    //     return $this->hasMany(Seguimientos::class);

    // }
}
