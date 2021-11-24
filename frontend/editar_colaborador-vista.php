<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0 maximum-scale=1.0, minimum-scale=1.0, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie-edge">
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <link rel="stylesheet" href="../../principal.css">
  <link href="https://fonts.googleapis.com/css?family=Lilita+One" rel="stylesheet">
  <title>Ikura Sushi & Grill - Edita tu colaborador</title>
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
    <?php
    require_once("pooh.php");
    $id=$_REQUEST['editar'];
    $base = "SELECT c.Id_colaboradores AS ID, c.nombres AS nombres, c.primer_apellido AS first, c.segundo_apellido AS second, c.direccion AS direccion, c.edad AS edad, c.telefono AS telefono, c.puesto AS puesto, c.grado_escolar AS grado, c.estudia AS estudia, s.Nombre AS sucursal,
    c.experiencia AS experiencia  FROM colaboradores c INNER JOIN sucursales s ON c.Id_sucursales=s.Id_sucursales WHERE c.Id_colaboradores='$id'";
    $result= mysqli_query($mimir,$base);
    $mostrar=mysqli_fetch_assoc($result);
      ?>
    <form action="edita_colaborador?editar=<?php echo($mostrar['editar']);?>" method="POST" class="form-body">
      <h1><p class="text-center" style="color:#ffffff;">Modifica al colaborador</p></h1>
      <div class="form-row align-items-center">
        <div class="row-auto">
          <div class="col-auto text-center">
            <center>
              <label for="nombres" style="color:#ffffff; font-size:25px;">Nombre(s): </label>
              <input type="text" name="nombres" id="nombres" style="background-color: #000000; border-color: #000000; color:#ffffff; font-size:25px;" maxlength="100" placeholder="Nombre(s)" class="form-control-text mb-2" value ='<?= $mostrar['nombres'];?>' required>
            </center>
          </div>
          <div class="col-auto text-center">
            <label for="primer_apellido" style="color:#ffffff; font-size:25px;">Apellido paterno: </label>
            <input type="text" name="primer_apellido" id="primer_apellido" style="background-color: #000000; border-color: #000000; color:#ffffff; font-size:25px;" maxlength="100" placeholder="Apellido paterno" class="form-control-text mb-2" value ='<?= $mostrar['first'];?>' required>
          </div>
          <div class="col-auto text-center">
            <label for="segundo_apellido" style="color:#ffffff; font-size:25px;">Apellido materno: </label>
            <input type="text" name="segundo_apellido" id="segundo_apellido" style="background-color: #000000; border-color: #000000; color:#ffffff; font-size:25px;" maxlength="100" placeholder="Apellido materno" class="form-control-text mb-2" value ='<?= $mostrar['second'];?>' required>
          </div>
          <div class="col-auto text-center">
            <label for="direccion" style="color:#ffffff; font-size:25px;">Dirección: </label>
            <input type="text" name="direccion" id="direccion" style="background-color: #000000; border-color: #000000; color:#ffffff; font-size:25px;" maxlength="100" placeholder="Dirección" class="form-control-text mb-2" value ='<?= $mostrar['direccion'];?>' required>
            <span class="note" style="color:#ffffff; background-color:#000000; font-size:25px;"> (Incluye código postal, número, calle, colonia, ciudad, estado)</span>
          </div>
          <div class="col-auto text-center">
            <label for="edad" style="color:#ffffff; font-size:25px;">Edad: </label>
            <input type="number" name="edad" min=18 max=99 id="edad" style="background-color: #000000; border-color: #000000; color:#ffffff; font-size:25px;" class="form-control-number mb-2" value ='<?= $mostrar['edad'];?>' required> <span class="note" style="color:#ffffff; background-color:#000000; font-size:25px;">El número mínimo es 18 y máximo 99</span>
          </div>
          <div class="col-auto text-center">
            <label for="tel" style="color:#ffffff; font-size:25px;">Número de contacto: </label>
            <input type="tel" name="tel" id="tel" style="background-color: #000000; border-color: #000000; color:#ffffff; font-size:25px;" class="form-control-number mb-2" value ='<?= $mostrar['telefono'];?>' required> <span class="note" style="color:#ffffff; background-color:#000000; font-size:25px;"> Puede ser fijo o celular</span>
          </div>
          <div class="col-auto text-center">
            <label for="exampleFormControlSelect2" style="color: #ffffff; font-size: 25px;">¿Puesto que ejercerá?: </label>
            <select class="form-control-select mb-2" name="puesto" style="background-color: #000000; border-color: #000000; color:#ffffff; font-size:25px;">
              <option value="Auxiliar de cocina"<?php if($mostrar['puesto']=="Auxiliar de cocina") echo 'selected="selected"'?>>Auxiliar de cocina</option>
              <option value="Auxiliar de sushero">Auxiliar de sushero</option>
              <option value="Cajero(a)" <?php if($mostrar['puesto']=="Cajero(a)") echo 'selected="selected"'?>>Cajero(a)</option>
              <option value="Cocinero(a)"<?php if($mostrar['puesto']=="Cocinero(a)") echo 'selected="selected"'?>>Cocinero(a)</option>
              <option value="Gerente" <?php if($mostrar['puesto']=="Gerente") echo 'selected="selected"'?>>Gerente</option>
              <option value="Lavaloza" <?php if($mostrar['puesto']=="Lavaloza") echo 'selected="selected"'?>>Lavaloza</option>
              <option value="Mesero(a)" <?php if($mostrar['puesto']=="Mesero(a)") echo 'selected="selected"'?>>Mesero(a)</option>
              <option value="Repartidor" <?php if($mostrar['puesto']=="Repartidor") echo 'selected="selected"'?>>Repartidor</option>
              <option value="Subgerente" <?php if($mostrar['puesto']=="Subgerente") echo 'selected="selected"'?>>Subgerente</option>
              <option value="Sushero(a)" <?php if($mostrar['puesto']=="Sushero(a)") echo 'selected="selected"'?>>Sushero(a)</option>
            </select>
          </div>
          <div class="col-auto text-center">
            <label for="exampleFormControlSelect2" style="color: #ffffff; font-size: 25px;">¿Último grado de estudios?: </label>
            <select class="form-control-select mb-2" name="grado" style="background-color: #000000; border-color: #000000; color:#ffffff; font-size:25px;">
              <option value="Primaria" <?php if($mostrar['grado']=="Primaria") echo 'selected="selected"'?>>Primaria</option>
              <option value="Secundaria"<?php if($mostrar['grado']=="Secundaria") echo 'selected="selected"'?>>Secundaria</option>
              <option value="Preparatoria" <?php if($mostrar['grado']=="Preparatoria") echo 'selected="selected"'?>>Preparatoria</option>
              <option value="Carrera técnica" <?php if($mostrar['grado']=="Carrera técnica") echo 'selected="selected"'?>>Carrera técnica</option>
              <option value="Profesional" <?php if($mostrar['grado']=="Profesional") echo 'selected="selected"'?>>Profesional</option>
            </select>
          </div>
          <div class="col-auto text-center">
            <label for="expriencia" style="color:#ffffff; font-size:25px;">¿Sigue estudiando?: </label>
            <select class="form-control-select mb-2" name="estudia" style="background-color: #000000; border-color: #000000; color:#ffffff; font-size:25px;">
              <option value="Sí" <?php if($mostrar['estudia']=="Sí") echo 'selected="selected"'?>>Sí</option>
              <option value="No" <?php if($mostrar['estudia']=="No") echo 'selected="selected"'?>>No</option>
            </select>
          </div>
          <div class="col-auto text-center">
            <label for="exampleFormControlSelect2" style="color: #ffffff; font-size: 25px;">¿Sucursal que entrará?: </label>
            <select class="form-control mb-2" name="sucursales" style="background-color: #000000; color: #ffffff; border-color: #000000; font-size: 25px;">
              <?php
                  require_once("pooh.php");
                  $result = mysqli_query($mimir, "SELECT * FROM sucursales");
                  while ($fila = mysqli_fetch_assoc($result)){
                      echo "<option value=\"".$fila['Id_sucursales']."\">".$fila['Nombre']."</option>";
                  }
              ?>
            </select>
          </div>
          <div class="col-auto text-center">
            <label for="expriencia" style="color:#ffffff; font-size:25px;">Experiencia: </label>
            <textarea name="experiencia" rows="10" cols="50" maxlength="500" minlength="2" style="background-color: #000000; border-color: #000000; color:#ffffff; font-size:25px;" class="form-control mb-2"><?= $mostrar['experiencia'];?></textarea>
          </div>
          <div class="col-auto col-sm-6 offset-sm-6">
            <button type="submit" name="update_colaborador" id="update_colaborador" class="button mb-2"> <img src="flaticons/save.svg" style="width:40px; height:40px;"> Guardar</button>
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
