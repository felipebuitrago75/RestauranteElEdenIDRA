@extends('layouts.app')
@section('contenido')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading"> Indicadores</div>
          <div class="panel-body">
          Listado de indicadores
          <p>
            <a class="btn btn-info" href="{{route('indicadores.create')}}" role="button">Crear indicador</a>
          </p>

          <p>hay {{$indicadores->total()}} registros</p>
            <table class="table table-striped">
              <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Fecha</th>
                <th>Tareas</th>
                <th>Acciones</th>
              </tr>

              @foreach ($indicadores as $indicador)

              <tr>
                <td>{{($indicador->id_indicador)}}</td> 
                <td>{{$indicador->nombre}}</td> 
                <td>{{$indicador->descripcion}}</td>  
                <td>{{$indicador->fecha}}</td> 
                <td>
                <div class="btn-group">
                  <button class="btn btn-default btn-sm dropdown-toggle"
                          type="button" data-toggle="dropdown">
                    Tareas <span class="caret"></span>
                  </button>
                 
                  <ul class="dropdown-menu">
                     @foreach($tareas as $tarea)
                      @if(($indicador->id_indicador)=== $tarea->indicador_id_indicador)

                    <a href="">{{$tarea->descripcion}}<br></a>
                    @endif  
                    @endforeach
                  </ul>
                </div>
                   

                </td>



                <td>
                  <a href="{{route('tareas.create')}}">Agregar</a>
                  <a href="{{URL::action('IndicadorControlador@edit',$indicador->id_indicador)}}">Editar</a>
                  <a href="#">Eliminar</a>
                </td>




              </tr>
              @endforeach
            </table>
          {!! $indicadores->render() !!}
        </div>
        
      </div>
    </div>
  </div>
</div>



@endsection