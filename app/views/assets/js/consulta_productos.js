const variable_dni = document.getElementById("dni_cliente");
variable_dni.addEventListener("keyup", function (){
    //Validar que el input acepte solo números
    this.value = this.value.replace(/[^0-9]/g, '');
    if(this.value.length === 9){
        alert("El DNI solo debe contar con 8 digitos")
    }else{
        console.log("El número es: " + this.value);
        // ******** INICIO DE AJAX ******** 
        $.ajax({
            url: "../controllers/ProductoConsultaController.php",
            type: "GET",
            data: {
                dni_c: this.value
            },
            success:function(respuesta){
                console.log(respuesta);
                const variable_tabla = document.getElementById("contenedor_datos");
                variable_tabla.innerHTML = `
                                            <tr>
                                                <td>#</td>
                                                <td>${respuesta[0].dni}</td>
                                                <td>${respuesta[0].nombre}</td>
                                                <td>${respuesta[0].apellido}</td>
                                                <td>${respuesta[0].correo}</td>
                                                <td>${respuesta[0].estado}</td>
                                            </tr>
                                            `
            }
        })
        // ******** FIN  DE AJAX ******** 
    }

    
});

const inputCodigo = document.getElementById("codigo_producto");
inputCodigo.addEventListener("keyup", function (){
    // Puedes validar el input si lo deseas
    const codigo = this.value.trim();
    if(codigo.length > 0){
        // AJAX para buscar producto por código
        $.ajax({
            url: "../controllers/ProductoConsultaController.php",
            type: "GET",
            data: {
                codigo: codigo
            },
            success:function(respuesta){
                const variable_tabla = document.getElementById("contenedor_datos");
                if(respuesta.length > 0){
                    variable_tabla.innerHTML = `
                        <tr>
                            <td>${respuesta[0].id_producto}</td>
                            <td>${respuesta[0].codigo_producto}</td>
                            <td>${respuesta[0].nombre}</td>
                            <td>${respuesta[0].cantidad}</td>
                            <td>${respuesta[0].precio}</td>
                            <td>${respuesta[0].descripcion}</td>
                        </tr>
                    `;
                }else{
                    variable_tabla.innerHTML = `<tr><td colspan="6">No se encontró el producto</td></tr>`;
                }
            }
        });
    }else{
        document.getElementById("contenedor_datos").innerHTML = "";
    }
});
