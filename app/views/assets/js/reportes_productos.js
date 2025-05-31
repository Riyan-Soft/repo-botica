//Almacenar en una variable 
const btnEditar = document.querySelectorAll(".btnEditar");
const btnEliminar = document.querySelectorAll(".btnEliminar");

// Editar producto
btnEditar.forEach(boton => {
    boton.addEventListener('click', function(){
        $('#modalEditar').modal('show');
        document.getElementById("edit_id_producto").value = boton.dataset.id;
        document.getElementById("edit_codigo").value = boton.dataset.codigo;
        document.getElementById("edit_nombre").value = boton.dataset.nombre;
        document.getElementById("edit_cantidad").value = boton.dataset.cantidad;
        document.getElementById("edit_precio").value = boton.dataset.precio;
        document.getElementById("edit_descripcion").value = boton.dataset.descripcion;
    });
});

// Eliminar producto
btnEliminar.forEach(boton => {
    boton.addEventListener('click', function(){
        $('#modalEliminar').modal('show');
        document.getElementById("delete_id_producto").value = boton.dataset.id;
    });
});

// Confirmar edición
document.getElementById("formEditarProducto").addEventListener('submit', function(e){
    e.preventDefault();
    $.ajax({
        url: '../controllers/ProductoEditarController.php',
        type: 'POST',
        data: $(this).serialize(),
        success: function(respuesta){
            if(respuesta === "yes"){
                alert("ACTUALIZACIÓN CORRECTA");
                window.location.reload();
            }else{
                alert("ACTUALIZACIÓN INCORRECTA");
            }
        }
    });
});

// Confirmar eliminación
document.getElementById("formEliminarProducto").addEventListener('submit', function(e){
    e.preventDefault();
    $.ajax({
        url: '../controllers/ProductoEliminarController.php',
        type: 'POST',
        data: $(this).serialize(),
        success: function(respuesta){
            if(respuesta === "yes"){
                alert("ELIMINACIÓN CORRECTA");
                window.location.reload();
            }else{
                alert("ELIMINACIÓN INCORRECTA");
            }
        }
    });
});

