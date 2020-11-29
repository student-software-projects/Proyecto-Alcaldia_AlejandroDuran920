@extends('layouts.admin.app')
@section('content')
<h1>{{session('USER')->names}}</h1>

<div class="container">
    <div class="row col-md-12">

        <div class="card-body ">

        </div>


        <div class="container">
            <div class="row">
                <div class="col-lg-4 mx-auto">
                    <div class="card card-body ">


                        <form action="" method="post">
                            @csrf
                            <h1 class="text-center" >Perfil</h1>

                            <div class="form-group">
                                <label for="names">Nombre</label>
                                <input value="{{$usuario->names}}" name="names" class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label for="lastnames">Apellidos </label>
                                <input value="{{$usuario->lastnames}}" name="lastnames" class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label for="email">Email </label>
                                <input value="{{$usuario->email}}" name="email" class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña </label>
                                <input name="password" class="form-control" type="text">
                            </div>
                            <hr>
                            <input class="btn btn-success" value="Guardar" type="submit">

                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

@endsection
