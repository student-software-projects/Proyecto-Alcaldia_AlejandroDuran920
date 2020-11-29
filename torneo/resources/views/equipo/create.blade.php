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


                            <form action="{{route('equipo.store')}}" method="post">
                                @csrf
                                <h1 class="text-center" >Equipo</h1>

                                <div class="form-group">
                                    <label for="nombre">Nombre Equipo</label>
                                    <input name="nombre" class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <label for="logo">logo</label>
                                    <input name="logo" class="form-control" type="text">
                                </div>
                                <select name="localidad_id" id="localidad_id" class="form-control" required>
                                    <option value="">Seleccionar...</option>
                                    @foreach($localidades as $local)
                                        <option value="{{ $local->id }}">{{ $local->localidad }}</option>
                                    @endforeach
                                </select>
                                <hr>
                                <input class="btn btn-success" value="Guardar equipo" type="submit">

                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
