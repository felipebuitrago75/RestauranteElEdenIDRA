<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indicador extends Model
{
    //
    protected $table='indicador';

    protected $primaryKey='id_indicador';

    public $timestamps=false;

     protected $fillable = ['id_indicador','fecha', 'nombre','usuario_idUsuario','descripcion'];

	protected $guarded =[


	];
}
