<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Index</title>
    <meta charset="utf-8" />
  </head>
  <link rel="stylesheet" type="text/css" href="../styles/login.css" />
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
            <input type="email" required>
            <span></span>
            <label>Correo</label>
          </div>
          <div class="input_texto">
            <input type="password" required>
            <span></span>
            <label>Password</label>
          </div>
          <div class="pwd">Olvidé mi contraseña</div>
          <input type="submit" value="Iniciar sesión">
          <div class="registro">
            No tienes cuenta? <a href="#">Regístrate</a>
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