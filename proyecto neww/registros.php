<?php
include 'conexion.php';
$Nombres = $_POST["Ingreso1"];
$Apellidos = $_POST["Ingreso2"];
$Correo  = $_POST["Resultado22"];
$Contraseña = $_POST["Resultado33"];


$Condicion_1  = $_POST["Condicion_1"];
$Condicion_2  = $_POST["Condicion_2"];
$Condicion_3  = $_POST["Condicion_3"];


$insertar="INSERT INTO datos(Nombres, Apellidos, Correo, Contraseña) values('$Nombres','$Apellidos','$Correo','$Contraseña')";

$mes= mysqli_query($conexion, $insertar);

if(!$mes){
	echo 'no se guardaron los datos';
}else{
echo'si se guardaron los datos';	
}

mysqli_close($conexion);