<?php
	define("cServidor", "localhost");
	define("cUsuario", "root");
	define("cClave", "");
	define("cBd", "huerto");

	function consultaBD($consulta){

		$conexion = mysqli_connect(cServidor, cUsuario, cClave, cBd);
		$resultado = mysqli_query($conexion, $consulta);

		if($resultado){
			mysqli_close($conexion);
			return $resultado;
		}
		else{
			mysqli_close($conexion);
			return FALSE;
		}

	}

?>