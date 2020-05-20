@extends('layouts.app')
<style>

@font-face{
font-family:letra1;
src: url(../fuentes/letra1.ttf);
}

    html,body{


     background-image: url(/imagenes/auto.jpg);
     background-size: cover;
     background-position: center; }

     h1{
       font-family: letra1;
       color: white;
     }

     div .marca{

       font-family: letra1;
      position: absolute;
      color: white;
      bottom: -5px;
      left: 10px;
     }

  </style>


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">B I E N V E N I D O</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  <h1 align="center">  Ya estas logueado! </h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="marca">
  <h2>Cine En Casa</h2>
</div>
@endsection
