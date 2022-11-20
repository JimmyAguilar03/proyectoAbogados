<?php 
    include("datosConexion.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starbucks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <header>
         <div class="row">
            <div class="col-lg-5">
             <div class="col-lg-7">
                    <a href="index.php" class="btn btn-link">
                        Proveedores
                    </a>
                    <a href="productos.php" class="btn btn-link">
                        Productos
                    </a>
                    <a href="empleado.php" class="btn btn-link">
                        Empleados
                    </a>
                    <a href="niveles.php" class="btn btn-link">
                        Rangos
                    </a>
             </div>
         </div>
        </header> 
    </div>
    <div class="container">
        <h1> Bienvenido a Starbucks</h1> 
        <table class="table table-hover">
            <thread> 
                <tr> 
                    <th scope="col"> ID </th>
                    <th scope="col"> Nombre </th>
                    <th scope="col"> Paterno </th>
                    <th scope="col"> Materno </th>
                    <th scope="col"> Telefono </th>
                <tr> 
            </thread>
            <tbody>
            <?php
            
            ?>
            </tbody>
        </table>
    <div>
</body>
</html>