<?php
    include_once("datosConexion.php");

    $queryListaProductos= "SELECT * FROM producto";
    //Ejecutamos la busqueda y la guardamos como un objeto 
    $listaProductos= $conexion-> query($queryListaProductos);
?>