<?php

session_start();

include("connection.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
  //something was posted
  $username = $_POST['username'];
  $password = $_POST['password'];

  if (!empty($username) && !empty($password) && !is_numeric($username)) {

    //read from database
    $query = "select * from usuarios where username = '$username' limit 1";
    $result = mysqli_query($con, $query);

    if ($result) {
      if ($result && mysqli_num_rows($result) > 0) {

        $user_data = mysqli_fetch_assoc($result);

        if ($user_data['password'] === $password) {

          $_SESSION['userid'] = $user_data['userid'];
          header("Location: index.php");
          die;
        }
      }
    }

    echo "Usuario o contrasena incorrectos!";
  } else {
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
<link rel="stylesheet" type="text/css" href="../styles/index.css?version=1" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<style>
  h1 {
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
  <div class="container">

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
        <input type="submit" value="Iniciar sesión">
        <div class="registro">
          No tienes cuenta? <a href="signup.php">Regístrate</a>
        </div>
      </form>
    </div>

  </main>
  <br />
  <footer>
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    <strong style="font-family: 'Inconsolata', sans-serif;">Tecnológico de Monterrey - 2021</strong>
  </footer>
  <script src="../javascript/login.js"></script>
</body>

</html>