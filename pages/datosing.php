<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<html>

<head>

	<meta charset=UTF-8>
</head>
<link rel="stylesheet" type="text/css" href="../styles/index.css" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<style>
	h3,
	h1,
	h2,
	p {
		height: 100%;
		font-family: "Inconsolata", sans-serif;
		text-align: center;
	}

	.logo {
		display: block;
		margin-left: auto;
		margin-right: auto;
		width: 30%;
	}
</style>

<body>
	<header>
		<img src="../images/logo.png" alt="logo" class="logo"></img>
		<hr />
	</header>
	<?php
	#session_start();

	include('ConsultaBD.php');

	$tipoPlanta = $_POST['tipoPlanta'];
	$nombre = $_POST['nombre'];
	$fecha = $_POST['fecha'];
	$solosombra = $_POST['solosombra'];
	$riego = $_POST['riego'];
	$cosecha = $_POST['cosecha'];
	$tamano = $_POST['tamano'];
	$costo = $_POST['costo'];
	$ubicacion = $_POST['ubicacion'];


	//$consulta = "INSERT INTO agenda (nombre, telefono, correo , fecha) VALUES ('$nombre', '$telefono', '$correo' , '$fecha')";

	$consulta = "INSERT INTO huertos (tipoPlanta, usuario, nombre, fecha , solosombra, riego, cosecha,tamano, costo, ubicacion) VALUES ('$tipoPlanta' , '{$user_data['userid']}', '$nombre' , '$fecha' , '$solosombra', '$riego', '$cosecha', '$tamano', '$costo', '$ubicacion')";

	if (ConsultaBD($consulta)) {
		echo "los datos han sido guardados<br>";
	} else {
		echo "error al guardar";
	}

	?>

	<h2><A HREF="viewHuertos.php"> Regresar a mis Huertos </A></h2>
</body>

</html>