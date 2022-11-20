<?php
    require_once("conexion.php");
    //Variables para recuperar los datos del formulario de editar
    $valorMat = $_POST['mat'];
    $valorNombre = $_POST['nombre'];
    $valorEdad = $_POST['edad'];
    $valorCarrera = $_POST['carrera'];

    //Consulta para actualizar
    $queryUpdateAlumno = "UPDATE alumno 
                          SET nombre = '".$valorNombre."', 
                          edad = ".$valorEdad.",
                          carrera = '".$valorCarrera."' 
                          WHERE matricula = ".$valorMat;
    echo "Query: ".$queryUpdateAlumno;

    if(mysqli_query($conexion,$queryUpdateAlumno))
    {
        echo "Registro actualizado correctamente <br>";
    }
    else{
        echo "Error: " . $queryUpdateAlumno ."<br>". mysqli_error($conexion);
    }

    echo "<a href='listaAlumnos.php'>Volver</a>";

?>