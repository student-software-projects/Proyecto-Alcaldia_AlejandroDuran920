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


                        <form action="{{route('equipo.update',$equipos->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <h1 class="text-center" >Editar Equipo</h1>

                            <div class="form-group">
                                <label for="nombre">Nombre Equipo</label>
                                <input name="nombre" class="form-control" type="text" value="{{$equipos->nombre}}">
                            </div>
                            <div class="form-group">
                                <label for="logo">logo</label>
                                <input name="logo" class="form-control" type="text" value="{{$equipos->logo}}">
                            </div>
                            <select name="localidad_id" id="localidad_id" class="form-control" required>
                                <option value="">Seleccionar...</option>
                                @foreach($localidades as $local)
                                    <option {{ $local->id==$equipos->localidad_id ? ' selected ' : ' ' }} value="{{ $local->id }}">{{ $local->localidad }}</option>
                                @endforeach
                            </select>
                            <hr>
                            <input class="btn btn-success" value="Actualizar equipo" type="submit">
                            <a href="{{route('equipo.index')}}" class="btn btn-success">Volver</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection
