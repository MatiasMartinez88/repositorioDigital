<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Agregar Actor a la base de datos</title>
</head>
<body>
  <h1>Agregar actor a la base de datos</h1>
<form class="agregarActor" action="agregarActor" method="POST">
  {{csrf_field()}}
    <div>
        <label for="titulo">Primer nombre:</label>
        <input type="text" name="first_name" id="titulo"/>
    </div>
    <div>
        <label for="rating">Apellido:</label>
        <input type="text" name="last_name" id="rating"/>
    </div>
    <div>
        <label for="premios">Rating:</label>
        <input type="number" name="rating" id="premios"/>
    </div>
    <div>
        <label for="duracion">Actuación favorita:</label>
        <input type="text" name="favorite_movie_id" id="duracion"/>
    </div>
    
    <input type="submit" value="Agregar Actor" name="submit"/>
  </form>
</body>

</html>
