<?php
    include_once("datosConexion.php");

    $queryListaEmpleados = "SELECT * FROM Empleado";
    //Ejecutamos la busqueda y la guardamos como un objeto 
    $queryEmpleados= $conexion-> query($queryListaEmpleados);
?>