<html lang="es">
<head>
  <meta charset="utf8">
  <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0 maximum-scale=1.0, minimum-scale=1.0, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie-edge">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/index.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <title>Restaurantware - Ikura Sushi & Grill</title>
  <link rel="shortcut icon" href="image/restaurantware1.png">
  <script type="text/javascript">
  window.onload = function() {
    var myInput = document.getElementById('usuarios');
    myInput.onpaste = function(e) {
      e.preventDefault();
      alert("Acción ilegal");
    }
    myInput.oncopy = function(e) {
      e.preventDefault();
      alert("Por favor respétame");
    }
    var clave = document.getElementById('clave');
    clave.onpaste = function(e) {
      e.preventDefault();
      alert("Acción ilegal");
    }
    clave.oncopy = function(e) {
      e.preventDefault();
      alert("No copies");
    }
    var paso = document.getElementById('clave2');
    paso.onpaste = function(e) {
      e.preventDefault();
      alert("Acción ilegal");
    }
    paso.oncopy = function(e) {
      e.preventDefault();
      alert("No copiar");
    }

  }

  </script>
</head>
<body class="body">
  <header>
    <nav class="navbar navbar-expand-lg navbar-light body">
      <center>
        <a class="navbar-brand " href="#">
          <?php echo("Bienvenid@ a ");?> <img src="image/restaurantware1.png" style="width:6rem; height:6rem;">
        </a>
      </center>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse abajo" id="navbarSupportedContent">
        <center>
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0 abajo">
            <li class="nav-item active">
              <a class="nav-link" href="login"><img src="image/ikura.png" style="width:6rem; height:6rem;"><p style="color:#3a3a3c; font-size:20px;">Inicio</p> <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </center>
      </div>

      <div class="collapse navbar-collapse abajo" id="navbarSupportedContent">
        <center>
          <ul class="navbar-nav mr-auto abajo">
            <li class="nav-item">
              <a href="login" class="nav-link"><img src="flaticons/login.svg" style="width:3rem; height:3rem;"><p style="color:#3a3a3c; font-size:20px;">Inicia sesión</p></a>
            </li>
            <li class="nav-item">
              <a href="register" class="nav-link"><img src="flaticons/register.svg" style="width:3rem; height:3rem;"><p style="color:#3a3a3c; font-size:20px;">Regístrate</p></a>
            </li>
          </ul>
        </center>
      </div>
    </nav>
  </header>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-sm-6 offset-sm-3 text-center">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form-body">
          <h1>
            <p class="text-center" style="color:#ff0000;">Por favor regístrate para entrar a <img src="image/ikura.png" style="width:60px; height:60px;"></p>
          </h1>
          <div class="form-group">
            <label for="user" style="color: #000000; font-size: 20px;" class="col-sm-4 col-form-label">Usuario: </label>
            <input type="text" name="usuarios" id="usuarios" class="form-control-text form" placeholder="Nombre de usuario" required>
          </div>
          <div class="form-group">
            <label for="pass" style="color: #000000; font-size: 20px;" class="col-sm-4 col-form-label">Contraseña: </label>
            <input type="password" name="clave" id="clave" class="form-control-password form" placeholder="Contraseña">
          </div>
          <div class="form-group">
            <label for="pass" style="color: #000000; font-size: 20px;"class="col-sm-3 col-form">Confirmar contraseña: </label>
            <input type="password" name="clave2" id="clave2" class="form-control-password form" placeholder="Confirmar contraseña">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect2" style="color: #000000; font-size: 20px;" class="col-sm-4 col-form-label">¿A qué sucursal perteneces?: </label>
            <select name="sucursales" class="form-control-select" style="background-color: #000000;color: #ffffff;border-color: #000000;">
              <?php
                  require_once("pooh.php");
                  $result = mysqli_query($mimir, "SELECT * FROM sucursales");
                  while ($fila = mysqli_fetch_array($result)){
                      echo "<option value=\"".$fila['Id_sucursales']."\">".$fila['Nombre']."</option>";
                  }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect2" style="color: #000000; font-size: 20px;" class="col-sm-4 col-form-label">¿Cuál es el puesto que usted en Ikura ejerce?: </label>
            <select class="form-control-select" name="tipo" style="background-color: #000000; color: #ffffff; border-color: #000000;">
              <option value="Administrador o dueño">Administrador o dueño</option>
              <option value="Gerente">Gerente</option>
              <option value="Subgerente">Subgerente</option>
              <option value="Cajero(a)">Cajero(a)</option>
              <option value="Mesero(a)">Mesero(a)</option>
              <option value="Cocinero(a)">Cocinero(a)</option>
              <option value="Auxiliar de cocina">Auxiliar de cocina</option>
              <option value="Sushero(a)">Sushero(a)</option>
              <option value="Auxiliar de sushero">Auxiliar de sushero</option>
              <option value="Lavaloza">Lavaloza</option>
              <option value="Repartidor">Repartidor</option>
            </select>
          </div>
          <?php if(!empty($error)): ?>
            <div class="mensaje">
              <?php echo $error; ?>
            </div>
          <?php endif; ?>
          <div class="form-group">
            <button type="submit" class="button"><img src="flaticons/save.svg" style="width:50; height:50;" class="d-inline-block align-top"></button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="js/jquery-3.3.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
