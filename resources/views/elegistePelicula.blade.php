
@extends("plantilla")

 @section('css')
  <style>



     p{

       text-shadow: 3px 3px 3px gold;
       font-size: 2.5vw;
       color:yellow;
       }


     h1{
        position: relative;
        top: 20px;
        font-family: letra1;
        text-align: center;
        color: gold;
        text-shadow: 3px 3px 3px black;
       }

       .container{
         display: flex;
         justify-content: center;
         height: 60%;
         padding-top: 10%;

       }

  </style>
 @endsection

@section("principal")

  <h1>Elegiste la pelicula {{$pelicula->title}} ,esperamos que la disfrutes,no te olvides de puntuarla,gracias</h1>

<div class="container">
  <ul>

        <p> Pelicula: {{$pelicula->title}} </p>
        <p> Premios: {{$pelicula->awards}} </p>
        <p> Duración: {{$pelicula->length}} minutos </p>
        @if($pelicula->genero)
          <p>genero: {{$pelicula->genero->name}}</p>
        @endif





            <p>Actores: </p>

                  @foreach ($pelicula->actores as $actor)

                  {{$actor->getNombreCompleto()}},

         @endforeach


  </ul>
</div>





  @endsection
