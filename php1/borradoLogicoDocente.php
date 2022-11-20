<?php
    $id = $_GET['id'];
    //echo "Id del docente: ".$id;

    require_once("consultasDocentes.php");

    $queryBLogicoDocente = "UPDATE docente
                            SET estatus = 0
                            WHERE idDocente = ".$id;

    if(mysqli_query($conexion,$queryBLogicoDocente))
    {
        echo "Borrado correcto <br>";
    }
    else{
        echo "Error: " . $queryBLogicoDocente ."<br>". mysqli_error($conexion);
    }

    echo "<a href='listaDocentes.php'>Volver</a>";
?>