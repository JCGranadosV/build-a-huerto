<html>
<head>
<title></title></head>
<?php 
//nombre del archivo consultar.php
include("ConsultaBD.php");
?>

<body>
<?php

	$consulta = "SELECT nombre, telefono ,correo , fecha FROM datos ";
	
	$resultado = consultaBD($consulta);
	
	if($resultado == FALSE)
		echo "fallo conexión";

$n=0;



echo "<table style='border-collapse:collapse' border='1'><tr><td>Nombre</td><td>Teléfono</td><td>correo</td><td></td></tr>";
	while($row = mysqli_fetch_array($resultado))
   { 
		$nombre[$n]   = $row['nombre'];
		$telefono[$n]     = $row['telefono'];
		$correo[$n] = $row['correo'];
		$fecha[$n] = $row['fecha'];
       
		echo "<tr><td>$nombre[$n]</td> <td>$telefono[$n]</td> <td>$correo[$n]</td> <td>$fecha[$n]</td></tr>";
		$n++;
		
 
    } 
	
	echo "</table> <br> <br> <br> <br>";

	?>
	   
	   
	   
	   
	   
<h2><A HREF="index.php"> Menu principal </A></h2>  
	   
</body>
</html>