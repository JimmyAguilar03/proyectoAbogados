<?php
    require_once("conexion.php");

    //-----------Lista de querys---------------------
    //Listar alumnos
    $listaAlumnos = "SELECT * FROM alumno";

    //Recuperar la ejecución del resultado acorde al query
    $resultado = $conexion->query($listaAlumnos);

    
?>