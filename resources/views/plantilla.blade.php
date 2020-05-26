<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <section>
      @yield('imagen')
    </section>

    <link rel="stylesheet" href="/css/app.css">

<style media="screen">
 footer{
font-size: 1.5rem;
  font-family: letra1;
 position: relative;
 color: white;
 bottom: -5px;
 left: 10px;
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
