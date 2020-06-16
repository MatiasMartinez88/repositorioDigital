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

  <h1>Elegiste a {{$actor->first_name}} ,estas son las pelicula en las que participa</h1>

<div class="container">
  <ul>

        <p> Primer nombre: {{$actor->first_name}} </p>
        <p> Apellido: {{$actor->last_name}} </p>
        <p> Puntuación: {{$actor->rating}}</p>


        <p>peliculas : </p>
            <ul>


              @foreach ($actor->peliculas as $pelicula)
             <li>
  {{$actor->pelicula->actor_id->movie_id}}

              </li>


      @endforeach
  </ul>








  </ul>
</div>





  @endsection
