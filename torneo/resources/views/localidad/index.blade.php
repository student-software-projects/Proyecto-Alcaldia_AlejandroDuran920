@extends('layouts.admin.app')

@section('content')

    <div class="container">
        <div class="card-header mt-3">
            <a  href="{{route('localidad.create')}}" class="btn btn-info" Crear nueva empresa>crear nueva localidad</a>
        </div>
        <div class="card-body">
                <div class="row">
                    <div class="col-md-12 mx-auto">
                                <table class="table table-bordered table-striped bg-white border">
                                    <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Nombre Localidad</th>
                                        <th>Fecha de creacion</th>
                                        <th>fecha de actualizacion</th>
                                        <th>Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($localidades as $local)
                                        <tr>
                                            <td>{{ $local->id }}</td>
                                            <td>{{$local->localidad}}</td>
                                            <td>{{$local->created_at}}</td>
                                            <td>{{$local->updated_at}}</td>
                                            <td>

                                                <form action="{{route('localidad.destroy',$local->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{route('localidad.edit',$local->id)}}" class="btn  btn-warning">
                                                        <i class="fas fa-marker"></i>
                                                    </a>
                                                    <button type="submit"  class = 'btn btn-danger' >
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                    <a href="{{route('localidad.show',$local->id)}}" class ='btn btn-primary' >
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
        </div>
    </div>
@endsection
