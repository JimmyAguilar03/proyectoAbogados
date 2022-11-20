<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Editar alumno</title>
</head>
<body>
    <div class="container">
        <?php
            require_once("conexion.php");
            $matriculaAlumno = $_GET['mat'];
            $consultaRegistroAlumno = "SELECT * FROM alumno WHERE matricula =".$matriculaAlumno;
            //echo "consulta: ".$consultaRegistroAlumno;
            //Buscamos el registro mediante el query anterior
            $resultado = $conexion->query($consultaRegistroAlumno);
            //Imprimimos los valores donde corresponde
            while($row = $resultado->fetch_assoc())
            {
        ?>
                <h1>Editar alumno <?php echo $matriculaAlumno;?></h1>

                <form action="actualizarAlumno.php" method="post">

                    <label for="matricula">Matrícula</label>
                    <input class="form-control" disabled type="text" name="matricula" id="matricula" value=<?php echo $matriculaAlumno;?>>

                    <label for="nombre">Nombre del alumno</label>
                    <input class="form-control" type="text" name="nombre" id="nombre" value=<?php echo $row['nombre'];?>>

                    <label for="edad">Edad</label>
                    <input class="form-control" type="number" name="edad" id="edad" value=<?php echo $row['edad'];?>>

                    <label for="carrera">Carrera</label>
                    <input class="form-control" type="text" name="carrera" id="carrera" value=<?php echo $row['carrera'];?>>
                    
                    <input class="btn btn-warning" type="submit" value="Actualizar">

                    <input type="hidden" name="mat" id="mat" value=<?php echo $matriculaAlumno;?>>
                </form>
        <?php
            }
        ?>
    </div>    
</body>
</html>