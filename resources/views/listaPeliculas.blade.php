@extends("plantilla")

 @section('css')
  <style>

    .fluor{
    position: absolute;
    right: 40px;
                     }

     p{
       color:yellow;
                    }


     h1{
        position: relative;
        top: 20px;
        font-family: letra1;
        text-align: center;
        color: orange;
                       }

      .boton{
        background-color: orange;
        font-family: fantasy;
        text-shadow: 5px 5px 5px black;
        border-radius: 25px;
                             }

       .boton a{
        color: white;
                     }


  </style>
 @endsection

@section("principal")
<h1>MIS PELICULAS</h1>
<ul>
    @forelse ($peliculas as $pelicula)
       <li>
         <p><a href="/pelicula/{{$pelicula->id}}">{{$pelicula["title"]}}</a></p>
       </li>
  @empty
    <p>no hay peliculas</p>
  @endforelse
</ul>
{{$peliculas->links()}}

<div class="fluor">
   <button type="button" class="boton"><a href="http://localhost:8000/editarPelicula">Editar peliculas</a></button>
</div>
</div>

  @endsection
