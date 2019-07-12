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
      <img class="navbar-brand logo_liosar_big hidden-xs hidden-sm"  src="imagenes/logo_liosar.png">
      <img class="navbar-brand logo_liosar hidden-lg"  src="imagenes/logo_liosar.png">
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

<main>
<div class="encabezado-producto">
  <div class="breadcrumbs">
    <ul>
        <li><a href="index.php">Productos</a></li>
        >
        <li><a href="productos_equipamiento.php">Equipamiento</a></li>
    </ul>
  </div>

  <h1> EQUIPAMIENTO </h1>
  
</div><!--Fin Encabezado Productos-->

<div class="container-fluid container-lista-prod">
  <div class="row">
    <div class="col-sm-3">
      <ul class="lista-productos">
        <li><a href="website-in-progress.html">Cabina de seguridad biológica <br>Clase II Tipo A2</a></li>
        <li><a href="website-in-progress.html">Cabina de seguridad biológica <br>Clase II Tipo B2</a></li>
        <li><a href="website-in-progress.html">Cabina de seguridad biológica <br>Clase III</a></li>
        <li><a href="website-in-progress.html">Cabina de flujo laminar horizontal</a></li>
        <li><a href="website-in-progress.html">Cabina de flujo laminar vertical</a></li>
        <li><a href="website-in-progress.html">Cabina para PCR</a></li>
      </ul>
    </div>  <!--Fin Col 1-->
    <div class="col-sm-3">
      <ul class="lista-productos">
        <li><a href="cabina-de-extraccion.php">Cabina de extracción </a></li>
        <li><a href="website-in-progress.html">Cabina de extracción compensada </a></li>
        <li><a href="website-in-progress.html">Cabina de pesaje</a></li>
        <li><a href="website-in-progress.html">Cabina de flujo descendente modular</a></li>
        <li><a href="website-in-progress.html">Caja de paso (Pass Box)</a></li>
      </ul>
    </div>  <!--Fin Col 2-->
      <div class="col-sm-3">
        <ul class="lista-productos">
          <li><a href="website-in-progress.html">Caja de paso con flujo de aire (Pass Box)</a></li>
          <li>  <a href="website-in-progress.html">Ducha de aire para accesos <br>de personal o equipos</a></li>
          <li><a href="website-in-progress.html">Agitador vortex</a></li>
          <li><a href="website-in-progress.html">Agitador magnetico</a></li>
          <li><a href="website-in-progress.html">Agitador de paleta</a></li>
        </ul>
      </div>  <!--Fin Col 3-->
      <div class="col-sm-3">
        <ul class="lista-productos">
          <li><a href="website-in-progress.html">Agitador burrel</a></li>
          <li><a href="website-in-progress.html">Baño termostático</a></li>
          <li><a href="website-in-progress.html">Centrifuga</a></li>
          <li><a href="website-in-progress.html">Calefactor de bloque seco</a></li>
          <li><a href="website-in-progress.html">Plancha calefactora</a></li>
        </ul>
    </div>  <!--Fin Col 4-->
  </div><!--Fin Row-->
</div><!--Fin Container-->

</main>


<?php
include ('footer.php');
?>