@extends('layouts.app')
@section('contenido')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"> Editar indicador: <br>  {{$indicador-> nombre}}</div>
					<div class="panel-body">



						{!! csrf_field() !!}
					{!! Form::model($indicador,['route' => ['indicadores.update',$indicador ],'method' =>'PUT']) !!}
					
					   <div class="form-group">
						   {!! Form::label('nombre','Nombre del indicador')!!}
						   {!! Form::text('nombre',null,['class'=> 'form-control'])!!}

						  </div>
						  <div class="form-group">
						   {!! Form::label('descripcion','Descripcion del indicador')!!}
						   {!! Form::textarea('descripcion',null,['class'=> 'form-control','style' => 'resize:none'])!!}

						  </div>
					
						 
						  <button type="submit" class="btn btn-default">Actualizar</button>
					{!! Form::close() !!}




				
					
					
				</div>
				
			</div>
		</div>
	</div>
</div>



@endsection