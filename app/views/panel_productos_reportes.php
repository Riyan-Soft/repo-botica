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
                      <button class='btn btn-primary btnEditar'
                        data-id='".$fila['id_producto']."'
                        data-codigo='".$fila['codigo_producto']."'
                        data-nombre='".$fila['nombre']."'
                        data-cantidad='".$fila['cantidad']."'
                        data-precio='".$fila['precio']."'
                        data-descripcion='".$fila['descripcion']."'>Editar</button>
                      <button class='btn btn-danger btnEliminar'
                        data-id='".$fila['id_producto']."'>Eliminar</button>
                    </td>";
                    echo "</tr>";
                  }
                ?>
              </table>
            </div>
          </div>
        </section>
      </div>

        <!--------- modals ------------>
        <!-- Modal Eliminar Producto -->
<div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <form id="formEliminarProducto">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Eliminar Producto</h4>
        </div>
        <div class="modal-body">
          <input type="hidden" id="delete_id_producto" name="id_producto">
          <h4>¿Estás seguro que deseas <b>eliminar</b> este producto?</h4>
          <hr>
          <h4>Esta acción <b>no</b> es <b>reversible.</b></h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-danger" id="btnDeleteConfirm">Eliminar</button>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- Modal Editar Producto -->
<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <form id="formEditarProducto">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Editar Producto</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-left">
          <input type="hidden" id="edit_id_producto" name="id_producto">
          <div class="mb-3">
            <label for="edit_codigo" class="form-label">Código</label>
            <input type="text" class="form-control" id="edit_codigo" name="codigo_producto" required>
          </div>
          <div class="mb-3">
            <label for="edit_nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="edit_nombre" name="nombre" required>
          </div>
          <div class="mb-3">
            <label for="edit_cantidad" class="form-label">Cantidad</label>
            <input type="number" class="form-control" id="edit_cantidad" name="cantidad" required>
          </div>
          <div class="mb-3">
            <label for="edit_precio" class="form-label">Precio</label>
            <input type="number" class="form-control" id="edit_precio" name="precio" step="0.01" required>
          </div>
          <div class="mb-3">
            <label for="edit_descripcion" class="form-label">Descripción</label>
            <input type="text" class="form-control" id="edit_descripcion" name="descripcion" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-success" id="btnEditarProducto">Confirmar</button>
        </div>
      </div>
    </form>
  </div>
</div>


<script src="assets/js/reportes_productos.js"></script>
      <?php require_once("default/footer.php");?>
    </div>
    <?php require_once("default/links-script.php");?>
  </body>
</html>