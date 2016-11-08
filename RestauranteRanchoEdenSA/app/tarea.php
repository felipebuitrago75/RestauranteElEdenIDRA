<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tarea extends Model
{
    //


    protected $table= 'tarea';
    protected $primaryKey='id_tarea';

    public $timestamps = false;
    protected $fillable = ['id_tarea','descripcion', 'estado', 'indicador_id_indicador'];


}