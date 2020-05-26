@extends("plantilla")

 @section('imagen')
  <style>

     html,body{
       background-image: url(/imagenes/fondoestirado4.jpg);
       background-size:cover;
       }

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
<h1>MIS ACTORES</h1>
<ul>
    @forelse ($actores as $actor)
       <li>
         <p>{{$actor->getNombreCompleto()}}</p>

       </li>
  @empty
    <p>no hay actores</p>
  @endforelse
</ul>



  @endsection
