<?php
//include ('contact_code.php');
?>

<div class="footer">
  <div class="container-fluid">
  <div class="row fila-footer">
    <div class="col-sm-6 footer_left">
      <h2>CONTACTO</h2>
      <p>Si tiene alguna consulta, duda o sugerencia acerca de nuestros servicios, por favor complete el
      formulario y un representante de nuestra empresa se comunicará con usted a la brevedad.</p>
                        
      <form action="#" method="POST" name="contacto" target="_top" id="formulariocontacto">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="first_name" id="first_name" class="form-control input-contacto" placeholder="Nombre" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="email" id="email" class="form-control input-contacto"  placeholder="Email" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" class="form-control message" rows="4" placeholder="Consulta"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" value="Enviar Consulta" class="btn btn-primary boton_enviar" name="submit">Enviar Consulta</button>
                                    </div>
                                </div>
                            </div>

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

                                //Componemos cuerpo correo.
                                $msjCorreo = "Nombre: " . $nombre;
                                $msjCorreo .= "\r\n";
                                $msjCorreo .= "Email: " . $email;
                                $msjCorreo .= "\r\n";
                                $msjCorreo .= "Mensaje: " . $mensaje;
                                $msjCorreo .= "\r\n";

                                if (mail($para, $subject, $msjCorreo, $headers)) {
                                    echo "<script language='javascript'>
                                        alert('Mensaje enviado, muchas gracias.');
                                    </script>";
                                } else {
                                    echo "<script language='javascript'>
                                        alert('fallado');
                                    </script>";
                                }
                            }
                            ?>
                        </form>

                          <div class="redes hidden-xs"> 
                          <a href="https://es-la.facebook.com/liosar.argentina/" style="line-height:3.5em; padding-right:3%;"><img src="imagenes/fb.png" width="35px"></a>
                          <a href="https://www.instagram.com/liosar.argentina/?hl=es-la" style="line-height:3.5em; padding-right:3%;"><img src="imagenes/ig.png" width="35px"></a>
                          <a href="https://www.linkedin.com/company/liosar/" style="line-height:3.5em; padding-right:3%;"><img src="imagenes/linkedin.png" width="35px"></a>
                          <a href="https://www.youtube.com/channel/UCj0v4RArit7GrsU5SFPnuYw?view_as=subscriber" style="line-height:3.5em; padding-right:0%;"><img src="imagenes/youtube.png" width="35px"></a>
                          </div><!--redes-->  
    </div><!--footer_left-->
    


    <div class="col-sm-6 footer_right">
                                  <p>LIOSAR</p>   
                                  <h5> Dirección: Colón 2056, L. del Mirador </h5>
                                  <h5>Buenos Aires, Argentina</h5> 
                                  <h5> Tel: 2071-3500 </h5> 
                                  <h5>Email: info@liosar.com</h5>
                                  <br>                             
                                  <div class="footer_logos hidden-xs">      

                                      <div class="logo_footer_liosar">
                                      <img src="imagenes/logo_fullwhite.png" style="float:right; margin-right:-12px; margin-top:0; width:200px;">
                                      </div><!--logo_footer_liosar--> 
                                      
                                      <div class="logoarg_datafiscal">
                                      <img src="imagenes/logo_argentina.png" style="margin-right:-12px; margin-top:0; height:4em;">
                                      <a href="http://qr.afip.gob.ar/?qr=QDAN3LIrN53aGfrQtaCP8A,," target="_F960AFIPInfo"><img src="imagenes/datafiscal.jpg" style="float:right; height:3em; margin-top:5px; margin-left:20px; "></a>
                                      </div><!--logoarg_datafiscal--> 

                                  </div><!--footer_logos-->   
   
                         

    </div><!--footer_right-->

   


  </div>
</div>

        
                                 
         

                            
</div><!--/.footer-->

</body>
</html>