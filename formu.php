<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$para = "angeltobonperez5@gmail.com";
$asunto = "Nuevo Requericion de $nombre";

$mensaje= "
Nombre del remitente: ".$nombre."
correo: ".$email."
mensaje: ".$mensaje."
";

mail($para, $asunto, utf8_decode($mensaje));

header("location: contactos.html");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <title>Contactos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/brands.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!--font Oswald gooleg-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet"> 
    <!--pagina donde se editara el css-->
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <link rel="stylesheet" href="../Css/contactos.css">
    
<script type="text/javascript" src="main.js"></script>
</head>
<body>
   <!--contenedor de barra de listas-->
   <div class="contenedor">
       <nav >
           <img src="/Imagenes/up-line.png" alt="Logo Principal" class="barra-logo">
           <ul class="barra-listas">
               <li>
                   <a href="../index.html">Inicio</a>
               </li>
               <li>
                   <a href="../Portafolio/portafolio.html">Portafolio</a>
                   <ul class="menu-vertical">
                    <li><a href="../Portafolio/portafolio.html#sc">Autocarpado Volqueta</a></li>
                    <li><a href="../Portafolio/portafolio.html#sc1">Manual Volqueta</a></li>
                    <li><a href="../Portafolio/portafolio.html#sc2">Autocarpado Mula</a></li>
                    <li><a href="../Portafolio/portafolio.html#sc3">Manual Mula</a></li>
                    <li><a href="../Portafolio/portafolio.html#sc4">Protector Lateral</a></li>
                    <li><a href="../Portafolio/portafolio.html#sc5">Cintas Reflectivas</a></li>
                    <li><a href="../Portafolio/portafolio.html#sc6">Discos Abrasivos</a></li>
                    <li><a href="../Portafolio/portafolio.html#sc7">Repuestos</a></li>
                    <li><a href="../Portafolio/portafolio.html#sc8">Malacates</a></li>
                  </ul> 
               </li>
               <li>
                   <a href="../Servicios/servicios.html">Servicios</a>
                   <ul class="menu-vertical">
                    <li><a href="/Servicios/servicios/autvol.html">Autocarpado Volqueta</a></li>
                    <li><a href="/Servicios/servicios/manvol.html">Manual Volqueta</a></li>
                    <li><a href="/Servicios/servicios/autmul.html">Autocarpado Mula</a></li>
                    <li><a href="/Servicios/servicios/manmul.html">Manual Mula</a></li>
                    <li><a href="/Servicios/servicios/probic.html">Protector Lateral</a></li>
                    <li><a href="/Servicios/servicios/cinrefle.html">Cintas Reflectivas</a></li>
                    <li><a href="/Servicios/servicios/discabra.html">Discos Abrasivos</a></li>
                    <li><a href="/Servicios/servicios/repuestos.html">Repuestos</a></li>
                    <li><a href="/Servicios/servicios/malacate.html">Malacates</a></li>
                  </ul> 
               </li>
               <li>
                   <a href="contactos.html">Contacto</a>
               </li>
           </ul>
       </nav>
   </div>
   <!--encabezado de al pagina-->
   <header class="img-principal-c">
   <img src="/Imagenes/ImgvidContacto/presentacion tarjeta-logo.png">
   </header>
   
   <!--Seccion de fotos-->
   
   <div class="foto">
       <h2>Contacto</h2>
       <i class="fa fa-minus"></i><i class="fa fa-cog"></i><i class="fa fa-minus"></i>
   </div>
   
   <div class="fotoc1">
    <p>??Mandame un email para contactarte!</p>
    </div>
    <div class="video">
        <a href="#contactoemail"><video src="/Imagenes/ImgvidContacto/Videos contacto/Recibidos (48) - uplinevfrt@gmail.com - Gmail - Google Chrome 2022-03-17 14-37-52_Trim.mp4" autoplay repeat>escribenos</video></a>
       </div>
   <section class="contactoemail" id="contactoemail">
       <div class="fondo">
           <form action="/formu.php" method="POST" class="listado">          
                 <div class="form-group"> <label for="nombre">Nombre</label>
                 <input type="text" name="nombre" id="nombre" required placeholder="Nombre" >
                 </div>
                 <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" id="email" required placeholder="Email@email.com"class="input1">
                  </div> 
                  <div class="form-group">
                  <label for="Mensaje">Mensaje</label>
                  <textarea name="mensaje" type="mensaje"id="mensaje" cols="30" rows="10"></textarea>
                  </div>
                  <div class="form-group">
                  <input type="submit" name="button"value="enviar">
                  </div>
           </form>
         </div>
        
        </section>
   



   <div class="fotoc2">
    <p>Contactame por messenger</p>
   </div>
  
   <section class="contact-messenger">
   <div class="video1">
    <a href=""><video src="/Imagenes/ImgvidContacto/Videos contacto/Messenger _ Facebook - Google Chrome 2022-03-17 14-54-01_Trim.mp4 "  autoplay repeat>escribenos</video></a>
   </div>

   </section>

  


   <section class="fotoc3">
    <p>Llamame</p>
   </section>
   
   <section class="contact-messenger">
    <div class="video2">
        <a href="tel:3206194036"><video src="" autoplay replay>escribenos</video></a>
       </div>
   
   </section>


   <div class="fotoc4">
    <p>Contactame por Whatsapp</p>
   </div>
   
   <section class="contact-messenger">
    <div class="video3">
        <a href=""><video src="" autoplay repeat>escribenos</video></a>
       </div>
   </section>
      

   </div>

 <!--footer-->
 <footer class="footer">
    <div class="linksimportantes">
        
        
        <div class="Atencionacliente">
            <h2>Atencion al cliente</h2>
            <ul>
                <li>
                    <a href="">Preguntas Frecuentes</a>
                </li>
                <li>
                    <a href="">Pedidos y Envios</a>
                </li>
                <li>
                    <a href="">Garantia</a>
                </li>
                <li>
                    <a href="">Condiciones de compra</a>
                </li>
                <li>
                    <a href="">Privacidad y Cookies</a>
                </li>
                <li>
                    <a href="">Avisos legales</a>
                </li>
            </ul>
        </div>
        <div class="SobreNosotros">
            <h2>Nosotros</h2>
            <ul>
                     <li>
                    <a href="">Quienes Somos</a>
                     </li>
                    <li>
                        <a href="">Afiliados</a>
                    </li>
                    <li>
                        <a href="">Blog</a>
                    </li>
                </li>
            </ul>
        </div>
        <div class="Tienda">
            <h2>Tienda</h2>
            <ul>
                <li>
                    <a href="">Servicios</a>
                </li>
               
            </ul>
        </div>
     
        
    </div>
    
    <div class="social">
        <p>FOLLOWING</p>
        <div class="links">
            <div>
            <a href="#">
                <i class="fa-brands fa-facebook"></i>
            </a>
           </div>
            <div>
              <a href="#">
                <i class="fa-brands fa-twitter"></i>
            </a>
            </div>
            <div>
            <a href="#">
                <i class="fa-brands fa-linkedin"></i>
            </a>
            </div>
        </div>

  </div>

    <i class="fa fa-copyright"><h2>Copyright</h2></i>
    
</footer>
<script>
$(document).ready(function(){
    $('img').hover(function() {
        $(this).addClass('transition');
    }, function() {
        $(this).removeClass('transition');
    });
});
</script>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="funciones.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

</body>
</html>