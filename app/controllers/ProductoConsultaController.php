<?php require_once("../models/Productos.php");
$objeto = new Productos();
//Almacenamos los datos del formulario del panel_productos_registrar.php dentro de una variable
if(isset($_GET['dni_c'])){
    $variable_dni = $_GET['dni_c']; //almacenamos en una variable el dato GET
    //Almacenamos la funcion en la variable $resultado_lista
    $resultado_lista = $objeto->consultar_dni_cliente($variable_dni); 

    //Almacenamos dentro de un Array
    $datos_cliente = [];

    // hacemos un bucle para consultar a los clientes
    // $fila es la variable que almacenaremos todos los datos del cliente
    while($fila = $resultado_lista->fetch_array(MYSQLI_ASSOC)){
        // print_r($fila);
        $datos_cliente[] = $fila;
    }

    //Creamos el formato JSON
    header('Content-Type: application/json');
    echo json_encode($datos_cliente);
}


?>