<?php 
    include_once("../conexiones/conexionBD.php");
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $queryBuscarUsuario = "SELECT * FROM usuario 
                         WHERE usuario = '{$user}' 
                         AND password = '{$pass}'
                         AND tipoUsuario = 2 
                         AND estatus = 1";
    
    $ejecutarQuery = mysqli_query($conexion, $queryBuscarUsuario);

    $nr = mysqli_num_rows($ejecutarQuery);


    if($nr == 1)
    {
        echo '<script type="text/javascript">
                alert("Bienvenido");
                window.location.href="dashUser.php";
              </script>';
    }
    else
    {
        echo '<script type="text/javascript">
                alert("Usuario o contraseña incorrectos");
                window.location.href="loginUser.php";
              </script>';
    }

?>