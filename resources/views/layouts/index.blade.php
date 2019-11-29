<!DOCTYPE html>
<html lang="en" dir="ltr">
  <body>
    <nav class="menu-principal">
      <div class="menu-contenedor">
      <a href="/" class="nombre">Siu Libre</a>
      <input id="act" type="checkbox" name="act" value="">
      <label for="act">
      <img class=" hamburguesa" src="css/imagenes/menu.png" alt="">
      </label>
        <ul class="hambur">
          <li class="menu"><a href="">Usuarios</a></li>
          <li class="menu"><a href="">Empleos</a></li>
          <li class="menu"><a href="">Empresas</a></li>
          </ul>

        </div>
    </nav>
      @yield('content')
    <footer>
      <h3 id="nredes">Nuestras Redes</h2>
        <div class="redes">
      <a href="#" target="_blank"><img src="css/imagenes/twitter.png" alt=""></a>
      <a href="#" target="_blank"><img src="css/imagenes/instagram.png" alt=""></a>
      <a href="#" target="_blank"><img src="css/imagenes//facebook.png" alt=""></a>
    </div>
      <ul class="pie">
        <li><a href="#">Sobre Nosotros</a></li>
        <li><a href="#">Preguntas Frecuentes</a></li>
        <li><a href="#">Empleos</a></li>
        <li><a href="#">Contacto</a></li>
      </ul>
    </footer>

  </body>
</html>
