<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Index</title>
  <meta charset="utf-8" />
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
    <hr />
    <hr />
    <img src="../images/logo.png" alt="logo" class="logo"></img>
    <hr />
  </header>
  <div class="w3-top">
    <div class="w3-row w3-padding w3-black">
      <div class="w3-col s3">
        <a href="index.php" class="w3-button w3-block w3-black">HOME</a>
      </div>
      <div class="w3-col s3">
        <a href="infoHuertos.php" class="w3-button w3-block w3-black">INFO HUERTOS</a>
      </div>
      <div class="w3-col s3">
        <a href="infoPlantas.php" class="w3-button w3-block w3-black">INFO PLANTAS</a>
      </div>
      <div class="w3-col s3">
        <a href="viewHuertos.php" class="w3-button w3-block w3-black">ADMINISTRA HUERTOS</a>
      </div>
      <div class="w3-col s3">
        <a href="logout.php" class="w3-button w3-block w3-black">LOGOUT</a>
      </div>
    </div>
  </div>
  <main>
    <div class="w3-container" id="about">
      <div class="w3-content" style="max-width:700px">
        <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">¡CULTIVEMOS JUNTOS!</span></h5>
        <p>En build-a-huerto nos apasiona apoyar a nuestros usuarios a construir, cuidar, y cosechar sus propios huertos en casa. Para esto, les brindamos las herramientas necesarias para poderle dar seguimiento a sus pequeñas creaciones.</p>
        <p>Aquí podrás registrar cada uno de tus huertos y llevar un registro claro de cuando fue la última vez que fueron regados, cuando deben ser cosechados, su tipo de planta, localización y mucho más!</p>
        <div class="w3-panel w3-leftbar w3-light-grey">
          <p><i>"The glory of gardening: hands in the dirt, head in the sun, heart with nature. To nurture a garden is to feed not just the body, but the soul."</i></p>
          <p> - Alfred Austin</p>
        </div>
        <img src="../images/huerto1.jpg" style="width:100%;max-width:1000px" class="w3-margin-top">
      </div>
    </div>


    <h3>Sé testigo de lo que tu huerto puede llegar a ser.</h3>
    <p>El lugar indicado para informarte acerca de una vida mas ecologica y llena de vida!</p>

    <img src="https://espores.org/wp-content/uploads/media/k2/items/src/4f4d9fa294e26f44f90908a15cafba41.jpg" class="center"></img>
    <p><strong>Contáctanos:</strong> A01023421@itesm.mx</p>
    <p><strong>Equipo:</strong> 2</p>
    <br>

    <br>

  </main>
  <br />
  <footer>
    <strong style="font-family: 'Inconsolata', sans-serif;">Tecnológico de Monterrey - 2021</strong>
  </footer>
  <script src="../javascript/index.js"></script>
</body>

</html>