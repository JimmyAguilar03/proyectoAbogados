<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica con while</title>
</head>
<body>
<?php
$numero=7;
$n = $numero;
$f = 1;
while ( $n > 1 ) {
    if ($n==1){
        $f=1;
    }
    else{
        $f = $f * $n;
    }
    
    $n = $n - 1;
 }
 echo ' El factorial de ' . $numero . ' es ' . $f;
?>
</body>
</html>
