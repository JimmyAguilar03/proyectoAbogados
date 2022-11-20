<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
Práctica 2
    <br>
    <?php 
   $numero = 5; 
   $factorial = 1;
   while ( $numero > 1 ) {
      $factorial = $factorial * $numero;
      $numero = $numero - 1;
   }
   echo ' El factorial de ' . $numero . ' es ' . $factorial.
    
    ?>
</body>
</html>