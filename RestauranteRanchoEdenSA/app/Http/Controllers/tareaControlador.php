<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tarea;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Indicador;
use DB;
use Carbon\Carbon;
use Auth;
class tareaControlador extends Controller
{
    public function __construct(){
       
    }

    public function index(Request $request){
        
        $indicadores =Indicador::paginate(5);
        $tareas=tarea::paginate();

        return view('tareas.index',compact('indicadores','tareas'));
    }

 
    public function create(){

        return view("tareas.create");
        
    }
    public function store(Request $request){

        $tareas = new tarea($request->all());
        $tareas->descripcion=$request->get('descripcion');
        $tareas->estado=$request->get('estado');
        $tareas->indicador_id_indicador=18;
        $tareas->save();
        
        $indicadores =Indicador::paginate();
        $tareas=tarea::paginate();

        return view('indicadores.index',compact('indicadores','tareas'));

        
    }
    public function show($id){
        return view("tareas.show",["tarea"=>tarea::findOrFail($id)]);
    }
    public function edit($id){
        return view("tareas.edit",["tarea"=>tarea::findOrFail($id)]);
        
    }
    public function update(IndicadorFormRequest $request,$id){
        $tarea =Indicador::findOrFail($id_tarea);
        $tarea->descripcion=$request->get('descripcion');
        $tarea->estado=$request->get('estado');
        $tarea->update();
        return Redirect::to('tareas');


    }
    public function destroy($id){
        return Redirect::to('tareas');
    }


}
