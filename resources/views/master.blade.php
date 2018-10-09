<div class="menu">

 <a href="index.php"><img style="width:200px; height:50px;" src="images/logo-ferre.png" alt="" class="logo"></a>
    
    <ul class="nav">
        <li class="nav-item"> 
          <a class="nav-link active" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="preguntasfrecuentes.php">Faq</a>
        </li>
        <li class='nav-busqueda'>
          <form action="#" method='get'>
            <input type="text" name='busqueda' class='input-text' placeholder='Buscar...'>
            <input type="submit" value='Buscar'>
          </form>
        </li>
            <li class="nav-registro">
              <a class="nav-link" href="registro.php">Registrarme</a>
            </li>
            <li class="nav-sesion">
              <a class="nav-link" href="sesion.php">Iniciar Sesión</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="all-services.php">OFRECER UN SERVICIO</a></li>

            <li class="nav-item"><a class="nav-link" href="logout.php">CERRAR SESIÓN</a></li>

            
            

    </ul>

    

        <div class="icono-carrito">
          <a href="#"><img src="images/carrito-icono.png" alt="Mis Compras"></a>
        </div>
        <div class="icono-carrito">
          <a href="#"><img src="images/carrito-icono.png" alt="Mis Compras"></a>
        </div>
        <div class="icono-admin">
            <a href="perfil.php"><img src="images/admin-icono.png" alt="Administrar Base"></a>
        </div>
  </div>
</div>

@yield('content')

<footer class="main-footer">
    <ul>
        <li> 
          <a href="index.php">Home</a>
        </li>
        <li>
          <a href="preguntasfrecuentes.php">Faq</a>
        </li>
            <li>
              <a href="sesion.php">Iniciar sesión</a>
            </li>
            <li>
              <a href="registro.php">Registrarme</a>
            </li>

            <li><a href="logout.php">Cerrar sesión</a></li>

            <li><a href="upload-service.php">Ofrecer un servicio</a></li>


    </ul>
</footer>
