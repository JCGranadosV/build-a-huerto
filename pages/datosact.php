<html>
<head>
	
	<meta charset=UTF-8>
</head>
<body>
<?php
#session_start();

include('ConsultaBD.php');
	$ID= $_POST['ID'];
	$nombre= $_POST['nombre'];
	$telefono= $_POST['telefono'];
	$correo= $_POST['correo'];
	$fecha= $_POST['fecha'];


//$consulta = "INSERT INTO agenda (nombre, telefono, correo , fecha) VALUES ('$nombre', '$telefono', '$correo' , '$fecha')";

$consulta = "UPDATE datos SET nombre = '$nombre', telefono= '$telefono', correo= '$correo', fecha= '$fecha'  WHERE ID = '$ID'";

if(ConsultaBD($consulta)){
	echo "los datos han sido actualizados en ID:".$ID."<br>";
	echo "nombre:".$nombre."<br>";
	echo "telefono:".$telefono."<br>";
	echo "correo:".$correo."<br>";
	echo "fecha:".$fecha."<br>";


}
else{
	echo "error al guardar";
}

?>
<h2><A HREF="index.php"> Menu principal </A></h2>
</body>
</html>

