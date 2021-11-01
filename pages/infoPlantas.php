<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Info Plantas</title>
  <meta charset="utf-8" />
</head>
<link rel="stylesheet" type="text/css" href="../styles/index.css" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<style>
  h3,
  h1,
  h2,
  dt,
  dd,
  p {
    height: 100%;
    font-family: "Inconsolata", sans-serif;
    text-align: center;
  }

  ul,
  li {
    list-style: none;
  }

  .logo {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 30%;
  }

  #cssul {
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
    <h2>¡Descubre las Plantas!</h2>

    <p>Tu huerto puede tener una variacion de plantas, no solo te conformes con una! </p>

    <h3 class="w3-center w3-padding-50"><span class="w3-tag w3-wide">Existen diferentes tipos de planta dependiendo de tus gustos.</span></h3>

    <table id='customers' border="1">
      <tr>
        <th>Crucíferas</th>
        <th>Solanáceas</th>
        <th>Cucurbitáceas</th>
        <th>Compuestas</th>

      </tr>
      <tr>
        <td>
          <ul>
            <li>Repollo</li>
            <li>Brocoli</li>
            <li>Coliflor</li>
            <li>Rebano</li>
            <li>Col</li>
          </ul>
        </td>
        <td>
          <ul>
            <li>Tomate</li>
            <li>Pimiento</li>
            <li>Berenjena</li>
            <li>Tomate</li>
            <li>Batata</li>
          </ul>
        </td>
        <td>
          <ul>
            <li>Calabacín</li>
            <li>Calabaza</li>
            <li>Melón</li>
            <li>Pepino</li>
          </ul>
        </td>
        <td>
          <ul>
            <li>Alcachofa</li>
            <li>Endivia</li>
            <li>Escarola</li>
            <li>Lechuga</li>
          </ul>
        </td>
      </tr>
    </table>
    <hr size="2px" color="black" />
    <h3 class="w3-center w3-padding-50"><span class="w3-tag w3-wide">¡Los beneficios de tener tus plantas!</span></h3>
    <ul id='cssul'>
      <li>Producción local.</li>
      <li> Educativo.</li>
      <li>Fomenta el Contacto con el aire libre.</li>
      <li>Reduce el estrés.</li>
      <li>Consumir alimentos sanos, frescos y sin pesticidas.</li>
      <li>Ecológico.</li>
    </ul>

    <p> Las plantas son lo que le dan vida al huerto y a tu hogar!</p>
    <hr size="2px" color="black" />
    <h3 class="w3-center w3-padding-50"><span class="w3-tag w3-wide">¡Inicia con los beneficios!</span></h3>

    <p> Si todavia no te convences de que tipo de planta escoger, recuerda esto:</p>

    <dl>
      <b>
        <dt>Plantas aromáticas</dt>
      </b>
      <dd>Las plantas aromáticas son fáciles de cultivar (incluso en macetas), ocupan poco espacio y son son muy útiles en la cocina.</dd>
      <b>
        <dt>Flores en el huerto</dt>
      </b>
      <dd>Las flores en el huerto darán un toque de color al espacio.</dd>
      <b>
        <dt>FACIL DE HACER</dt>
      </b>
      <dd>Cualquiera puede comenzar su huerto debido a que no requiere un gran espacio</dd>
      <b>
        <dt>Abono y tierra</dt>
      </b>
      <dd>Son los unicos nutrientes que tu planta necesita, por lo cual no es un trabajo pesado!</dd>
      <b>
        <dt>Plantulas o semillas</dt>
      </b>
      <dd>Puedes elegir entre estas opciones para plantar, asi que hay diferentes procedimientos!</dd>
    </dl>
  </main>
  <br />
  <footer>
    <strong style="font-family: 'Inconsolata', sans-serif;">Tecnológico de Monterrey - 2021</strong>
  </footer>
  <script src="../javascript/infoPlantas.js"></script>
</body>

</html>