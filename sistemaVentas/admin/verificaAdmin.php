<?php 
    include_once("../conexiones/conexionBD.php");
    $userAdmin = $_POST['user'];
    $passAdmin = $_POST['pass'];

    $queryBuscarAdmin = "SELECT * FROM usuario 
                         WHERE usuario = '{$userAdmin}' 
                         AND password = '{$passAdmin}'
                         AND tipoUsuario = 1 
                         AND estatus = 1";
    
    $ejecutarQuery = mysqli_query($conexion, $queryBuscarAdmin);

    $nr = mysqli_num_rows($ejecutarQuery);

    if($nr == 1)
    {
        echo '<script type="text/javascript">
                alert("Bienvenido");
                window.location.href="dashAdmin.php";
              </script>';
    }
    else
    {
        echo '<script type="text/javascript">
                alert("Usuario o contraseña incorrectos");
                window.location.href="loginAdmin.php";
              </script>';
    }

?>