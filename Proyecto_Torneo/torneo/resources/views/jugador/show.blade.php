@extends('layouts.admin.app')
@section('content')

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
            @foreach($equipos as $jugador)

                <tr>
                    <td>{{$jugador->nombres}}</td>
                    <td>{{$jugador->apellidos}}</td>
                    <td>{{$jugador->numero_camisa}}</td>
                    <td>{{$jugador->apodo}}</td>
                    <td>{{$jugador->equipo->nombre}}</td>
                    <td>{{$jugador->created_at}}</td>
                    <td>{{$jugador->updated_at}}</td>

                </tr>
            @endforeach
            </tbody>
        </table>
        <a class="btn btn-primary" href="{{route('jugador.index')}}">Volver</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </container>
@endsection
