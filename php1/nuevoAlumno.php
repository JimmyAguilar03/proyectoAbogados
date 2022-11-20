<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Nuevo alumno</title>
</head>
<body>
    <div class="container">
        <h1>Nuevo alumno</h1>

        <form action="guardarAlumno.php" method="post">
            <label for="matricula">Matrícula</label>
            <input class="form-control" type="text" name="matricula" id="matricula" placeholder="1234, 2233, 8894">

            <label for="nombre">Nombre del alumno</label>
            <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Luis, Fernanda, Alvaro">

            <label for="edad">Edad</label>
            <input class="form-control" type="number" name="edad" id="edad" placeholder="18, 22, 30">

            <label for="carrera">Carrera</label>
            <input class="form-control" type="text" name="carrera" id="carrera" placeholder="Sistemas, Psicología, Educación...">
            
            <input class="btn btn-primary" type="submit" value="Guardar">
        </form>
    </div>    
</body>
</html>