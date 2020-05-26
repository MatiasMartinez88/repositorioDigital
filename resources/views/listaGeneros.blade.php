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
<h1>MIS GENEROS</h1>
<ul>
    @forelse ($generos as $genero)
       <li>
         <p>{{$genero["name"]}}</p>
          
       </li>
  @empty
    <p>no hay generos</p>
  @endforelse
</ul>



  @endsection
