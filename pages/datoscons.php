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

$consulta = "SELECT ID, nombre, telefono, correo, fecha FROM datos WHERE (ID= '$ID')";

$resultado = consultaBD($consulta);
	
	if($resultado == FALSE)
		echo "fallo conexión";

$n=0;
	 while($row = mysqli_fetch_array($resultado))
   { 
		$nombre[$n]   = $row['nombre'];
		$telefono[$n]     = $row['telefono'];
		$correo[$n] = $row['correo'];
		$fecha[$n] = $row['fecha'];
        $n++;
		
		
 
    } 
	   
	
	   ?>
	   
	 <table style='border-collapse:collapse' border='1'>
	 <tr><td>nombre</td><td>telefono</td><td>correo</td><td>fecha</td></tr>
	 <tr><td><?php echo $nombre[0]; ?></td>
	 <td><?php echo $telefono[0]; ?></td>
	 <td><?php echo $correo[0]; ?></td>
	 <td><?php echo $fecha[0]; ?></td></tr>
	 </table>


	 <h2><A HREF="index.php"> Menu principal </A></h2>


</body>
</html>

