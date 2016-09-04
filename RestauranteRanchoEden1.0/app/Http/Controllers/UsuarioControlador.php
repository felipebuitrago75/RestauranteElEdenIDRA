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

    	$user->nombre= $_POST['nombre'];
    	$user->apellido= $_POST['apellido'];
    	$user->telefono=$_POST['telefono'];
    	$user->direcion=$_POST['direccion'];
    	Flash::success("Se ha registrado de forma exitosa!");
    	$user->save();
    	$user = Usuario::orderBy('id_usuario','DESC')->paginate(20);
    	Flash::success("Se ha registrado de forma exitosa!");
    	return view('welcome');

    	
    }

}
