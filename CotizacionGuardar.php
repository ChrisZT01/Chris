<?php
 //conectamos Con el servidor
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="b13_29366343_gomezgarcia";

 //funcion llamada conexion con (dominio,usuarios,contraseña,base_de_datos)
 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");

 
//Obtenemos datos.
$Cotizacion=$_POST['Cotizacion'];


$llamar = "SELECT * From gomezgarcia.usuario";
$insertar =  "INSERT INTO cotizaciones (Nombre, Apellidos, Username, Email, Telefono, Cotizacion) VALUES('$Nombre', '$Apellidos', '$Username', '$Email', '$Telefono', '$Cotizacion')";

$resultado = mysqli_query($con,$insertar);

if (!$resultado){
    echo 'Error al enviar cotizacion';
}else{
    echo "Cotizacion enviada exitosamente <br> <a href='index2.php'>Volver</a>";
}

mysqli_close($con);
	
?>