@extends("plantilla")

 @section('css')
<style>
  .container{

    height: 80vh;
   display: flex;
   justify-content: center;

  }

  fieldset{

    position: relative;
  }

  .agregarActor {
    position: absolute;
    display: flex;
    justify-content: center;
                            }


</style>
 @endsection

 @section("principal")


   <ul style="color:red" class="errores">
     @foreach ($errors->all() as $error)
       <li>{{$error}}</li>
     @endforeach

   </ul>





  <h1 align="center">Agregar actor a la base de datos</h1>
   <div class="container">



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

    @endsection
