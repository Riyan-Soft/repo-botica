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

  // Conexión a la base de datos
  require_once("../models/conexion.php");
  $db = new Conexion();
  $db->conectar();

  // Consulta para contar clientes
  $sql = "SELECT COUNT(*) AS total_clientes FROM tb_cliente";
  $result = $db->getEjecutionQuery($sql);
  $row = $result->fetch_assoc();
  $total_clientes = $row['total_clientes'];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>AdminLTE 2 | Dashboard</title>
    <link rel="icon" type="image/png" href="../../web/resources/favicon.png">
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
                  <h4>Clientes Totales &nbsp;&nbsp; 
                    <i class="fa fa-arrow-circle-down"></i>
                  </h4>
                </div>
                <h5>
                  <div style="text-align: center;">
                  <p>Total de clientes en la base de datos: 
                  </p>
                  <?php echo "<h1>".$total_clientes."</h1>"?>
                  <p>(personas)</p>
                  </div>
                </h5>
              </div>
            </div>
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-special-color">
                <div class="small-box-footer">
                  <h4>Ventas del Día</h4>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <h5>
                  <?php echo $total_clientes; ?>
                  <i class="fa fa-arrow-circle-right"></i>
                </h5>
              </div>
            </div>
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-special-color">
                <div class="small-box-footer">
                  <h4>Promedio de venta diaria</h4>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                </div>
                <h5>
                  <?php echo $total_clientes; ?>
                  <i class="fa fa-arrow-circle-right"></i>
                </h5>
              </div>
            </div>
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-special-color">
                <div class="small-box-footer">
                  <h4>Productos más vendidos</h4>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <h5>
                  <?php echo $total_clientes; ?>
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
