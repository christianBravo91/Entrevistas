@extends('layouts.index')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Siu Libre</title>
  </head>
  <body>
    @section('content')
    <header>
      <div class="header-contenedor">
      <h1>Te proponemos ser parte de una compañia con espiritu emprendedor</h1>
      <h2>Sumate a esta gran comunidad </h2>
      <div class="com">
      <a class="iniciar head" href="{{route('usuario.login')}}">Iniciar Sesión Usuario</a>
      <a class="iniciar head" href="{{route('usuario.registro')}}">Registrate Usuario</a>
      <a class="iniciar head" href="{{route('admini.login')}}">Iniciar Sesión Administrador</a>
      <a class="iniciar head" href="{{route('administradores.registro')}}">Registrate Administrador</a>
    </div>
    </div>
    </header>

    <section class="seccion1">

      <div class="todainfo">
      <article class="explicacion">
      <div class="info">
        <img class="descripcion" src="css/imagenes/idea.png" alt="">
        <p>Mostrale al mundo tus ideas y de lo que sos capás</p>
      </div>
    </article>
    <article class="explicacion">
      <div class="info">
        <img class="descripcion" src="css/imagenes/conversacion.png" alt="">
        <p>Encontrá personas con tu misma pasión</p>
      </div>
    </article>
    <article class="explicacion">
      <div class="info">
        <img class="descripcion" src="css/imagenes/trabajo.png" alt="">
        <p>Mantenete al tanto de las últimas ofertas del mercado laboral</p>
      </div>
    </article>
    </div>
    </section>
    
        @endsection
  </body>
</html>
