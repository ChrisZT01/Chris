<?php

session_start();
if(isset($_POST['bcerrar'])){
    session_destroy();
    header('location: login.html');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotizar</title>
    <link rel="stylesheet" href="cotizacionphp.css">
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
                <li><a href="politicas.html">Pol&iacute;ticas&nbsp;de&nbsp;Calidad</a></li>
                
        
        </div>
        </ul>
        
        <div class="navegacion1">
            <li><a href="index.html">Inicio</a></li>
            <li><a href="tel:+57 75556168">Llámanos</a></li>
            <li><a href="https://www.instagram.com/montajesindg.g/" target="_blank">Instagram</a></li>
            <li><a href=""><?php echo $_SESSION['usernam']; ?><input type="submit" value="Cerrar Sesion" name="bcerrar" id="cses"></a></li>
        </div>
<div class="cotizacion" id="contactanos">
    <form action="CotizacionGuardar.php" method="POST">
    <nav>
        <ul>
            
            <li>¿En qu&eacute; podemos ayudarte?</li>
            <li><textarea name="Cotizacion" rows="4" style="cursor: e-resize;" cols="40">Escribe aqu&iacute; los detalles</textarea></li>
            <br>
            <li><input type="submit" value="Cotizar ahora" id="bcotizar"></li>
            
        </ul>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <a href="https://wa.me/5211234567890?text=Me%20gustaría%20saber%20el%20precio%20del%20coche" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
    </nav>
    </form>
</div>
    
</body>
</html>
</form>