<?php
    require_once("conexion.php");

    $valorNombre = $_POST['nombre'];
    $valorMatricula = $_POST['matricula'];
    $valorEdad = $_POST['edad'];
    $valorCarrera = $_POST['carrera'];

   // echo $valorMatricula.$valorNombre.$valorEdad.$valorCarrera;
    
    //Consulta para guardar el alumno
    $queryGuardarAlumno = 'INSERT INTO alumno (matricula, nombre, edad, carrera) 
        VALUES ("'.$valorMatricula.'" , "'.$valorNombre.'", '.$valorEdad.', "'.$valorCarrera.'")';

    if(mysqli_query($conexion,$queryGuardarAlumno))
    {
        echo "Registro correcto <br>";
    }
    else{
        echo "Error: " . $queryGuardarAlumno ."<br>". mysqli_error($conexion);
    }

    echo "<a href='listaAlumnos.php'>Volver</a>";
?>