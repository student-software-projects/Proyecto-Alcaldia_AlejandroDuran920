@extends('layouts.admin.app')
@section('content')

    <h1>Hola desde la vista index| {{session('USER')->names}}</h1>
    <div class="col-lg-10">
        <div class="card mx-auto">
            <div class="card-body mx-auto" >

                <a class="btn btn-primary" href="{{route('localidad.index')}}">Localidades</a>
                <a class="btn btn-primary" href="{{route('jugador.index')}}">Jugadores</a>
                <a class="btn btn-primary" href="{{route('equipo.index')}}">Equipos</a>
            </div>
        </div>
    </div>
@endsection
