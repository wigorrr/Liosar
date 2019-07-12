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
      <img class="navbar-brand logo_liosar_big hidden-xs"  src="imagenes/logo_liosar.png">
      <img class="navbar-brand logo_liosar hidden-lg"  src="imagenes/logo_liosar.png">
    </div>
    <div class="collapse navbar-collapse navbar-right" id="myNavbar">
      <ul class="nav navbar-nav navegacion-lista">
        <li><a href="index.php">Home</a></li>
        <li><a href="nosotros.php">Nosotros</a></li>
        <li class="dropdown">
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
        <li class="active"><a href="clientes.php">Clientes</a></li> 
        <li><a href="contacto.php">Contacto</a></li>
      </ul>
    </div>
  </div>
</nav>


<div id="clientes_container">
<h1>CLIENTES</h1>

<p> Algunos de los clientes que confían en LIOSAR son: </p>

<div class="row_clientes"> 
  <div class="column_clientes">
    <img src="imagenes/clientes/aglomerado.png">
    <img src="imagenes/clientes/autoridad.png">
    <img src="imagenes/clientes/benito.png">
    <img src="imagenes/clientes/cnea.png">
    <img src="imagenes/clientes/desynth.png">
    <img src="imagenes/clientes/ecoayres.png">
    <img src="imagenes/clientes/ferring.png">
    <img src="imagenes/clientes/foro.png">
    <img src="imagenes/clientes/fundacion.png">
    <img src="imagenes/clientes/gora.png">
    <img src="imagenes/clientes/inti.png">
    <img src="imagenes/clientes/invap.png">
    <img src="imagenes/clientes/nucleoelectrica.png">
    <img src="imagenes/clientes/nucleovida.png">
    <img src="imagenes/clientes/takeda.png">
    <img src="imagenes/clientes/unilever.png">
    <img src="imagenes/clientes/univmoreno.png">
  </div>
</div>

</div><!--/.clientes_container-->

<?php
include ('footer.php');
?>

</body>
</html>