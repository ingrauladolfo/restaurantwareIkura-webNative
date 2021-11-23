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
    var myInput = document.getElementById('user');
    myInput.onpaste = function(e) {
      e.preventDefault();
      alert("Acción ilegal");
    }
    myInput.oncopy = function(e) {
      e.preventDefault();
      alert("Por favor no copies");
    }
    var myInput = document.getElementById('pass');
    myInput.onpaste = function(e) {
      e.preventDefault();
      alert("Acción ilegal");
    }
    myInput.oncopy = function(e) {
      e.preventDefault();
      alert("No copies de favor");
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
              <a class="nav-link" href="login"><img src="image/ikura.png" style="width:6rem; height:6rem;"></a>
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
  <div class="container">
    <div class="row">
      <div class="col-sm-6 offset-sm-3 text-center">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form-body">
          <h1>
            <p class="text-center" style="color:#ff0000;">Por favor inicia sesión para entrar a <img src="image/ikura.png" style="width:6rem; height:6rem;"></p>
          </h1>
          <div class="form-group">
            <label for="user" style="color: #000000; font-size: 20px;" class="col-sm-4 col-form-label">Usuario</label>
            <input type="text" name="usuarios" id="user" class="form-control-text form">
          </div>
          <div class="form-group">
            <label for="pass" style="color: #000000; font-size: 20px;" class="col-sm-4 col-form-label">Contraseña</label>
            <input type="password" name="clave" id="pass" class="form-control-password form">
          </div>
          <?php if(!empty($error)){ ?>
            <div class="mensaje">
              <?php echo $error; ?>
            </div>
          <?php } ?>
          <div class="form-group">
            <button type="submit" class="button"><img src="flaticons/enter.svg" style="width:50; height:50;"></button>
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
