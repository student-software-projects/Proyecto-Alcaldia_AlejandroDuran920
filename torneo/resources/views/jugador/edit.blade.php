@extends('layouts.admin.app')
@section('content')
    <div class="container">
        <div class="row col-md-12">

            <div class="card-body ">

            </div>


            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mx-auto">
                        <div class="card card-body ">


                            <form action="{{route('jugador.update',$jugadores->id)}}" method="post">
                                @csrf
                                @method('PUT')
                                <h1 class="text-center" >Editar Jugador</h1>

                                <div class="form-group">
                                    <label for="nombres">Nombre Jugador</label>
                                    <input name="nombres" class="form-control" type="text" value="{{$jugadores->nombres}}">
                                </div>
                                <div class="form-group">
                                    <label for="apellidos">Apellidos</label>
                                    <input name="apellidos" class="form-control" type="text" value="{{$jugadores->apellidos}}">
                                </div>
                                <div class="form-group">
                                    <label for="numero_camisa">Apellidos</label>
                                    <input name="numero_camisa" class="form-control" type="text" value="{{$jugadores->numero_camisa}}">
                                </div>
                                <div class="form-group">
                                    <label for="apodo">Apellidos</label>
                                    <input name="apodo" class="form-control" type="text" value="{{$jugadores->apodo}}">
                                </div>
                                <select name="equipo_id" id="equipo_id" class="form-control" required>
                                    <option value="">Seleccionar...</option>
                                    @foreach($equipos as $equip)
                                        <option  {{ $equip->id==$jugadores->equipo_id ? ' selected ' : ' '}} value="{{ $equip->id }}">{{ $equip->nombre }}</option>
                                    @endforeach
                                </select>
                                <hr>
                                <input class="btn btn-success" value="Actualizar jugador" type="submit">
                                <a href="{{route('jugador.index')}}" class="btn btn-success">Volver</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
