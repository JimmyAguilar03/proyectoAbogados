<?php
    include_once("datosConexion.php");

    $queryListaProductos = "SELECT * FROM productos";
    //Ejecutamos la busqueda y la guardamos como un objeto 
    $listaNiveles= $conexion-> query($queryListaNiveles);
?>