<?php
session_start();
if(isset($_POST['bcerrar'])){
    session_destroy();
    header('location: login.html');
}
?>
<form method="POST">
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dise&ntilde;o fabricaci&oacute;n y montajes industriales G&oacute;mes Garc&iacute;a;</title>
    <link rel="stylesheet" href="index2.css"> 
</head>
<body>
    <video autoplay muted loop id="Video">
        <source src="Video/WhatsApp Video 2021-04-20 at 13.58.00.mp4" type="video/mp4"> 
    </video>
    <div class="navegacion">
<nav >
<ul>
    <li>
         <span class="icon icon-up-dir"></span></a>
                        <img src="images/menu.png" alt="">
        <ul class="submenu">
            <div class="submenu-items">
                <li><a href="quienessomos.html">Qui&eacute;nes&nbsp;Somos</a></li>
                <li><a href="mision.html">Misi&oacute;n</a></li>
                <li><a href="vision.html">Visi&oacute;n</a></li>
            <li><a href="galeria.html">Galer&iacute;a</a></li>
            <li><a href="#contactanos">Cont&aacute;ctenos</a></li>
            <li><a href="politicas.html">Pol&iacute;ticas&nbsp;de&nbsp;Calidad</a></li>
        </div>
        </ul>
        
        <div class="navegacion1">
            <li><a href="index.html">Inicio</a></li>
            <li><a href="tel:+57 75556168">Llámanos</a></li>
            <li><a href="https://www.instagram.com/montajesindg.g/" target="_blank">Instagram</a></li>
            <li><?php echo $_SESSION['usernam']; ?><input type="submit" value="Cerrar Sesion" name="bcerrar" class="cses"> </li>
        </div>
        <div class="bcotizacion">
        <input type="button" onclick="window.location.href='cotizacion2.php'" value="Pedir una Cotizaci&oacute;n" class="Cotizacion">
    </div>
        <div class="logo">
            <img src="images/Untitled.png" alt="Imagen">
        </div>
        <br><br><br>
        <h1> Encuentranos
        </h1>
        <br>    
        <div class="mapas">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.4842272458072!2d-72.50634798522161!3d7.844280394347976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e6647fe515f005d%3A0x307d52fda7596903!2sdise%C3%B1o%2C%20fabricacion%20y%20montajes%20industriales%20Gomez%20Garcia!5e0!3m2!1ses-419!2sco!4v1619131700370!5m2!1ses-419!2sco" width="1000" height="600" style="border: 2px;;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </ul>
</li> 

</nav>
    </div>
    <br><br><br>    
    <h1>Cont&aacute;ctenos</h1>
    <div class="bull"><img src="images/bull.jpeg" alt="Bull">
    </div>
    <div class="contacto" id="contactanos">
        
        <nav>
            <ul class="icontacto"> <span color="yellow"></span>
                <br><br>
                <li>E-mail</li><br>
                <li>dfymgg@gmail.com</li><br>
                <li>Telefono</li><br>
                <li>57 7 555 6168</li><br>
                <li>Direcci&oacute;n</li><br>
                <li>Calle 36 # 6-60 La sabana los Patios, Cucuta, Norte de santander, Colombia</li><br>
                <br><br>
                <li>&copy; 2021 - Dise&ntilde;o fabricaci&oacute;n y montajes industriales G&oacute;mes Garc&iacute;a</li>
            </ul>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <a href="https://wa.me/5211234567890?text=Me%20gustaría%20saber%20el%20precio%20del%20coche" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
 
        </nav>
    </div>
     
</body>
</html>