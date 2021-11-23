<?php
require_once("pooh.php");
 ?>
 <html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0 maximum-scale=1.0, minimum-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie-edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/principal.css">
    <link href="https://fonts.googleapis.com/css?family=Lilita+One" rel="stylesheet">
    <title>Ikura Sushi & Grill - Tabla colaboradores </title>
    <link rel="shortcut icon" href="image/ikura.ico">
  </head>
  <body class="body">
    <?php
    if(utf8_encode($_SESSION['tipo']) == "Administrador o dueño"){
    ?>
    <div class="container">
      <div class="text-center">
        <div class="table-responsive">
          <table border="2" class="table table-sm" style="background-color: #f1615f;">
            <thead>
              <tr>
                <th scope="col"  style="color:#000000; font-size:20px;"><center>Id</center></th>
                <th scope="col"  style="color:#000000; font-size:20px;"><center>Nombre</center></th>
                <th scope="col"  style="color:#000000; font-size:20px;" colspan="7"><center>Dirección</center></th>
                <th scope="col"  style="color:#000000; font-size:20px;"><center>Número/nombre del local</center></th>
                <th scope="col"  style="color:#000000; font-size:20px;"><center>Teléfono</center></th>
                <th scope="col"  style="color:#000000; font-size:20px;" colspan="4"><center>Operaciones</center></th>
              </tr>
            </thead>
            <tbody>
              <?php
                  $consulta = "SELECT s.Id_sucursales AS id, s.Nombre AS sucursal, d.calle AS calle, d.numero AS numero, d.colonia AS colonia, d.CP AS CP, p.nombre AS pais, e.nombre AS estado, d.ciudad AS ciudad, s.num_local AS local, s.telefono AS telefono FROM sucursales s
                  INNER JOIN sucursales_direcciones d ON s.Id_sucursales_direcciones=d.Id_sucursales_direcciones INNER JOIN paises p ON d.Id_paises=p.Id_paises INNER JOIN estados e ON d.Id_estados=e.Id_estados";
                  $result= mysqli_query($mimir,$consulta);
                  while ($mostrar=mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                      <th scope="row" style="color:#000000; font-size:20px;"><?php echo $mostrar['id']?></th>
                      <td style="color:#000000; font-size:20px;"><center><?php echo $mostrar['sucursal']?></center></td>
                      <td style="color:#000000; font-size:20px;"><center><?php echo $mostrar['calle']?></center></td>
                      <td style="color:#000000; font-size:20px;"><center><?php echo $mostrar['numero']?></center></td>
                      <td style="color:#000000; font-size:20px;"><center><?php echo $mostrar['colonia']?></center></td>
                      <td style="color:#000000; font-size:20px;"><center><?php echo $mostrar['CP']?></center></td>
                      <td style="color:#000000; font-size:20px;"><center><?php echo $mostrar['ciudad']?></center></td>
                      <td style="color:#000000; font-size:20px;"><center><?php echo $mostrar['estado']?></center></td>
                      <td style="color:#000000; font-size:20px;"><center><?php echo $mostrar['pais']?></center></td>
                      <td style="color:#000000; font-size:20px;"><center><?php echo $mostrar['local']?></center></td>
                      <td style="color:#000000; font-size:20px;"><center><?php echo $mostrar['telefono']?></center></td>
                      <td style="color:#ffffff; font-size:15px;"><center><a href="nueva_sucursal" style="color:#e9fe00;"><img src="flaticons/nueva.svg" style="width:32px; height:32px;"></a> <span class="note" style="color:#ffffff; background-color:#000000; font-size:20px;"> Nueva sucursal
                      </center></td>
                      <td style="color:#ffffff; font-size:15px;" name="edit"><center><a href="editar_sucursal?id=<?php echo $mostrar['id'];?>" style="color:#e9fe00;"><img src="flaticons/modify.svg" style="width:32px; height:32px;"></a>
                        <span class="note" style="color:#ffffff; background-color:#000000; font-size:20px;"> Editar sucursal</center></td>
                      <td style="color:#ffffff; font-size:15px;"><center><a href="borrar_sucursal?id=<?php echo $mostrar['id'];?>" style="color:#e9fe00;"><img src="flaticons/erase.svg" style="width:32px; height:32px;"></a> <span class="note" style="color:#ffffff; background-color:#000000; font-size:20px;"> Borrar
                      </span></center></td>
                      <td style="color:#ffffff; font-size:15px;"><center><a href="index" style="color:#e9fe00;"><img src="flaticons/return.svg" style="width:32px; height:32px;"></a><span class="note" style="color:#ffffff; background-color:#000000; font-size:20px;"> Regresar
                      </span></center></td>
                    </tr>
                    <?php
                  }
                    ?>
            </tbody>
          </table>
          <div class="btn-group">
            <center><a href="nueva_sucursal"><button type="submit" class="button mb-2"> <img src="flaticons/nueva.svg" style="width:40px; height:40px;"> Nueva sucursal</button></a></center>
            <center><a href="sucursal_direccion"><button type="submit" class="button mb-2"> <img src="flaticons/nueva_direccion.svg" style="width:40px; height:40px;"> Direcciones</button></a></center>
            <center><a href="index"><button type="submit" class="button mb-2"> <img src="flaticons/return.svg" style="width:40px; height:40px;"> Regresar</button></a></center>
          </div>
        </div>
      </div>
    </div>
    <?php
  }
  if($_SESSION['tipo'] == "Gerente" || $_SESSION['tipo'] == "Subgerente" || $_SESSION['tipo'] == "Mesero(a)" || $_SESSION['tipo'] == "Cajero(a)" || $_SESSION['tipo'] == "Repartidor"){
    ?>
    <div class="container">
      <div class="text-center">
        <div class="table-responsive">
          <table border="2" class="table table-sm" style="background-color: #f1615f;">
            <thead>
              <tr>
                <th scope="col"  style="color:#000000; font-size:20px;"><center>Id</center></th>
                <th scope="col"  style="color:#000000; font-size:20px;"><center>Nombre</center></th>
                <th scope="col"  style="color:#000000; font-size:20px;" colspan="7"><center>Dirección</center></th>
                <th scope="col"  style="color:#000000; font-size:20px;"><center>Número/nombre del local</center></th>
                <th scope="col"  style="color:#000000; font-size:20px;"><center>Teléfono</center></th>
                <th scope="col"  style="color:#000000; font-size:20px;"><center>Regresar</center></th>
              </tr>
            </thead>
            <tbody>
              <?php
                  $consulta = "SELECT s.Id_sucursales AS id, s.Nombre AS sucursal, s.Telefono AS telefono, s.num_local AS local, d.calle AS calle, d.numero AS numero, d.colonia AS colonia, d.CP AS CP, p.nombre AS pais, e.nombre AS estado, d.ciudad AS ciudad FROM sucursales s
                  INNER JOIN sucursales_direcciones d ON s.Id_sucursales_direcciones=d.Id_sucursales_direcciones INNER JOIN estados e ON d.Id_estados=e.Id_estados INNER JOIN paises p ON d.Id_paises=p.Id_paises";
                  $result= mysqli_query($mimir,$consulta);
                  while ($mostrar=mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                      <th scope="row" style="color:#000000; font-size:20px;"><?php echo $mostrar['id']?></th>
                      <td style="color:#000000; font-size:20px;"><center><?php echo $mostrar['sucursal']?></center></td>
                      <td style="color:#000000; font-size:20px;"><center><?php echo $mostrar['calle']?></center></td>
                      <td style="color:#000000; font-size:20px;"><center><?php echo $mostrar['numero']?></center></td>
                      <td style="color:#000000; font-size:20px;"><center><?php echo $mostrar['colonia']?></center></td>
                      <td style="color:#000000; font-size:20px;"><center><?php echo $mostrar['CP']?></center></td>
                      <td style="color:#000000; font-size:20px;"><center><?php echo $mostrar['ciudad']?></center></td>
                      <td style="color:#000000; font-size:20px;"><center><?php echo $mostrar['estado']?></center></td>
                      <td style="color:#000000; font-size:20px;"><center><?php echo $mostrar['pais']?></center></td>
                      <td style="color:#000000; font-size:20px;"><center><?php echo $mostrar['local']?></center></td>
                      <td style="color:#000000; font-size:20px;"><center><?php echo $mostrar['telefono']?></center></td>
                      <td style="color:#ffffff; font-size:15px;"><center><a href="index" style="color:#e9fe00;"><img src="flaticons/return.svg" style="width:32px; height:32px;"></a><span class="note" style="color:#ffffff; background-color:#000000; font-size:20px;"> Regresar
                      </span></center></td>
                    </tr>
                    <?php
                  }
                    ?>
            </tbody>
          </table>
          <center><a href="principal"><button type="submit" class="button mb-2"> <img src="flaticons/return.svg" style="width:40px; height:40px;"> Regresar</button></a></center>
        </div>
      </div>
    </div>
    <?php
  }
    ?>
  </body>
</html>
