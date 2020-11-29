@extends('layouts.admin.app')

@section('content')
    <div class="row col-md-12">

        <div class="card-body">
            <a  href="{{route('equipo.create')}}" class="btn btn-info">Crear nuevo equipo</a>
        </div>



        <div class="table-responsive">
            <table class="table table-bordered  table-striped bg-white table-sm mx-auto   text-center  mx-auto">
                <thead class="table-dark">
                <tr>
                    <th>NOMBRE</th>
                    <th>LOGO</th>
                    <th>LOCALIDAD</th>
                    <th>FECHA DE REGISTRO</th>
                    <th>OPCIONES</th>
                </tr>
                </thead>
                <tbody>
                @foreach($equipos as $equip)

                    <tr>
                        <td>{{ $equip->nombre }}</td>
                        <td>{{ $equip->logo }}</td>
                        <td>{{ $equip->localidad->localidad }}</td>
                        <td>{{ $equip->created_at }}</td>

                    <td>
                        <form action="{{route('equipo.destroy',$equip->id)}}" method="post">
                            @csrf
                            @method('DELETE')

                            <button type="submit"  class ='btn btn-danger' >
                                <i class="far fa-trash-alt"></i>
                            </button>
                            <a href="{{route('equipo.show',$equip->id)}}" class ='btn btn-primary' >
                                <i class="fas fa-search fa-sm"></i>
                            </a>
                            <a href="{{ route('equipo.edit',$equip->id) }}" class="btn btn-warning">
                                <i class="fas fa-marker fa"></i>
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
