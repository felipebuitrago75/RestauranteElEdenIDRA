@extends('layouts.app')
@section('contenido')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"> Creacion indicador</div>
					<div class="panel-body">



					<form action="{{ route('indicadores.store') }}" method="post">
					 <input type="hidden" name="_token" value="{{ csrf_token() }}">
					   <div class="form-group">
						   {!! Form::label('nombre','Nombre del indicador')!!}
						   {!! Form::text('nombre',null,['class'=> 'form-control'])!!}

						  </div>
						  <div class="form-group">
						   {!! Form::label('descripcion','Descripcion del indicador')!!}
						   {!! Form::textarea('descripcion',null,['class'=> 'form-control','style' => 'resize:none'])!!}

						  </div>
					
						 
						  <button type="submit" class="btn btn-default">Registrar</button>
					</form>




				
					
					
				</div>
				
			</div>
		</div>
	</div>
</div>



@endsection