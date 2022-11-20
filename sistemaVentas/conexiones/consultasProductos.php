<?php
    require_once("conexionBD.php");

    //-----------Lista de querys---------------------
    //Listar productos
    $listaProductos = "SELECT * FROM producto
                      WHERE estatus = 1";

    //Recuperar la ejecución del resultado acorde al query
    $resultado = $conexion->query($listaProductos);

    
?>