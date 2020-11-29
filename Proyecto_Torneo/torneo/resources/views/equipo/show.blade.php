@extends('layouts.admin.app')
@section('content')

    <container>
        <div class="my-4 card card-body text-center col-lg-3 mx-auto">
            <h3>Detalle</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="table-dark">
                                <tr>
                                    <th>NOMBRE</th>
                                    <th>LOGO</th>
                                    <th>LOCALIDAD</th>
                                    <th>FECHA DE REGISTRO</th>
                                </tr>
                                </thead>
                                <tbody class="table-light">

                                    <tr>
                                        <td>{{ $equipos->nombre }}</td>
                                        <td>{{ $equipos->logo }}</td>
                                        <td>{{ $equipos->localidad->localidad }}</td>
                                        <td>{{ $equipos->created_at }}</td>

                                    </tr>

                                </tbody>
                            </table>
                            <a class="btn btn-primary" href="{{route('equipo.index')}}">Volver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </container>
@endsection
