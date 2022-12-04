<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Encabezado</title>
</head>
<body>
<div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href=<?php echo base_url('Menu'); ?>  >
            Menu abogados
        </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link"  href=<?php echo base_url('Asunto'); ?> >
                        Asunto
                    </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link"  href= <?php echo base_url('Cliente'); ?> >
                        Cliente
                    </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href= <?php echo base_url('Procurador'); ?> >
                        Procurador
                    </a>
                    </li>

                </ul>

            </div>
        </nav>
    </div>
<!-- 

-->
