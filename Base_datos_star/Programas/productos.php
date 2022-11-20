<?php 
    include_once("consultaProductos.php");
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
        <h1> Tabla de productos</h1> 
        <table class="table table-hover">
            <thread> 
                <tr> 
                    <th scope="col"> ID </th>
                    <th scope="col"> Tipo </th>
                    <th scope="col"> Caducidad </th>
                    <th scope="col"> Alergeno </th>
                    <th scope="col"> Calorias </th>
                    <th scope="col"> Nombre</th>
                <tr> 
            </thread>
            <tbody>
            <?php
            while($row =$listaProductos->fetch_assoc())
            {
            ?>
                <tr>
                    <td> <?php echo $row ['no_producto'];?></td>
                    <td> <?php echo $row ['id_tipo'];?></td>
                    <td> <?php echo $row ['fecha_caducidad'];?></td>
                    <td> <?php echo $row ['alergeno'];?></td>
                    <td> <?php echo $row ['no_calorias'];?></td>
                    <td> <?php echo $row ['nombre'];?></td>
                <tr>
            <?php
            }
            ?>
            </tbody>
        </table>
    <div>
</body>
</html>