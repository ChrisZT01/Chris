<?php //Abrimos php

	//hacemos la conexion para la base de datos:
	$conectar=@mysql_connect('localhost', 'root', '');
	//verificamos la conexion
	if(!$conectar){
		echo"No Se Encontro El Servidor";
	}else{
		$baseDedatos=@mysql_select_db('gomezgarcia');
	//verificamos la base de datos
		if(!$baseDedatos){
			echo"No Se Encontro La Base De Datos";
		}
	}
	//Se Hace la sentencia sql:
	$sql="SELECT * FROM usuarios"; //->Donde * es igual a todos los campos entonces la sentencia seria esta-> seleccionamos todos los campos de la tabla datos
	//ejecutamos la sentencia de slq:
	$ejecutar=mysql_query($sql);
	//traenos todos los valores en un array:
	$registro=mysql_fetch_array($ejecutar);
	//imprimimos los datos de manera dinamica
	echo "<table border='1'>";
	echo"<tr>";
	echo "<th align='center'><b>Nombre</th>";
	echo "<th align='center'><b>Apellidos</th>";
	echo "<th align='center'><b>Username</th>";
	echo "<th align='center'><b>Email</th>";
	echo "<th align='center'><b>Re_Email</th>";
	echo "<th align='center'><b>Telefono</th>";
	echo "<th align='center'><b>Password</th>";
	echo "<th align='center'><b>Re_Password</th>";
	echo"</tr>";
	for($i=0; $i<$usuario; $i++){
		echo"<tr><td>$usuario[0]</td>";
		echo"<td>$usuario[1]</td>";
		echo"<td>$usuario[2]</td>";
		echo"<td>$usuario[3]</td>";
		echo"<td>$usuario[4]</td>";
		echo"<td>$usuario[5]</td>";
		echo"<td>$usuario[6]</td>";
		echo"<td>$usuario[7]</td>";
		echo"</tr>";
		$usuario=mysql_fetch_array($ejecutar);
	}
	echo"</table>";
?>