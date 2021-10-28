<html>
<head>
<title></title></head>

<body>
<?php
include("ConsultaBD.php");

	$ID= $_POST['ID'];
	if (empty($ID)) {

    	$nombre= $_POST['nombre'];
		if (empty($nombre)) {

			$telefono= $_POST['telefono'];
			if (empty($telefono)) {
    			
    			$correo= $_POST['correo'];
				if (empty($correo)) {
    				
    				$fecha= $_POST['fecha'];
					if (empty($fecha)) {

						$consulta = "SELECT ID, nombre, telefono, correo, fecha FROM datos";

  					}
  					else{

  						$consulta = "SELECT ID, nombre, telefono, correo, fecha FROM datos WHERE (fecha= '$fecha')";


  					}

  				}
  				else{
  					#correo not empty
  					#$consulta = "SELECT ID, nombre, telefono, correo, fecha FROM datos WHERE (ID = '$ID' AND nombre = '$nombre' AND telefono= '$telefono' AND correo= '$correo'AND fecha= '$fecha')"

  					$fecha= $_POST['fecha'];
					if (empty($fecha)) {

						$consulta = "SELECT ID, nombre, telefono, correo, fecha FROM datos WHERE (correo= '$correo')";

  					}
  					else{
  						$consulta = "SELECT ID, nombre, telefono, correo, fecha FROM datos WHERE (correo= '$correo'AND fecha= '$fecha')";

  					}

  					
  				}

 			}
 			else{
 				#telefono not empty

 				$correo= $_POST['correo'];
				if (empty($correo)) {


					$fecha= $_POST['fecha'];
					if (empty($fecha)) {

						$consulta = "SELECT ID, nombre, telefono, correo, fecha FROM datos WHERE (telefono= '$telefono')";

  					}
  					else{

  						$consulta = "SELECT ID, nombre, telefono, correo, fecha FROM datos WHERE (correo= '$correo'AND fecha= '$fecha')";

  					}
    				

  				}
  				else{
  					#telefono and correo not empty


  					$fecha= $_POST['fecha'];
					if (empty($fecha)) {

						$consulta = "SELECT ID, nombre, telefono, correo, fecha FROM datos WHERE (correo= '$correo'AND telefono= '$telefono')";

  					}
  					else{

  						$consulta = "SELECT ID, nombre, telefono, correo, fecha FROM datos WHERE (correo= '$correo'AND telefono= '$telefono' AND fecha= '$fecha')";

  					}
  					
  					
  				}

 			}
    		
  		}
  		else{
  			#nombre not empty

  			$telefono= $_POST['telefono'];
			if (empty($telefono)) {
    			
				$correo= $_POST['correo'];
				if (empty($correo)) {
    				

    				$fecha= $_POST['fecha'];
					if (empty($fecha)) {

						$consulta = "SELECT ID, nombre, telefono, correo, fecha FROM datos WHERE (nombre= '$nombre')";

  					}
  					else{
  						
  						$consulta = "SELECT ID, nombre, telefono, correo, fecha FROM datos WHERE (nombre= '$nombre'AND fecha= '$fecha')";

  					}

  				}
  				else{
  					#nombre y correo not empty


  					$fecha= $_POST['fecha'];
					if (empty($fecha)) {

						$consulta = "SELECT ID, nombre, telefono, correo, fecha FROM datos WHERE (nombre= '$nombre'AND correo= '$correo')";

  					}
  					else{
  						
  						$consulta = "SELECT ID, nombre, telefono, correo, fecha FROM datos WHERE (nombre= '$nombre'AND correo= '$correo' AND fecha= '$fecha')";
  					}
  					
  					
  				}

 			}
 			else{
 				#telefono nombre not empty

 				$correo= $_POST['correo'];
				if (empty($correo)) {


					$fecha= $_POST['fecha'];
					if (empty($fecha)) {

						$consulta = "SELECT ID, nombre, telefono, correo, fecha FROM datos WHERE (nombre= '$nombre'AND telefono '$telefono')";

  					}
  					else{
  						
  						$consulta = "SELECT ID, nombre, telefono, correo, fecha FROM datos WHERE (nombre= '$nombre'AND telefono '$telefono' AND fecha= '$fecha')";

  					}
    				

  				}
  				else{
  					#telefono, nombre y correo not empty

  					$fecha= $_POST['fecha'];
					if (empty($fecha)) {

						$consulta = "SELECT ID, nombre, telefono, correo, fecha FROM datos WHERE (nombre= '$nombre'AND telefono '$telefono' AND correo= '$correo')";

  					}
  					else{

  						$consulta = "SELECT ID, nombre, telefono, correo, fecha FROM datos WHERE (nombre= '$nombre'AND telefono '$telefono' AND correo= '$correo' AND fecha= '$fecha')";
  						

  					}
  					
  					
  				}
 				
 			}

  		}
  	}
  	else{
  		#id not empty

  		$nombre= $_POST['nombre'];
		if (empty($nombre)) {

    		$telefono= $_POST['telefono'];
			if (empty($telefono)) {
    			
    			$correo= $_POST['correo'];
				if (empty($correo)) {
    				
    				$fecha= $_POST['fecha'];
					if (empty($fecha)) {

						$consulta = "SELECT ID, nombre, telefono, correo, fecha FROM datos WHERE (ID= '$ID')";


  					}
  					else{
  						
  						$consulta = "SELECT ID, nombre, telefono, correo, fecha FROM datos WHERE (fecha= '$fecha' AND ID= '$ID')";
  					}

  				}
  				else{
  					#id correo not empty

  					$fecha= $_POST['fecha'];
					if (empty($fecha)) {

						$consulta = "SELECT ID, nombre, telefono, correo, fecha FROM datos WHERE (correo= '$correo' AND ID= '$ID')";

  					}
  					else{

  						$consulta = "SELECT ID, nombre, telefono, correo, fecha FROM datos WHERE (fecha= '$fecha' AND ID= '$ID' AND correo = '$correo')";

  					}
  					
  					
  				}

 			}
 			else{
 				#id telefono not empty
 				
 				$correo= $_POST['correo'];
				if (empty($correo)) {

					$fecha= $_POST['fecha'];
					if (empty($fecha)) {

						$consulta = "SELECT ID, nombre, telefono, correo, fecha FROM datos WHERE (telefono= '$telefono' AND ID= '$ID')";

  					}
  					else{

  						$consulta = "SELECT ID, nombre, telefono, correo, fecha FROM datos WHERE (telefono= '$telefono' AND ID= '$ID' AND fecha='$fecha')";

  					}
    				

  				}
  				else{
  					#id telefono correo not empty


  					$fecha= $_POST['fecha'];
					if (empty($fecha)) {

						$consulta = "SELECT ID, nombre, telefono, correo, fecha FROM datos WHERE (telefono= '$telefono' AND ID= '$ID' AND correo='$correo')";

  					}
  					else{
  						
  						$consulta = "SELECT ID, nombre, telefono, correo, fecha FROM datos WHERE (telefono= '$telefono' AND ID= '$ID' AND fecha='$fecha' AND correo='$correo')";

  					}
  					
  					
  				}
 			}

  		}

  		else{
  			#id nombre not empty

  			$telefono= $_POST['telefono'];
			if (empty($telefono)) {
    			
				$correo= $_POST['correo'];
				if (empty($correo)) {

					$fecha= $_POST['fecha'];
					if (empty($fecha)) {

						$consulta = "SELECT ID, nombre, telefono, correo, fecha FROM datos WHERE (nombre= '$nombre' AND ID= '$ID')";


  					}
  					else{

  						$consulta = "SELECT ID, nombre, telefono, correo, fecha FROM datos WHERE (nombre= '$nombre' AND ID= '$ID' AND fecha='$fecha')";

  					}
    				

  				}
  				else{
  					#id nombre y correo not empty

  					$fecha= $_POST['fecha'];
					if (empty($fecha)) {

						$consulta = "SELECT ID, nombre, telefono, correo, fecha FROM datos WHERE (nombre= '$nombre' AND ID= '$ID' AND correo='$correo')";

  					}
  					else{

  						$consulta = "SELECT ID, nombre, telefono, correo, fecha FROM datos WHERE (nombre= '$nombre' AND ID= '$ID' AND fecha='$fecha' AND correo='$correo')";

  					}
  					
  					
  				}
 			}
 			else{
 				#id nombre telefono not empty

 				$correo= $_POST['correo'];
				if (empty($correo)) {

					$fecha= $_POST['fecha'];
					if (empty($fecha)) {

						$consulta = "SELECT ID, nombre, telefono, correo, fecha FROM datos WHERE (nombre= '$nombre' AND ID= '$ID' AND telefono='$telefono')";

  					}
  					else{

  						$consulta = "SELECT ID, nombre, telefono, correo, fecha FROM datos WHERE (nombre= '$nombre' AND ID= '$ID' AND telefono='$telefono' AND fecha='$fecha')";
  					}
    				

  				}
  				else{
  					#id nombre telefono correo not empty

  					$fecha= $_POST['fecha'];
					if (empty($fecha)) {

						$consulta = "SELECT ID, nombre, telefono, correo, fecha FROM datos WHERE (nombre= '$nombre' AND ID= '$ID' AND telefono='$telefono' AND correo='$correo')";

  					}
  					else{

  						$consulta = "SELECT ID, nombre, telefono, correo, fecha FROM datos WHERE (nombre= '$nombre' AND ID= '$ID' AND telefono='$telefono' AND fecha='$fecha' AND correo='$correo')";
  						

  					}
  					
  					
  				}
 				
 			}
  			
  		}

  	}
	



	
	$resultado = consultaBD($consulta);
	

	if(ConsultaBD($consulta)){
	$n=0;
	 while($row = mysqli_fetch_array($resultado))
   	{ 
		$nombre[$n]   = $row['nombre'];
		$telefono[$n] = $row['telefono'];
		$email[$n] = $row['correo'];
		$fecha[$n] = $row['fecha'];
        $n++;
    }
		
		
 
    }
    else{
		echo "fallo conexión";
	}
	
	?>
	   

	 <table style='border-collapse:collapse' border='1'>
	 <tr><td>nombre</td><td>telefono</td><td>correo</td><td>fecha</td></tr>
	 <tr><td><?php echo $nombre[0]; ?></td>
	 <td><?php echo $telefono[0]; ?></td>
	 <td><?php echo $correo[0]; ?></td>
	 <td><?php echo $fecha[0]; ?></td></tr>
	 </table>
	
		




	   

</body>
</html>