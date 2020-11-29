@extends('layouts.admin.app')

@section('content')
    <div class="row col-md-12">

        <div class="card-body">
            <a  href="{{route('jugador.create')}}" class="btn btn-info" >Crear nuevos Jugadores</a>
        </div>



        <div class="table-responsive">
            <table class="table table-bordered  table-striped bg-white table-sm mx-auto   text-center  mx-auto">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Numero de camisa</th>
                    <th>Apodo</th>
                    <th>Equipo</th>
                    <th>Fecha de creacion</th>
                    <th>Fecha de actualizacion</th>
                </tr>
                </thead>
                <tbody>
                @foreach($jugadores as $jugador)

                <tr>
                    <td>{{$jugador->nombres}}</td>
                    <td>{{$jugador->apellidos}}</td>
                    <td>{{$jugador->numero_camisa}}</td>
                    <td>{{$jugador->apodo}}</td>
                    <td>{{$jugador->equipo->nombre}}</td>
                    <td>{{$jugador->created_at}}</td>
                    <td>{{$jugador->updated_at}}</td>
                    <td>
                        <form action="{{route('jugador.destroy',$jugador->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('jugador.edit',$jugador->id)}}" class="btn  btn-warning">
                                <i class="fas fa-marker"></i>
                            </a>

                            <button type="submit"  class = 'btn btn-danger' >
                                <i class="far fa-trash-alt"></i>
                            </button>
                            <a href="{{route('jugador.show',$jugador->id)}}" class ='btn btn-primary' >
                                <i class="fas fa-search fa-sm"></i>
                            </a>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
