<?php
session_start();
if(isset($_SESSION['usernam']))
{
    header('location: index2.php');
}

if(isset($_POST['blogin']))

{
$host ="localhost";
$user ="root";
$pass ="";
$db="b13_29366343_gomezgarcia";


//funcion llamada conexion con (dominio,usuarios,contraseña,base_de_datos)
$con = mysqli_connect($host,$user,$pass,$db);
if(!$con){
    die("No hay conección: " .mysqli_connect_error());
}

$Name=$_POST["Name"];
$Pass=md5($_POST["Pass"]);

$result = mysqli_query($con, "SELECT * FROM usuario WHERE Username = '".$Name."' and Password = '".$Pass."'");
$nr=mysqli_num_rows($result);

if(!isset($_SESSION['usernam']))

if($nr == 1) {
    $_SESSION['usernam']=$Name;
    header("location: index2.php");
}
elseif ($nr == 0){
    echo"<script>alert('Usuario o contraseña incorrectos.')
    {        window.location='login.html';
        } </script>";
        
}
}
?>