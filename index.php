<?php
include ('head.php');
include ('recaptchalib.php');
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
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="nosotros.php">Nosotros</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Productos<span class="caret"></span></a>
          <ul class="dropdown-menu menu-deplegable">
            <li><a href="productos_equipamiento.php">Equipamiento</a></li>
            <li><a href="productos_seguridad.php">Seguridad</a></li>
            <li><a href="productos_equipamiento.php">Mobiliario</a></li>
            <li><a href="productos_equipamiento.php">Construcción <br> de laboratorios</a></li>
            <li><a href="productos_equipamiento.php">Ventilación</a></li>
            <li><a href="productos_equipamiento.php">Filtros</a></li>
          </ul>
        </li>
       
        <li><a href="index.php">Servicios</a></li>
        <li><a href="clientes.php">Clientes</a></li> 
        <li><a href="contacto.php">Contacto</a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="container-fluid container-carousel hidden-xs" style="padding:0;"> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="imagenes/banner_liosar.jpg" alt="liosar_slide1" style="width:100%;">
      </div>

      <div class="item">
        <img src="imagenes/banner_liosar.jpg" alt="liosar_slide2" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="imagenes/banner_liosar.jpg" alt="liosar_slide3" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="container-fluid container-carousel hidden-lg hidden-md hidden-xs hidden-sm" style="padding:0;"> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="imagenes/banner_liosar_mobile.jpg" alt="liosar_slide1" style="width:100%;">
      </div>

      <div class="item">
        <img src="imagenes/banner_liosar_mobile.jpg" alt="liosar_slide2" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="imagenes/banner_liosar_mobile.jpg" alt="liosar_slide3" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<?php
include ('secciones_home.php');
?>

<?php
include ('footer.php');
?>

</body>
</html>