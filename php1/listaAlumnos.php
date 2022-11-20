<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Alumnos</title>
</head>
<body>
    <div class="container">
        <h1>Lista de alumnos</h1>
        <a class="btn btn-success" href="nuevoAlumno.php" style="float: right";>
            + Agregar
        </a>

        <?php
            include_once("consultasAlumnos.php");
            
        ?>

        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Matrícula</th>
                <th scope="col">Nombre</th>
                <th scope="col">Edad</th>
                <th scope="col">Carrera</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while($row = $resultado->fetch_assoc())
                    {
                ?>
                        <tr>
                            <td>
                                <?php echo $row['matricula'];?>
                            </td>
                            <td>
                                <?php echo $row['nombre'];?>
                            </td>
                            <td>
                                <?php echo $row['edad'];?>
                            </td>
                            <td>
                                <?php echo $row['carrera'];?>
                            </td>
                            <td>
                                <a href="editarAlumno.php?mat=<?php echo $row['matricula'];?>">Editar</a>
                            </td>
                            <td>
                                <a href="eliminarAlumno.php?mat=<?php echo $row['matricula'];?>">Borrado físico</a>
                            </td>
                        </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>    
</body>
</html>