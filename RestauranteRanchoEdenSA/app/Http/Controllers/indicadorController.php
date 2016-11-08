<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Indicador;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\IndicadorFormRequest;
use DB ;

class indicadorController extends Controller
{
    //
    public function __construct(){
        return view("indicadores.almacen.index");
    }

    public function index(Request $request){
    	if ($request) {
    		$query=trim($request->get('searchText'));
    		$indicadores=DB::table('indicador')->where('nombre','LIKE','%'.$query'%')
    		->orderBy('id_indicador','desc')
    		->paginate(7);
    		return view('indicadores.almacen.index',["indicadores"=>$indicadores,"searchText"=>$query]);
    	}

    }
    public function create(){

    	return view("indicadores.create");
    	
    }
    public function store(IndicadorFormRequest $request){
    	$indicador=new Indicador;
    	$indicador->fecha=$request->get('fecha');
    	$indicador->nombre=$request->get('nombre');
    	$indicador->responsable=$request->get('responsable');
    	$indicador->save();
    	return Redirect::to('indicadores/almacen');

    	
    }
    public function show($id){
    	return view("indicadores.almacen.show",["indicador"=>Indicador::findOrFail($id)]);
    }
    public function edit($id){
    	return view("indicadores.almacen.edit",["indicador"=>Indicador::findOrFail($id)]);
    	
    }
    public function update(IndicadorFormRequest $request,$id){
    	$indicador =Indicador::findOrFail($id);
    	$indicador->fecha=$request->get('fecha');
    	$indicador->nombre=$request->get('nombre');
    	$indicador->responsable=$request->get('responsable');
    	$indicador->update();
    	return Redirect::to('indicadores/almacen');


    }
    public function destroy($id){
    	return Redirect::to('indicadores/almacen');
    }
}
