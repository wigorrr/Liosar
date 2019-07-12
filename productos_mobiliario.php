<?php
include ('head.php');
?>

<body>

<nav class="navbar navbar-default navbar_liosar" style="margin-bottom:0;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <img class="navbar-brand logo_liosar_big hidden-xs"  src="imagenes/logo_liosar.png"</img>
      <img class="navbar-brand logo_liosar hidden-lg"  src="imagenes/logo_liosar.png"</img>
    </div>
    <div class="collapse navbar-collapse navbar-right" id="myNavbar">
      <ul class="nav navbar-nav navegacion-lista">
        <li><a href="index.php">Home</a></li>
        <li><a href="nosotros.php">Nosotros</a></li>
        <li class="dropdown active">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Productos<span class="caret"></span></a>
          <ul class="dropdown-menu menu-deplegable">
            <li><a href="productos_equipamiento.php">Equipamiento</a></li>
            <li><a href="productos_seguridad.php">Seguridad</a></li>
            <li><a href="productos_mobiliario.php">Mobiliario</a></li>
            <li><a href="productos_laboratorios.php">Construcción <br> de laboratorios</a></li>
            <li><a href="productos_ventilacion.php">Ventilación</a></li>
            <li><a href="productos_filtros.php">Filtros</a></li>
          </ul>
          
        </li>
       
        <li><a href="index.php">Servicios</a></li>
        <li><a href="clientes.php">Clientes</a></li> 
        <li><a href="contacto.php">Contacto</a></li>
      </ul>
    </div>
  </div>
</nav>

<main class="main-productos-secciones">
<h1 class="titulo_productos_seccion"> MOBILIARIO </h1>
<hr class="division_titulo">

<ul class="lista-productos">
<li><a href="#">Amoblamiento para laboratorio</a></li>
<li><a href="#">Armario de seguridad</a></li>
<li><a href="#">Mesada antivibratoria</a></li>
</ul>


</main>


<?php
include ('footer.php');
?>