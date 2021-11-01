<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>View Huertos</title>
  <meta charset="utf-8" />
</head>
<link rel="stylesheet" type="text/css" href="../styles/viewHuertos.css" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<style>
  h3,
  h1,
  h2,
  h4,
  p {
    height: 100%;
    font-family: "Inconsolata", sans-serif;
    text-align: center;
  }

  #customers {
    border-collapse: collapse;
    width: 100%;
    font-family: "Inconsolata", sans-serif;
  }

  #customers td,
  #customers th {
    border: 1px solid #ddd;
    padding: 8px;
  }

  #customers tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  #customers tr:hover {
    background-color: #ddd;
  }

  #customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #04AA6D;
    color: white;
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
      <div class="w3-col s2">
        <a href="index.php" class="w3-button w3-block w3-black">HOME</a>
      </div>
      <div class="w3-col s3">
        <a href="infoHuertos.php" class="w3-button w3-block w3-black">INFO HUERTOS</a>
      </div>
      <div class="w3-col s3">
        <a href="infoPlantas.php" class="w3-button w3-block w3-black">INFO PLANTAS</a>
      </div>
      <div class="w3-col s2">
        <a href="viewHuertos.php" class="w3-button w3-block w3-black">ADMINISTRA HUERTOS</a>
      </div>
      <div class="w3-col s2">
        <a href="logout.php" class="w3-button w3-block w3-black">LOGOUT</a>
      </div>
    </div>
  </div>
  <main>
  <h1 class="w3-center w3-padding-50"><span class="w3-tag w3-wide">¡Tu inventario de plantas!</span></h1>

    <h3>Ultimo riego</h3>
     <h2> Hola, <?php echo $user_data['username']; ?></h2>



    <!--    -->


    <?php
    include("ConsultaBD.php");

    $consulta = "SELECT ID, tipoPlanta, nombre, fecha, solosombra, riego, cosecha, tamano, costo, ubicacion FROM huertos ";

    $resultado = consultaBD($consulta);

    if ($resultado == FALSE)
      echo "fallo conexión";

    $fechacons = "SELECT ID, ultriego FROM fechariego";
    $fechares = consultaBD($fechacons);

    $row = mysqli_fetch_array($fechares);
    $ultriego = $row['ultriego'];

    echo "<h4 id = 'ultimo'>$ultriego</h4>";





    ?>

    <h4 id="ultimo"></h4>


    <?php
    if (array_key_exists('Regar', $_POST)) {

      Regar();
    }
    function Regar()
    {

      #include('ConsultaBD.php');
      $fechar = date('d-m-y h:i:s');


      $consreg = "UPDATE fechariego SET ultriego = '$fechar'  WHERE ID = '1'";
      $resreg = consultaBD($consreg);
    }
    ?>


    <label>&nbsp;</label>
    <form method="post">

      <!--<input type="button" name= "Regar" id="Regar" value="Regar" /><br />
      -->
      <input type="submit" name="Regar" class="button" value="Regar" />
    </form>


    <?php

    $n = 0;

    echo "<table style='border-collapse:collapse' id='customers' border='1'><tr><th><h4>ID</h4></th><th><h4>NOMBRE</h4></th><th><h4>FECHA</h4></th><th><h4>SOL O SOMBRA</h4></th><th><h4>RIEGO</h4></th><th><h4>COSECHA</h4></th><th><h4>TAMAÑO (m2)</h4></th><th><h4>COSTO</h4></th><th><h4>UBICACIÓN</h4></th></tr>";
    while ($row = mysqli_fetch_array($resultado)) {

      $ID[$n] = $row['ID'];
      $tipoPlanta[$n] = $row['tipoPlanta'];
      $nombre[$n] = $row['nombre'];
      $fecha[$n] = $row['fecha'];
      $solosombra[$n] = $row['solosombra'];
      $riego[$n] = $row['riego'];
      $cosecha[$n] = $row['cosecha'];
      $tamano[$n] = $row['tamano'];
      $costo[$n] = $row['costo'];
      $ubicacion[$n] = $row['ubicacion'];

      echo "<tr><td>$ID[$n]</td><td>$nombre[$n]</td><td>$fecha[$n]</td><td>$solosombra[$n]</td><td>$riego[$n]</td><td>$cosecha[$n]</td><td>$tamano[$n]</td><td>$costo[$n]</td><td>$ubicacion[$n]</td></tr>";
      $n++;
    }

    echo "</table> <br> <br> <br> <br>";

    ?>


    <hr size="2px" color="black" />

    <!--    -->

    <h4>Añade una planta</h4>

    <p id="cultivos" style="text-align:center;">

    <p>


    <div id="content" class="formulario">

      <h1>Añadir una planta</h1>
      <p style="text-align:center;">Ingresa los valores necesarios para agregar tu planta y presiona el botón "Añadir".</p>
      <form action='datosing.php' method='post'>

        <div class="input_texto">
          <input type="text" name="tipoPlanta" id="tipoPlanta" required>
          <span></span>
          <label>Tipo de planta</label>
        </div>

        <div class="input_texto">
          <input type="text" name="nombre" id="nombre" required>
          <span></span>
          <label>Nombre</label>
        </div>

        <div class="input_texto">
          <input type="date" name="fecha" id="fecha" required>
          <span></span>
          <label>Fecha de plantacion</label>
        </div>




        <input type="radio" id="sol" name="solosombra" value="sol">
        <label for="sol">Sol</label><br>



        <input type="radio" id="sombra" name="solosombra" value="sombra">
        <label for="sombra">Sombra</label><br>




        <div class="input_texto">
          <label for="riego">Intervalo de riego (dias 1 and 30):</label>
          <input type="number" id="riego" name="riego" min="1" max="30">
        </div>

        <div class="input_texto">
          <input type="text" name="cosecha" id="cosecha" required>
          <span></span>
          <label>Cosecha aproximada</label>
        </div>

        <div class="input_texto">
          <label for="tamano">Tamaño del plantio (metros cuadrados):</label>
          <input type="number" id="tamano" name="tamano" min="1" max="50">
        </div>

        <div class="input_texto">
          <input type="number" id="costo" name="costo" required>
          <span></span>
          <label>Costo del plantio</label>
        </div>


        <div class="input_texto">
          <input type="text" name="ubicacion" id="ubicacion" required>
          <span></span>
          <label>Ubicación</label>
        </div>


        <label>&nbsp;</label>
        <input type="submit" id="calculate" value="Añadir">

      </form>
    </div>


  </main>
  <br />
  <footer>
    <strong style="font-family: 'Inconsolata', sans-serif;">Tecnológico de Monterrey - 2021</strong>
  </footer>
  <script src="../javascript/viewHuertos.js"></script>
</body>

</html>