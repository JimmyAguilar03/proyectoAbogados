<?php
    include_once("conexion.php");

    $matricula = $_GET['mat'];
    echo "Eliminar alumno " . $matricula ;

    $queryEliminarAlumno = "DELETE FROM alumno WHERE matricula = " .$matricula;

    if(mysqli_query($conexion,$queryEliminarAlumno))
    {
        echo "Alumno eliminado <br>";
    }
    else{
        echo "Error: " . $queryEliminarAlumno ."<br>". mysqli_error($conexion);
    }

    echo "<a href='listaAlumnos.php'>Volver</a>";

?>