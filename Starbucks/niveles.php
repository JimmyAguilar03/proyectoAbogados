<?php 
    include_once("consultaNiveles.php");
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
        <h1> Tabla de niveles</h1> 
        <table class="table table-hover">
            <thread> 
                <tr> 
                    <th scope="col"> ID </th>
                    <th scope="col"> Nivel </th>
                    <th scope="col"> Salario </th>
                <tr> 
            </thread>
            <tbody>
            <?php
            while($row =$listaNiveles->fetch_assoc())
            {
            ?>
                <tr>
                    <td> <?php echo $row ['idLista'];?></td>
                    <td> <?php echo $row ['nivel'];?></td>
                    <td> <?php echo $row ['salario'];?></td>
                <tr>
            <?php
            }
            ?>
            </tbody>
        </table>
    <div>
</body>
</html>