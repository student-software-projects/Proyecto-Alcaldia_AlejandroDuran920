@extends('layouts.admin.app')
@section('content')

<container>
    <div class="my-4 card card-body text-center col-lg-3 mx-auto">
        <h3>Detalle</h3>
    </div>
    <div class="row my-4">
        <div class="col-md-4 mx-auto">
            <div class="table-responsive ">
                <table class="table table-bordered  table-striped bg-white table-sm mx-auto   text-center  mx-auto">
                    <tr>
                        <th class="bg-primary text-white" >Nombre</th>
                        <td>{{  $localidades->localidad  }}</td>
                    </tr>
                    <
                        <th class="bg-primary text-white">Creaccion</th>
                        <td>{{ $localidades->created_at }}</td>
                    </tr>
                    <tr>
                        <th class="bg-primary text-white">Actualizacion</th>
                        <td>{{ $localidades->updated_at }}</td>
                    </tr>
                </table>
                <a class="btn btn-primary" href="{{route('localidad.index')}}">Volver</a>
                <a href="{{ route('localidad.edit',$localidades->id) }}" class="btn  btn-success" >Editar  </a>
            </div>
        </div>
    </div>
</container>
@endsection
