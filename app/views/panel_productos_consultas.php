<?php
session_start();
if (isset($_SESSION["usuario_sesion"])) {
  $nombre_usuario = $_SESSION["usuario_sesion"]["nombre"];
  $apellido_usuario = $_SESSION["usuario_sesion"]["apellido"];
  $privilegios_usuario = $_SESSION["usuario_sesion"]["id_rol"];
} else {
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
  <title>Reporte de Clientes</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
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
        <h1> Consultas producto <small>Control panel</small> </h1>
        <ol class="breadcrumb">
          <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Consultas Producto</li>
        </ol>
      </section>
      <!-- Main content -->
      <section class="content ">
        <div class="row">
          <div class="col-lg-12">
            <!--  INICIO CONSULTA DE CLIENTE -->
            <div class="form-group">
              <label for="codigo_producto">Código de producto</label><br>
              <input type="text" id="codigo_producto" maxlength="20">
            </div>
            <!--  FIN DE CONSULTA DE CLIENTE-->
          </div>
          <div class="col-lg-12">
            <table class="table table-hover table-responsive" style="background:#ffff">
              <tr>
                <th>#</th>
                <th>Código</th>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Descripción</th>
              </tr>
              <tbody id="contenedor_datos">
                <!-- aquí mostraremos los datos del producto -->
              </tbody>
            </table>
          </div>
        </div>
      </section>
    </div>
    <!-- Footer -->
    <?php require_once("default/footer.php"); ?>
  </div> <!-- FINAL DEL DIV DEL CONTENEDOR -->
  <!-- Todos los scripts -->
  <script src="assets/js/consulta_productos.js"></script>
  <?php require_once("default/links-script.php"); ?>
</body>

</html>