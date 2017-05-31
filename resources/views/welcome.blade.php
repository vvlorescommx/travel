@extends('layouts.cabecera')

@section('content')
<!--Esta debe ser la página inicial antes de iniciar sesión-->
<div class="container">

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <div class="panel-heading">Bienvenido {{ @Auth::user()->name }}</div>

                <div class="panel-body">
                   <img src="images/menu/circulo.png">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.pie')
