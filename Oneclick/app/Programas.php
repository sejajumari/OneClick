<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programas extends Model
{
    //
    protected $table = 'programa';

    protected $fillable = ['IdPrograma',
                            'Nombre',
                            'ModalidadPrograma'
                        ];
    protected $primaryKey = 'IdPrograma';
}
