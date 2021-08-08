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

$Nombre=$_POST['Nombre'];
$Apellidos=$_POST['Apellidos'];
$Username=$_POST['Username'];
$Email=$_POST['Email'];
$Re_Email=$_POST['Re_Email'];
$Telefono=$_POST['Telefono'];
$Password=md5($_POST['Password']);
$Re_Password=md5($_POST['Re_Password']);



	$insertar = "INSERT INTO usuario (Nombre, Apellidos, Username, Email, Re_Email, Telefono, Password, Re_Password) VALUES( '$Nombre', '$Apellidos', '$Username',
	'$Email',
	'$Re_Email',
	'$Telefono',  
	'$Password', 
	'$Re_Password')";	

$resultado = mysqli_query($con,$insertar);

if (!$resultado){
    echo 'Error al registrarse';
}else{
    echo "Usuario registrado exitosamente<br> <a href='login.html'>Volver</a>";
}

mysqli_close($con);
?>