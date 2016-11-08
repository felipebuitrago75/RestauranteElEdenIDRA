@extends('layouts.app')
@section('contenido')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Indicador</div>
          <div class="panel-body">
          Listado de Tareas
          <p>
            
          </p>
          <p>hay {{$tareas->total()}} registros</p>
            <table class="table table-striped">
              <tr>
                <th>Id</th>
                <th>Descripcion</th>
                <th>Estado</th>
               
              </tr>

              @foreach ($tareas as $tarea)

              <tr>
                <td>{{$tarea->id_tarea}}</td>                 
                <td>{{$tarea->descripcion}}</td>  
                <td>{{$tarea->estado}}</td>  


              </tr>
              @endforeach
            </table>
          {!! $tareas->render() !!}
        </div>
        
      </div>
    </div>
  </div>
</div>



@endsection