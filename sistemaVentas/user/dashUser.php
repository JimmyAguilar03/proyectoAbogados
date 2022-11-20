<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/estiloNav.css">
    <title>Dash user</title>
</head>
<body>
    <header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Something else here</a>
        </div>
        </li>
        <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        </div>
    </nav>
    </header>
    
    <div class="espacio">
        
    </div>
    <div class="container">
        
        <h1>Bienvenido Usuario</h1>
        <h4>¿Qué vas a comprar?</h4>

        <div class="row">
        <?php 
          include_once("../conexiones/consultasProductos.php");
          while($row = $resultado->fetch_assoc())
          {
        ?>
            <div class="col-lg-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?php echo $row['imagen'];?>" alt="" width="100px";>
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $row['nombre'];?>
                        </h5>
                        <h6>
                            Precio: <?php echo $row['precioPublico'];?> 
                        </h6>
                        <?php
                            if($row['cantidad'] != 0)
                            {
                                echo '<p class="card-text">
                                      '.$row["cantidad"].'
                                      Disponibles
                                      </p>';
                                echo '<a href="#" class="btn btn-primary">Comprar</a>';
                            }
                            else
                            {
                                echo '<p class="card-text">
                                      Agotado
                                      </p>';
                                //echo '<a href="#" class="btn btn-default disabled">Comprar</a>';
                            }
                        ?>
                    </div>
                </div>
            </div>
        <?php
          }
        ?>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="" alt="Card image cap">
    <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
    <a href="#" class="btn btn-primary">Link Here</a>
    </div>
    </div>

    <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="" alt="Card image cap">
    <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
    <a href="#" class="btn btn-primary">Link Here</a>
    </div>
    </div>

    <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="" alt="Card image cap">
    <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
    <a href="#" class="btn btn-primary">Link Here</a>
    </div>
    </div>

    <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="" alt="Card image cap">
    <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
    <a href="#" class="btn btn-primary">Link Here</a>
    </div>
    </div>

    <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="" alt="Card image cap">
    <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
    <a href="#" class="btn btn-primary">Link Here</a>
    </div>
    </div>

    <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="" alt="Card image cap">
    <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
    <a href="#" class="btn btn-primary">Link Here</a>
    </div>
    </div>

    <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="" alt="Card image cap">
    <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
    <a href="#" class="btn btn-primary">Link Here</a>
    </div>
    </div>

    <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="" alt="Card image cap">
    <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
    <a href="#" class="btn btn-primary">Link Here</a>
    </div>
    </div>

    <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="" alt="Card image cap">
    <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
    <a href="#" class="btn btn-primary">Link Here</a>
    </div>
    </div>

    
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>