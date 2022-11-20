<?php
    require_once("conexion.php");

    //-----------Lista de querys---------------------
    //Listar docentes
    $listaDocentes = "SELECT D.idDocente, D.nombre, D.estatus, 
                      C.nombre as carrera 
                      FROM docente as D
                      JOIN catCarreras as C
                      ON D.idCarrera = C.idCarrera
                      WHERE D.estatus = 1";

    //Recuperar la ejecución del resultado acorde al query
    $resultado = $conexion->query($listaDocentes);

    
?>