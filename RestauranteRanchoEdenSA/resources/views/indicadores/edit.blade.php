@extends('layouts.app')
@section('contenido')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"> Editar indicador {{$indicador->nombre}}</div>
					<div class="panel-body">



				{!!Form::model($indicador,['method'=> 'PATCH' , 'route'=>['update',$indicador->id_indicador]]!!}
					{{Form::token()}}
					 <input type="hidden" name="_token" value="{{ csrf_token() }}">
					   <div class="form-group">
						   {!! Form::label('nombre','Nombre del indicador')!!}
						
						   <input type="text" name="nombre" class="form-control" value="{{$indicador->nombre}}">

						  </div>
						  <div class="form-group">
						   {!! Form::label('descripcion','Descripcion del indicador')!!}
						 
						    <input type="text" name="descripcion" class="form-control" value="{{$indicador->descripcion}}">

						  </div>
					
						 
						  <button type="submit" class="btn btn-default">Guardar</button>
					{!!Form::close()!!}




				
					
					
				</div>
				
			</div>
		</div>
	</div>
</div>



@endsection