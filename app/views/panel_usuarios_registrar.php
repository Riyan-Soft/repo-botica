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
        <h1> Registrar Usuarios <small>Control panel</small> </h1>
        <ol class="breadcrumb">
          <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Registrar Usuarios</li>
        </ol>
      </section>
      <!-- Main content -->
      <section class="content ">
        <div class="row">
          <div class="col-lg-12 table-responsive">
            <!--  INICIO -->
<form action="../controllers/UsuarioRegistrarController.php" method="post" class="mb-4">
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" required>
  </div>
  <div class="form-group">
    <label for="apellido">Apellido</label>
    <input type="text" class="form-control" id="apellido" name="apellido" required>
  </div>
  <div class="form-group">
    <label for="usuario">Usuario</label>
    <input type="text" class="form-control" id="usuario" name="usuario" required>
  </div>
  <div class="form-group">
    <label for="password">Contraseña</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
  <div class="form-group">
    <label for="rol">Rol</label>
    <select class="form-control" id="rol" name="rol" required>
      <option value="">Seleccione un rol</option>
      <option value="1">Administrador</option>
      <option value="2">Cajero</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Registrar Usuario</button>
</form>
<!-- FIN -->
          </div>
        </div>
      </section>
    </div>
    <!-- Footer -->
    <?php require_once("default/footer.php"); ?>
  </div> <!-- FINAL DEL DIV DEL CONTENEDOR -->

  <!-- Todos los scripts -->
  <?php require_once("default/links-script.php"); ?>
</body>

</html>