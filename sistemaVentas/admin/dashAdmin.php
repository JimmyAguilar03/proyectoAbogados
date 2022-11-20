<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Dash</title>
</head>
<body>
    <div class="container">
        <h1>Bienvenido Admin</h1>
        <a class="badge badge-primary" href="">Productos</a>
        <a class="badge badge-success" href="">Proveedores</a>
        <a class="badge badge-danger" href="">Reportes</a>
        <hr>
        <a class="btn btn-success" href="#" style="float: right";>
            + Agregar
        </a>

        <?php
            include_once("../conexiones/consultasProductos.php");
        ?>

        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio base</th>
                    <th scope="col">Precio público</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Deshabilitar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while($row = $resultado->fetch_assoc())
                    {
                ?>
                        <tr>
                            <td><?php echo $row['idProducto'];?></td>
                            <td>
                                <img src="<?php echo $row['imagen'];?>" alt="" width="100px";>
                                <?php echo $row['nombre'];?>
                            </td>
                            <td><?php echo $row['precioBase'];?></td>
                            <td><?php echo $row['precioPublico'];?></td>
                            <td><?php echo $row['cantidad'];?></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>