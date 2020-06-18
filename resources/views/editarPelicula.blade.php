@extends("plantilla")

 @section('css')
<style>

  body{
   color:gold;
               }

  .container{
   height: 80vh;
   display: flex;
   justify-content: center;
                            }

  label{
    color: red;
    text-shadow: 5px 5px 5px black;
    font-family: Impact, Charcoal, sans-serif;
                                               }

  h1{

    font-family: Impact, Charcoal, sans-serif;
    text-shadow: 7px 7px 5px #333333;
                                     }

.row{

  color: blue;
  margin-top: 20px;
  box-shadow: 7px 7px 7px #350F65 ;
  border:#1B0635  3px solid;
  border-radius: 2px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 2vw;
  padding-left: 10%;
  background: url(/imagenes/fondo5.jpg);
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





  <h1 align="center">EDITAR PELICULAS EN LA BASE DE DATOS</h1>
   <div class="container">

<div class="row col-8">



<form class="agregarActor" action="agregarActor" method="POST" enctype="multipart/form-data">
  {{csrf_field()}}

  <div>
      <label for="titulo">Pelicula a editar</label>
      <input type="text" name="title" value="{{old("title")}}">
  </div>
    <div>
        <label for="titulo">Nuevo titulo:</label>
        <input type="text" name="title" value="{{old("title")}}">
    </div>
    <div>
        <label for="rating">puntaje:</label>
        <input type="text" name="rating" value="{{old("rating")}}">
    </div>
    <div>
        <label for="premios">Genero:</label>
        <input type="number" name="genero" id="genero"/>
    </div>
    <div>
        <label for="duracion">Actores:</label>
        <input type="text" name="actor" id="actor"/>
    </div>


    <input type="submit" value="Editar pelicula" name="submit"/>
  </form>

  </div>
</div>
    @endsection
