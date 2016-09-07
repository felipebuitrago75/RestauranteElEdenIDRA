<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Usuario;
use Laracasts\Flash\Flash;

class UsuarioControlador extends Controller
{
    public function store(Request $request){


    	$user = new Usuario($request->all());
        $user ->id= $_POST['id_usuario']:
        $user->nombre= $_POST['nombre'];
    	$user->apellido= $_POST['apellido'];
    	$user->telefono=$_POST['telefono'];
    	$user->direcion=$_POST['direcion'];
    	$user->save();
    	
    }

}