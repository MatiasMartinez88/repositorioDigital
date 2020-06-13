@extends("plantilla")

 @section('css')
  <style>



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


       .pagination{

         margin-left: 10px;
         display: flex;
         padding-left: 0;
         list-style: none;
         border-radius: 0.25rem;
         position: relative;
         margin-top: 50px;
         margin-bottom: 30px;
                               }




  </style>
 @endsection

@section("principal")
<h1>MIS GENEROS</h1>

  {{$generos->links()}}

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
