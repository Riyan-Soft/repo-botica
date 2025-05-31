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
    <title>Registrar Productos</title>
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
          <h1> Registrar Productos <small>Control panel</small> </h1>
          <ol class="breadcrumb">
            <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Registrar Producto</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-lg-3">
              <!--  INICIO DE FORMULARIO -->
              <form action="../controllers/ProductoRegistrarController.php" method="post"> 
                <div class="mb-3">
                  <label for="nombre" class="form-label">Nombre</label>
                  <input type="text" class="form-control" id="nombre" name="producto_nombre" required>
                </div>
                <div class="mb-3">
                  <label for="cantidad" class="form-label">Cantidad</label>
                  <input type="number" class="form-control" id="cantidad" name="producto_cantidad" min="1" required>
                </div>
                <div class="mb-3">
                  <label for="precio" class="form-label">Precio</label>
                  <input type="number" class="form-control" id="precio" name="producto_precio" step="0.01" min="0" required>
                </div>
                <div class="mb-4 mt-3">
                  <label for="descripcion" class="form-label">Descripción</label>
                  <input type="text" class="form-control" id="descripcion" name="producto_descripcion" required>
                </div>
                <button type="submit" class="btn btn-primary">Registrar</button>
              </form>
              <!--  FIN DE FORMULARIO-->
            </div>
          </div>
        </section> 
        <!--  FIN -->
      </div>
      <!-- Footer -->
      <?php require_once("default/footer.php");?>
    </div>  <!-- FINAL DEL DIV DEL CONTENEDOR -->

    <!-- Todos los scripts -->
    <?php require_once("default/links-script.php");?>
  </body>
</html>