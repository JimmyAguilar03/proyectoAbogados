<?php
    $host = "192.168.64.2";

    $user ="root";

    $pass= "";

    $db= "Starbucks";

    //Abrir una conexion para la base de datos 
    $conexion= new mysqli($host, $user, $pass, $db);

    $queryListaProveedores = "SELECT * FROM proveedor";
    //Ejecutamos la busqueda y la guardamos como un objeto 
    $listaProveedores= $conexion-> query($queryListaProveedores);
?>