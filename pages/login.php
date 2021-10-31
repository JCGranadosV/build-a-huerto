<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(!empty($username) && !empty($password) && !is_numeric($username))
		{

			//read from database
			$query = "select * from usuarios where username = '$username' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['userid'] = $user_data['userid'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "Usuario o contrasena incorrectos!";
		}else
		{
			echo "Usuario o contrasena incorrectos!";
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Index</title>
    <meta charset="utf-8" />
  </head>
  <link rel="stylesheet" type="text/css" href="../styles/login.css?version=1" />
  <body>
    <header>
      <h1>Build-a-Huerto</h1>
      <hr />
    </header>
    <div class="container">
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="infoHuertos.php">Info Huertos</a></li>
          <li><a href="infoPlantas.php">Info Plantas</a></li>
          <li><a href="viewHuertos.php">Administra Huertos</a></li>
          <li><a href="login.php" class="active">Iniciar sesión</a></li>
  
        </ul>
      </nav>
    </div>
    <main>
      <div class="formulario">
        <h1>Iniciar sesión</h1>
        <form method="post">
          <div class="input_texto">
            <input type="text" name="username" id="text" required>
            <span></span>
            <label>Usuario</label>
          </div>
          <div class="input_texto">
            <input type="password" name="password" required>
            <span></span>
            <label>Password</label>
          </div>
          <div class="pwd">Olvidé mi contraseña</div>
          <input type="submit"  value="Iniciar sesión">
          <div class="registro">
            No tienes cuenta? <a href="signup.php">Regístrate</a>
          </div>
        </form>
      </div>
     
    </main>
    <br />
    <footer>
      <strong>Tec de Monterrey</strong>
    </footer>
    <script src="../javascript/login.js"></script>
  </body>
</html>