@extends("plantilla")

 @section('css')
  <style>



     p{

       color:yellow;
       }


     h1{
        position: relative;
        top: 20px;
        font-family: letra1;
        text-align: center;
        color: orange; }


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

  @endsection
