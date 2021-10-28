<html>
<head>
	
	<meta charset=UTF-8>
</head>
<body>
<?php
#session_start();

include('ConsultaBD.php');
	$ID= $_POST['ID'];


//$consulta = "INSERT INTO agenda (nombre, telefono, correo , fecha) VALUES ('$nombre', '$telefono', '$correo' , '$fecha')";

$consulta = "DELETE FROM datos  WHERE ID = '$ID'";

if(ConsultaBD($consulta)){
	echo "los datos han sido eliminados en ID:".$ID."<br><br>";

}
else{
	echo "error al guardar";
}

?>
<h2><A HREF="index.php"> Menu principal </A></h2>
</body>
</html>