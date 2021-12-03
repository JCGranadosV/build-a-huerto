<?php
session_start();

include("connection.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
  //something was posted
  $username = $_POST['username'];
  $password = $_POST['password'];

  if (!empty($username) && !empty($password) && !is_numeric($username)) {

    //save to database
    $userid = random_num(20);
    $query = "insert into usuarios (userid,username,password) values ('$userid','$username','$password')";

    mysqli_query($con, $query);
    
    $now = time();
    $query2 = "insert into fechariego (usuario, ultriego) values ('$userid', FROM_UNIXTIME({$now}))";

    mysqli_query($con, $query2);


    header("Location: login.php");
    die;
  } else {
    echo "Ingresa datos validos!";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Registro</title>
  <meta charset="utf-8" />
</head>
<link rel="stylesheet" type="text/css" href="../styles/login.css?version=1" />
<link rel="stylesheet" type="text/css" href="../styles/index.css?version=1" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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
  <main>
    <div class="formulario">
      <h1>Crea un usuario</h1>
      <form method="post">
        <div class="input_texto">
          <input type="text" name="username" id="text" required>
          <span></span>
          <label>Usuario</label>
        </div>
        <div class="input_texto">
          <input type="password" name="password" id="text" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pwd">Olvidé mi contraseña</div>
        <input type="submit" value="Registrate">
        <div class="registro">
          Ya tienes cuenta? <a href="login.php">Inicia sesión</a>
        </div>
      </form>
    </div>
  </main>
  <footer>
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    <strong style="font-family: 'Inconsolata', sans-serif;">Tecnológico de Monterrey - 2021</strong>
  </footer>
  </div>