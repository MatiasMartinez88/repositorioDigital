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


       .fluor{
         position: relative;
         left: 40px;
         background-color:

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
 <div class="container">

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

         {{$actores->links()}}

   <div class="fluor">
      <button type="button" class="boton"><a href="http://localhost:8000/agregarActor">Agregar actor</a></button>
   </div>
</div>
  @endsection
