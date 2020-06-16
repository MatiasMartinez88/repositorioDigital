<!DOCTYPE html>
  <html lang="en" dir="ltr">

    <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="/css/app.css">

         <title></title>

        <section>
             @yield('css')
        </section>



       <style>

       body{

           background-image: url(/imagenes/fondoestirado4.jpg);
           background-size:cover;
           height: 100vh;
           background-position: center;
           font-weight: 0.5rem;
                                }


         footer{
           font-size: 1.5rem;
           font-family: letra1;
           position: absolute;
           color: white;
           left: 10px;
           bottom: 10px;
                       }



       </style>

  </head>
  <body>


       <section>
             @yield("principal")
       </section>


       <footer>
         Cine En Casa
       </footer>
  
  </body>

</html>
