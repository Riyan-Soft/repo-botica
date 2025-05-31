<!-- im the best porgrammer -->
<?php 
  session_start();
  if(isset($_SESSION["usuario_sesion"])){
    $nombre_usuario = $_SESSION["usuario_sesion"]["nombre"];
    $apellido_usuario = $_SESSION["usuario_sesion"]["apellido"];
    $privilegios_usuario = $_SESSION["usuario_sesion"]["id_rol"];
  }else{
    header("location: ../index.php");
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Reporte de Productos</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"/>
    <?php include_once("default/links-head.php") ?>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <?php require_once("default/navigation.php") ?>
      <div class="content-wrapper">
        <section class="content-header">
          <h1> Reporte de productos <small>Control panel</small> </h1>
          <ol class="breadcrumb">
            <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Reporte Productos</li>
          </ol>
        </section>
        <section class="content">
          <div class="row">
            <div class="col-lg-12">
              <table class="table table-bordered table-striped">
                <tr>
                  <th>ID</th>
                  <th>Codigo</th>
                  <th>Nombre</th>
                  <th>Cantidad</th>
                  <th>Precio</th>
                  <th>Descripción</th>
                  <th>Acciones</th>
                </tr>
                <?php 
                  require_once("../models/Productos.php");    
                  $objeto = new Productos();
                  $resultado_lista = $objeto->reportes_productos();
                  while($fila = $resultado_lista->fetch_array(MYSQLI_ASSOC)){
                    echo "<tr>";
                    echo "<td>".$fila['id_producto']."</td>";
                    echo "<td>".$fila['codigo_producto']."</td>";
                    echo "<td>".$fila['nombre']."</td>";
                    echo "<td>".$fila['cantidad']."</td>";
                    echo "<td>".$fila['precio']."</td>";
                    echo "<td>".$fila['descripcion']."</td>";
                    echo "<td>
                      <button class='btn btn-primary'>Editar</button>
                      <button class='btn btn-danger'>Eliminar</button>
                    </td>";
                    echo "</tr>";
                  }
                ?>
              </table>
            </div>
          </div>
        </section>
      </div>
      <?php require_once("default/footer.php");?>
    </div>
    <?php require_once("default/links-script.php");?>
  </body>
</html>