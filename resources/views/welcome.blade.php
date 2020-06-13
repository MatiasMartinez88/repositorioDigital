<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="/css/app.css">

        <title> Cine en Casa </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>

        @font-face{
        font-family:letra1;
        src: url(../fuentes/letra1.ttf);
        }


        h1{
          font-family: letra1;
          color: white;
          font-size: 10vw;
          text-shadow: 5px 5px 5px blue;
          top: 10px;
         }




            html, body {
              background: url(/imagenes/sonic.webp);
              background-repeat: no-repeat;
              background-size:cover;
              background-position: center;

              width: 100%;

              font-family: fantasy;
                height: 100vh;
                margin: 0;
            }




            .full-height {
                height: 90vh;
            }



            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;

                left: 60px;
                top: 18px;
            }

            .top-right a{

                padding: 5px;
                letter-spacing:normal;

            }



            .title {
                font-size: 84px;
                top: 50px;
            }

             a {
                color:yellow ;

                font-size: 20px;
                text-shadow: 5px 5px 5px black;
                letter-spacing: 1rem;
                text-decoration: none;
                text-transform: uppercase;
                }

                a:hover {
                  color: #F0E68C;
                  text-decoration: none;
                                        }

             .mio a{
               letter-spacing: 2px;
               padding-left: 15px;
                                  }


              .mio{
                background: linear-gradient(to right, #03001e, #7303c0, #ec38bc, #fdeff9);
                width: 100%;
                height: 9vh;
                             }

            .titulo{

              margin-top: 10px;
                               }

             .botones{

              bottom: 20px;
                            }

              button.btn-outline-dark{
                display:flex;
               justify-content: center;
               border: white 3px solid;
              }

              div.col-xl-3.col-lg-4.col-md-4.col-sm-12.col-12{
              display:flex;
              justify-content:center;



              }

             .container-fluid{
                height: 70vh;
                            }


        </style>
    </head>
    <body>

<div class="container-fluid">


<header>


      <nav class="navbar navbar-expand-lg mio">

          <a href="{{ route('login') }}">Iniciar-sesión</a>
          <a href="{{ route('register') }}">Registración</a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
             <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">

            </li>

            </ul>
          <form class="form-inline my-2 my-lg-0">
            <select name="tipo" class="form-control mr-sm-2" id="exampleFormControlSelect1">
             <option>Buscar por tipos</option>
             <option>Actor</option>
             <option>Peliculas</option>
             <option>Genero</option>
           </select>
            <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Busca por Nombre" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
          </form>
        </div>
      </nav>
</header>


            @if (Route::has('login'))
                <div class="top-right">
                    @auth
                        <a href="{{ url('/home') }}"></a>
                    @else
                        <a href="{{ route('login') }}"></a>

                        @if (Route::has('register'))

                        @endif
                    @endauth
                </div>
            @endif

      <div class="container titulo">
            <div class="row justify-content-center">
                  <div class="col-8">
                      <h1  class="text-center">Cine en  Casa</h1>
                  </div>
            </div>
      </div>
  </div>
      <div class="container botones">
          <div class="row justify-content-around">
                 <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12">
                     <button type="button" class="btn btn-outline-dark"><a href="http://localhost:8000/peliculas">Peliculas</a></button>
                 </div>
                 <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12">
                     <button type="button" class="btn btn-outline-dark"><a href="http://localhost:8000/generos">generos</a></button>
                 </div>
                 <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12">
                      <button type="button" class="btn btn-outline-dark"><a href="http://localhost:8000/actores">Actores</button>
                 </div>
            </div>
        </div>

</body>
</html>
