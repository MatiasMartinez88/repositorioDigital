@extends("plantilla")

 @section('css')
<style>

  body{
   color:white;
               }

  .container{
   height: 80vh;
   display: flex;
   justify-content: center;
                            }

  label{
    color: white;
    text-shadow: 5px 5px 5px black;
    font-family: Impact, Charcoal, sans-serif;
                                               }

  h1{

    font-family: Impact, Charcoal, sans-serif;
    text-shadow: 7px 7px 5px #333333;
                                     }

.row{
  margin-top: 20px;
  box-shadow: 7px 7px 7px #350F65 ;
  border:#1B0635  3px solid;
  border-radius: 2px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 2vw;
  padding-left: 10%;
  background: url(/imagenes/actores.jpg);
  background-size: 100%;
                         }


</style>
 @endsection

 @section("principal")


   <ul style="color:red" class="errores">
     @foreach ($errors->all() as $error)
       <li>{{$error}}</li>
     @endforeach

   </ul>





  <h1 align="center">AGREGAR ACTOR A LA BASE DE DATOS</h1>
   <div class="container">

<div class="row col-8">



<form class="agregarActor" action="agregarActor" method="POST" enctype="multipart/form-data">
  {{csrf_field()}}


    <div>
        <label for="titulo">Primer nombre:</label>"
        <input type="text" name="first_name" value="{{old("first_name")}}">
    </div>
    <div>
        <label for="rating">Apellido:</label>
        <input type="text" name="last_name" value="{{old("last_name")}}">
    </div>
    <div>
        <label for="premios">Puntaje como actor:</label>
        <input type="number" name="rating" id="premios"/>
    </div>
    <div>
        <label for="duracion">Actuación favorita:</label>
        <input type="text" name="favorite_movie_id" id="duracion"/>
    </div>
    <div>
      <label for="poster">Imagen del actor:</label>
       <input type="file" name="poster" value="">
    </div>

    <input type="submit" value="Agregar Actor" name="submit"/>
  </form>

  </div>
</div>
    @endsection
