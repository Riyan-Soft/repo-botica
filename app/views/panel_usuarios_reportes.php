<?php 
  session_start();
  if(isset($_SESSION["usuario_sesion"])){
    $nombre_usuario = $_SESSION["usuario_sesion"]["nombre"];
    $apellido_usuario = $_SESSION["usuario_sesion"]["apellido"];
    $privilegios_usuario = $_SESSION["usuario_sesion"]["id_rol"];
  }else{
    header("location: ../index.php");
    exit();
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Reporte de Usuarios</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"/>
    <?php include_once("default/links-head.php") ?>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <?php require_once("default/navigation.php") ?>
      <div class="content-wrapper">
        <section class="content-header">
          <h1> Reporte de Usuarios <small>Control panel</small> </h1>
          <ol class="breadcrumb">
            <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Reporte Usuarios</li>
          </ol>
        </section>
        <section class="content">
          <div class="row">
            <div class="col-lg-12 table-responsive">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Usuario</th>
                    <th>Rol</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  require_once("../models/Usuarios.php");
                  $objeto = new Usuarios();
                  $resultado = $objeto->listar_usuarios();
                  $i = 1;
                  while($fila = $resultado->fetch_assoc()){
                      echo "<tr>";
                      echo "<td>".$i++."</td>";
                      echo "<td>".$fila['nombre']."</td>";
                      echo "<td>".$fila['apellido']."</td>";
                      echo "<td>".$fila['usuario']."</td>";
                      echo "<td>".$fila['rol']."</td>";
                      echo "</tr>";
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </section>
      </div>
      <?php require_once("default/footer.php");?>
    </div>
    <!-- Todos los scripts -->
  <?php require_once("default/links-script.php"); ?>

  </body>
</html>