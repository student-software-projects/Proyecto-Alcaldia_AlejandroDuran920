@extends('layouts.auth.app')
@section('content')
    <div class="container">
        <div class="row col-md-12">

            <div class="card-body ">

            </div>


            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mx-auto">
                        <div class="card card-body ">


                            <form action="{{route('user.store')}}" method="post">
                                @csrf
                                <h1 class="text-center" >Registro</h1>

                                <div class="form-group">
                                    <label for="names">Nombre</label>
                                    <input  name="names" class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <label for="lastnames">Apellidos </label>
                                    <input  name="lastnames" class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email </label>
                                    <input name="email" class="form-control" type="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Contraseña </label>
                                    <input name="password" class="form-control" type="password">
                                </div>
                                <hr>
                                <input class="btn btn-success" value="Guardar" type="submit">
                                <a href="/" class="btn btn-primary">Volver</a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
