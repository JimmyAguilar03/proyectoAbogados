<?php
    include_once("datosConexion.php");

    $queryListaProveedores = "SELECT * FROM proveedor";
    //Ejecutamos la busqueda y la guardamos como un objeto 
    $listaProveedores= $conexion-> query($queryListaProveedores);
?>
