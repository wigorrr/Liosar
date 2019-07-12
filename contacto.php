<?php
include ('head.php');
require_once "recaptchalib.php";
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
      <img class="navbar-brand logo_liosar_big hidden-xs"  src="imagenes/logo_liosar.png"/>
      <img class="navbar-brand logo_liosar hidden-lg"  src="imagenes/logo_liosar.png"/>
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
        <li><a href="clientes.php">Clientes</a></li>
        <li class="active"><a href="contacto.php">Contacto</a></li>
      </ul>
    </div>
  </div>
</nav>



<div class="container-fluid mails_contacto_container">
  <div class="row">
    <div class="col-sm-4 mail_atencion">
        <h2>Atención al cliente</h2>
        <p><a href="mailto:info@liosar.com">info@liosar.com</a></p>
    </div>

    <div class="col-sm-4 mail_ventas">
        <h2>Ventas</h2>
        <p><a href="mailto:ventas@liosar.com">ventas@liosar.com</a></p>
    </div>

    <div class="col-sm-4 mail_asistencia">
        <h2>Asistencia técnica</h2>
        <p><a href="departamentotecnico@liosar.com">departamentotecnico@liosar.com </a></p>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 boton_contacto_container">
       <button id="myBtn">CONTACTO</button>
    </div>
  </div>
</div>




<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content modal-contacto">
    <span class="close">&times;</span>
     <h1>Contacto</h1>
     <hr>
     <p>Si tiene alguna consulta, duda o sugerencia acerca de nuestros servicios, por favor complete el
      formulario y un representante de nuestra empresa se comunicará con usted a la brevedad.
    </p>

    <form action="?" id="formulario_popup" class="formulario-modal" method="post">
        <div class="form-group">
          <label for="firs_tname">Nombre*</label>
          <input type="text" name="first_name" id="first_name" class="input_contacto" class="form-control" required/>
        </div>
        <div class="form-group">  
          <label for="email">Tu correo electrónico*</label>
          <input type="text" name="email" id="email" class="input_contacto" required/>
        </div>
        <div class="form-group">
          <label for="subject">Asunto</label>
          <input type="text" name="subject" id="subject" class="input_contacto"/>
        </div>
        <div class="form-group contenedor-message">
          <label for="message">Mensaje*</label>
          <textarea name="message" rows="4" id="message" class="message-modal"></textarea>
        </div>
        <div class="g-recaptcha" data-sitekey="6Ld-KqoUAAAAAFd7vwvZCIf5TnVycGyTyfM3sEBF"></div>
        <br/>
        <button class="formBtn boton-enviar-modal" type="submit" value="ENVIAR" name="submit" id="submit">ENVIAR</button>

        <?php
          //Reseteamos variables a 0.
          $nombre = $email = $subject = $mensaje = $para = $headers = $msjCorreo = NULL;

          if (isset($_POST['submit'])) {
              //Obtenemos valores input formulario
              $nombre = $_POST['first_name'];
              $email = $_POST['email'];
              $subject = 'Mensaje enviado desde LIOSAR.com';   
              $mensaje = $_POST['message'];
              $para = 'info@liosar.com';
              //$para = 'alberto.lagoria@gmail.com';
              //Componemos cuerpo correo.
              $msjCorreo = "Nombre: " . $nombre;
              $msjCorreo .= "\r\n";
              $msjCorreo .= "Email: " . $email;
              $msjCorreo .= "\r\n";
              $msjCorreo .= "Mensaje: " . $mensaje;
              $msjCorreo .= "\r\n";

              $secret = "6Ld-KqoUAAAAAPZYgeBa6wkD0zyKHnCpQITaUuWv";
              $response = null;
              $reCaptcha = new ReCaptcha($secret);

              if ($_POST["g-recaptcha-response"]) {
                $response = $reCaptcha->verifyResponse(
                    $_SERVER["REMOTE_ADDR"],
                    $_POST["g-recaptcha-response"]
                );
              }

              if ($response != null && $response->success) {
                mail ($para, $subject, $msjCorreo, $headers);
                echo "<script language='javascript'>
                alert('Mensaje enviado, muchas gracias.');
                </script>";
               //echo "<span>Mensaje enviado, muchas gracias.</span>";
              } else {
                echo "<script language='javascript'>
                    alert('El envío de su mensaje ha fallado.');
                </script>";

              }
          }
        ?>

    </form>
  </div>
  <div id="backdrop" class="modal-backdrop"></div>

</div>

<div class="mapouter">
<div class="gmap_canvas">
<iframe width="100%" height="400" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.9410769676865!2d-58.5402846848774!3d-34.65619098044595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb81c40d87c69%3A0x51c25bf5fcb156c6!2sLIOSAR!5e0!3m2!1ses!2sar!4v1533482998037" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
</iframe>

</div>
</div>

<?php
//include ('footer.php');
?>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the backdrop element that closes the modal
var backdrop = document.getElementById("backdrop");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks on backdrop, close the modal
backdrop.onclick = function() {
            modal.style.display = "none";
        }

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>