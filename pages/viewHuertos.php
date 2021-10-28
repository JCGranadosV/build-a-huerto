<!DOCTYPE html>
<html lang="en">

<head>
  <title>View Huertos</title>
  <meta charset="utf-8" />
</head>
<link rel="stylesheet" type="text/css" href="../styles/viewHuertos.css" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">

<body>
  <header>
    <hr />
    <hr />
    <h1>Build-a-Huerto</h1>
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
    </div>
  </div>
  <main>
    <h2>
      ¡Tu inventario de plantas!
    </h2>

    <h3>Ultimo riego</h3>







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

    echo "<table style='border-collapse:collapse' border='1'><tr><td>ID</td><td>Nombre</td><td>fecha</td><td>sol o sombra</td><td>riego</td><td>cosecha</td><td>tamaño (m2)</td><td>Costo</td><td>ubicacion</td></tr>";
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
    <strong>Tec de Monterrey</strong>
  </footer>
  <script src="../javascript/viewHuertos.js"></script>
</body>

</html>