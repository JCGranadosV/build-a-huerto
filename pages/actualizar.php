<!Doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<h2><A HREF="index.php"> Menu principal </A></h2>

<h2>Actualiza el elemento por ID</h2>

	<form action='datosact.php' method= 'post'>

		ID: <input type="ID" name="ID">
		<br>
		<br>
		Nombre: <input type="text" name="nombre" placeholder="nombre">
		<br>
		<br>
		Telefono: <input type="text" name="telefono" placeholder="telefono">
		<br>
		<br>
		Email: <input type="text" name="correo" placeholder="correo">
		<br>
		<br>
		Fecha de nacimiento: <input type="date" name="fecha" placeholder="fecha">
		<br><br>
		<br>
		<button id="enviar" type="submit" class="btn"> Enviar</button> 
	</form>

</body>
</html>