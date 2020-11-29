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


                        <form action="{{route('localidad.store')}}" method="post">
                            @csrf
                            <h1 class="text-center" >Localidad</h1>

                            <div class="form-group">
                                <label for="">Nombre Localidad</label>
                                <input name="localidad" class="form-control" type="text">
                            </div>
                            <input class="btn btn-success" value="Guardar localidad" type="submit">

                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection
