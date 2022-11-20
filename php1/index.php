<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Práctica 1 PHP</title>
</head>
<body>
    <div class="container">
        <?php 
            echo "Hola mundo <br>";
            for($i=1;$i<6;$i++)
            {
        ?>
            <p style="color: blue">
                <?php
                    echo $i;
                ?>
            </p>
        <?php   
            }
        ?>

        <hr>
        
        <?php 
            echo "Lista en un solo PHP <br>";
            for($i=1;$i<6;$i++)
            {
                // Condición números pares
                if($i % 2 == 0)//Pares en rojo
                {
                    echo "<p class='alert alert-danger'>" . $i . "</p>";
                }
                else//Impares en azul
                {
                    echo "<p class='alert alert-primary'>" . $i . "</p>";
                }
            }
        ?>
    </div>
</body>
</html>