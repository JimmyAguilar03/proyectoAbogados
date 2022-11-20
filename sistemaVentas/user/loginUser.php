<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/estiloLogin.css">
    <title>Login</title>
</head>
<body>
    <div class="container inicio">
            <center>
                <h1>Login Cliente</h1>
                <br>
                <form action="verificaUser.php" method="post">
                    <div class="form-group row">
                        <div class="col-lg-3">
                        </div>
                        <label for="user" class="col-lg-2 col-form-label col-form-label">Email</label>
                        <div class="col-lg-3">
                            <input type="text" class="form-control form-control-sm" name="user" id="user" placeholder=" Enter Your Email Address ">
                        </div>
                        <div class="col-lg-4">
                        </div>

                        <div class="col-lg-3">
                        </div>
                        <label for="pass" class="col-lg-2 col-form-label !">Password</label>
                        <div class="col-lg-3">
                        <input type="password" class="form-control form-control-sm" name="pass" id="pass" placeholder = " Enter Your Password ">
                        </div>
                        <div class="col-lg-4">
                        </div>
                        <div class="col-lg-2">
                        </div>
                        <div class="col-lg-8">
                            <input class="btn btn-primary" type="submit" value="Entrar">
                        </div>
                        <div class="col-lg-2">
                        </div>
                    </div>
                </form>
                
                
            </center>
    </div>  
</body>
</html>