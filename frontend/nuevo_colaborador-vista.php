<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0 maximum-scale=1.0, minimum-scale=1.0, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie-edge">
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <link rel="stylesheet" href="../../principal.css">
  <link href="https://fonts.googleapis.com/css?family=Lilita+One" rel="stylesheet">
  <title>Ikura Sushi & Grill - Registro de colaboradores</title>
  <link rel="shortcut icon" href="image/ikura.ico">
</head>
<body class="body">
  <?php
  require_once("headeradmin.php");
  ?>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="container text-center">
    <form action="insertar_nuevo_colaborador" method="post" class="form-body">
      <h1><p class="text-center" style="color:#ffffff;">Zona de registro de los colaboradores</p></h1>
      <div class="form-row align-items-center">
        <div class="row-auto">
          <div class="col-auto text-center">
            <center>
              <label for="nombres" style="color:#ffffff; font-size:25px;">Nombre(s): </label>
              <input type="text" name="nombres" id="nombres" style="background-color: #000000; border-color: #000000; color:#ffffff; font-size:25px;" maxlength="100" placeholder="Nombre(s)" class="form-control-text mb-2" required>
            </center>
          </div>
          <div class="col-auto text-center">
            <label for="primer_apellido" style="color:#ffffff; font-size:25px;">Apellido paterno: </label>
            <input type="text" name="primer_apellido" id="primer_apellido" style="background-color: #000000; border-color: #000000; color:#ffffff; font-size:25px;" maxlength="100" placeholder="Apellido paterno" class="form-control-text mb-2" required>
          </div>
          <div class="col-auto text-center">
            <label for="segundo_apellido" style="color:#ffffff; font-size:25px;">Apellido materno: </label>
            <input type="text" name="segundo_apellido" id="segundo_apellido" style="background-color: #000000; border-color: #000000; color:#ffffff; font-size:25px;" maxlength="100" placeholder="Apellido materno" class="form-control-text mb-2" required>
          </div>
          <div class="col-auto text-center">
            <label for="direccion" style="color:#ffffff; font-size:25px;">Direcci??n: </label>
            <input type="text" name="direccion" id="direccion" style="background-color: #000000; border-color: #000000; color:#ffffff; font-size:25px;" maxlength="100" placeholder="Direcci??n" class="form-control-text mb-2" required><span class="note" style="color:#ffffff; background-color:#000000; font-size:25px;"> (Incluye c??digo postal, n??mero, calle, colonia, ciudad, estado)</span>
          </div>
          <div class="col-auto text-center">
            <label for="edad" style="color:#ffffff; font-size:25px;">Edad: </label>
            <input type="number" name="edad" min=18 max=99 id="edad" style="background-color: #000000; border-color: #000000; color:#ffffff; font-size:25px;" class="form-control-number mb-2" required> <span class="note" style="color:#ffffff; background-color:#000000; font-size:25px;">El n??mero m??nimo es 18 y m??ximo 99</span>
          </div>
          <div class="col-auto text-center">
            <label for="tel" style="color:#ffffff; font-size:25px;">N??mero de contacto: </label>
            <input type="tel" name="tel" id="tel" style="background-color: #000000; border-color: #000000; color:#ffffff; font-size:25px;" class="form-control-number mb-2" required> <span class="note" style="color:#ffffff; background-color:#000000; font-size:25px;"> Puede ser fijo o celular</span>
          </div>
          <div class="col-auto text-center">
            <label for="exampleFormControlSelect2" style="color: #ffffff; font-size: 25px;">??Puesto que ejercer???: </label>
            <select class="form-control-select mb-2" name="tipo" style="background-color: #000000; border-color: #000000; color:#ffffff; font-size:25px;">
              <option value="Auxiliar de cocina">Auxiliar de cocina</option>
              <option value="Auxiliar de sushero">Auxiliar de sushero</option>
              <option value="Cajero(a)">Cajero(a)</option>
              <option value="Cocinero(a)">Cocinero(a)</option>
              <option value="Gerente">Gerente</option>
              <option value="Lavaloza">Lavaloza</option>
              <option value="Mesero(a)">Mesero(a)</option>
              <option value="Repartidor">Repartidor</option>
              <option value="Subgerente">Subgerente</option>
              <option value="Sushero(a)">Sushero(a)</option>
            </select>
          </div>
          <div class="col-auto text-center">
            <label for="exampleFormControlSelect2" style="color: #ffffff; font-size: 25px;">????ltimo grado de estudios?: </label>
            <select class="form-control-select mb-2" name="grado" style="background-color: #000000; border-color: #000000; color:#ffffff; font-size:25px;">
              <option value="Primaria">Primaria</option>
              <option value="Secundaria">Secundaria</option>
              <option value="Preparatoria">Preparatoria</option>
              <option value="Carrera t??cnica">Carrera t??cnica</option>
              <option value="Profesional">Profesional</option>
            </select>
          </div>
          <div class="col-auto text-center">
            <label for="expriencia" style="color:#ffffff; font-size:25px;">??Sigue estudiando?: </label>
            <select class="form-control-select mb-2" name="estudia" style="background-color: #000000; border-color: #000000; color:#ffffff; font-size:25px;">
              <option value="S??">S??</option>
              <option value="No">No</option>
            </select>
          </div>
          <div class="col-auto text-center">
            <label for="exampleFormControlSelect2" style="color: #ffffff; font-size: 25px;">??Sucursal que entrar???: </label>
            <select class="form-control mb-2" name="sucursales" style="background-color: #000000; color: #ffffff; border-color: #000000; font-size: 25px;">
              <?php
                  require_once("pooh.php");
                  $result = mysqli_query($mimir, "SELECT * FROM sucursales");
                  while ($fila = mysqli_fetch_array($result)){
                      echo "<option value=\"".$fila['Id_sucursales']."\">".$fila['Nombre']."</option>";
                  }
              ?>
            </select>
          </div>
          <div class="col-auto text-center">
            <label for="expriencia" style="color:#ffffff; font-size:25px;">Experiencia: </label>
            <textarea name="experiencia" rows="10" cols="50" maxlength="500" minlength="2" style="background-color: #000000; border-color: #000000; color:#ffffff; font-size:25px;" class="form-control mb-2"></textarea>
          </div>
          <div class="col-auto col-sm-6 offset-sm-6">
            <button type="submit" name="save_colaborador" class="button mb-2"> <img src="flaticons/save.svg" style="width:40px; height:40px;"> Guardar</button>
          </div>
        </div>
      </div>
    </form>
  </div>
<br>
<br>
<br>
<?php
require_once("footer.php");
?>
  <script src="../../js/jquery-3.3.1.slim.min.js"></script>
  <script src="../../js/popper.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
</body>
</html>
