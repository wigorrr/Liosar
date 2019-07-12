<?php 
if(isset($_POST['submit'])){
    $to = "camilagrizio@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];
    mail($to,$subject,$message,$from,$first_name);
    mail($from,$subject2,$message2); // sends a copy of the message to the sender
    echo "Mail Enviado. Gracias " . $first_name . ", te contactaremos a la brevedad.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<?php
include ('head.php');
include ('nav_bar.php');
?>

<body>

    <section id="contact_section">
        <div class="box last">
          <div class="container" style="min-width:95%; padding-left:5%;">
                <div class="row">
                    <div class="col-sm-7">
                      <h3 style="padding-top:0.6em; margin-bottom:1em;">CONTACTO</h3>
                        <p style="margin-bottom:1.4em;">Si tiene alguna consulta, duda o sugerencia acerca de nuestros servicios, por favor complete el <br>formulario y un representante de nuestra empresa se comunicará con usted a la brevedad.</p>
                        <form action="" method="post" name="contacto" target="_top" id="formulariocontacto">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="first_name" class="form-control" required name="first_name" placeholder="Nombre">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control" required name="email"  placeholder="Email ">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" class="form-control" rows="4" placeholder="Consulta"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Enviar" class="btn btn-primary" name="submit">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div><!--/.col-sm-6-->
                    <div class="col-sm-5" style="text-align:right;">
                       
                        <div class="row">
                            <div class="col-md-12">
                                <address style="line-height:2.2em; margin-top:-0.5em;"><br><br><br>
                                  <p>
                                  LIOSAR
                                  <br>
                                  Dirección: Colón 2056, L. del Mirador 
                                  <br>
                                  Buenos Aires, Argentina
                                  <br> 
                                  Tel: 2071-3500 
                                  <br> 
                                  Email: info@liosar.com
                                  <br>                             
                                </address>
                               
                        </div>
                    </div><!--/.col-sm-6-->
                </div><!--/.row--> 
                <img src="imagenes/logo_fullwhite.png" style="float:right; margin-right:4px; margin-top:-1em; width:200px;">
                            </div>
                 <div id="redes"> 
                                  <a href="https://es-la.facebook.com/liosar.argentina/" style="line-height:3.5em; padding-right:2%;"><img src="imagenes/fb.png" width="35px"></a>
                                  <a href="https://www.instagram.com/liosar.argentina/?hl=es-la" style="line-height:3.5em; padding-right:2%;"><img src="imagenes/ig.png" width="35px"></a> </p>
                                  <a href="https://plus.google.com/u/0/b/116678154167094228683/" style="line-height:3.5em; padding-right:2%;"><img src="imagenes/gplus.png" width="35px"></a>
                                  <a href="https://www.linkedin.com/company/liosar/" style="line-height:3.5em; padding-right:2%;"><img src="imagenes/linkedin.png" width="35px"></a>
                                  <a href="https://www.youtube.com/channel/UCj0v4RArit7GrsU5SFPnuYw?view_as=subscriber" style="line-height:3.5em; padding-right:0%;"><img src="imagenes/youtube.png" width="35px"></a> </p>
                                  </div>
                            
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#contact-->

</body>
</html>