<html>
<head>
	
	<meta charset=UTF-8>
</head>
<body>
<?php
#session_start();

include('ConsultaBD.php');

$tipoPlanta= $_POST['tipoPlanta'];
$nombre= $_POST['nombre'];
$fecha= $_POST['fecha'];
$solosombra= $_POST['solosombra'];
$riego= $_POST['riego'];
$cosecha= $_POST['cosecha'];
$tamano= $_POST['tamano'];
$costo= $_POST['costo'];
$ubicacion= $_POST['ubicacion'];


//$consulta = "INSERT INTO agenda (nombre, telefono, correo , fecha) VALUES ('$nombre', '$telefono', '$correo' , '$fecha')";

$consulta = "INSERT INTO huertos (tipoPlanta, nombre, fecha , solosombra, riego, cosecha,tamano, costo, ubicacion) VALUES ('$tipoPlanta' , '$nombre' , '$fecha' , '$solosombra', '$riego', '$cosecha', '$tamano', '$costo', '$ubicacion')";

if(ConsultaBD($consulta)){
	echo "los datos han sido guardados<br>";



	
}
else{
	echo "error al guardar";
}

?>

<h2><A HREF="index.php"> Menu principal </A></h2>
</body>
</html>

