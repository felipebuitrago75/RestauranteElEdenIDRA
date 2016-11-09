<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Indicador;
use App\tarea;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\IndicadorFormRequest;
use DB ;
use Carbon\Carbon;


class IndicadorControlador extends Controller
{
    //
    public function __construct(){
       
    }

    public function index(Request $request){
    	
    	$indicadores =Indicador::paginate(5);
        $tareas=tarea::paginate();

    	return view('indicadores.index',compact('indicadores','tareas'));
    	
    }

 
    public function create(){

    	return view("indicadores.create");
    	
    }
    public function store(Request $request){

    	$indicador = new Indicador($request->all());
    	$indicador->fecha=Carbon::now();
    	$indicador->nombre=$request->get('nombre');
    	$indicador->descripcion=$request->get('descripcion');
        $indicador->usuario_idUsuario=1;
    	$indicador->save();
        
        $indicadores =Indicador::paginate();
    	return view('indicadores.index',compact('indicadores'));

    	
    }
    public function show($id){
    	return view("indicadores.show",["indicador"=>Indicador::findOrFail($id)]);
    }
    public function edit($id){
        $indicador =Indicador::findOrFail($id);

    	return view("indicadores.edit",compact('indicador'));
    	
    }
    public function update(Request $request){
       $indicador = new Indicador($request->all());
        $indicador->fecha=Carbon::now();
        $indicador->nombre=$request->get('nombre');
        $indicador->descripcion=$request->get('descripcion');
        $indicador->usuario_idUsuario=1;
        $indicador->update();
        
        $indicadores =Indicador::paginate();
        $tareas = Tarea::paginate(); 
        return view('indicadores.index',compact('indicadores','tareas'));
   


    }
    public function destroy($id){
    	return Redirect::to('indicadores');
    }
}