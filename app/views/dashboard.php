<?php 
  session_start();
  if(isset($_SESSION["usuario_sesion"])){
    $nombre_usuario = $_SESSION["usuario_sesion"]["nombre"];
    $apellido_usuario = $_SESSION["usuario_sesion"]["apellido"];
    $privilegios_usuario = $_SESSION["usuario_sesion"]["id_rol"];
  }else{
    header("location: ../index.php");
    // echo "No existe la sessión";
    // exit();
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"/>
    <!-- Incluir una vez todos los links -->
    <?php include_once("default/links-head.php") ?>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper"> <!-- INICIO DEL DIV DEL CONTENEDOR -->
      <!-- Cabezera y Nav del lado izquierdo -->
      <?php require_once("default/navigation.php") ?>
      <!-- Content Wrapper - Contenido Principal-->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1> Dashboard <small>Control panel</small> </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-special-color">
                <div class="small-box-footer">
                  <h4>Usuarios en la base de datos:</h4>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <h5 class="h5-edit">Usuarios registrados
                  <i class="fa fa-arrow-circle-right"></i>
                </h5>
              </div>
            </div>
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-special-color">
                <div class="small-box-footer">
                  <h4>Usuarios en la base de datos:</h4>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <h5 class="h5-edit">Usuarios registrados
                  <i class="fa fa-arrow-circle-right"></i>
                </h5>
              </div>
            </div>
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-special-color">
                <div class="small-box-footer">
                  <h4>Usuarios en la base de datos:</h4>
                <h4>HOLA ESTE ES UN MENSAJE DE PRUEBA</h4>


                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                </div>
                <h5 class="h5-edit">Usuarios registrados
                  <i class="fa fa-arrow-circle-right"></i>
                </h5>
              </div>
            </div>
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-special-color">
                <div class="small-box-footer">
                  <h4>Usuarios en la base de datos:</h4>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <h5 class="h5-edit">Usuarios registrados
                  <i class="fa fa-arrow-circle-right"></i>
                </h5>
              </div>
            </div>
          </div>
          <div class="row">
          </div>
        </section>
      </div>
      <!-- Footer -->
      <?php require_once("default/footer.php");?>
    </div>  <!-- FINAL DEL DIV DEL CONTENEDOR -->
        <!-- Todos los scripts -->
      <?php require_once("default/links-script.php");?>
  </body>
</html>
