

<?php

session_start();

if($_POST){

    if(($_POST['usuario']=="Amilkar") && ($_POST['contrasenia']=="sistema")){

        $_SESSION['usuario']="ok";
        $_SESSION['nombreUsuario']="Amilkar";
        header('location:inicio.php');
    }else{
        $mensaje= "Error: El usuario o contraseña son incorrectos";
    }

}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <div class="row justify-content-center my-5 align-items-center vh-100">            

            <div class="col-md-4">

                <div class="card ">
                    <div class="card-header">
                        Login
                    </div>

                    <div class="card-body">
                    
                        <form method="POST">
                            <div class = "form-group">
                                <label>Usuario</label>
                                <input type="text" class="form-control" name="usuario" placeholder="Escribe tu nombre">
                            </div>

                            <div class="form-group my-2">
                                <label>Contraseña:</label>
                                <input type="password" class="form-control" name="contrasenia"  placeholder="Escribe tu contraseña">
                            </div>
                            
                            <button type="submit" class="btn btn-primary mb-2">Ingresar al sistema</button>
                        </form>
                        <?php if(isset($mensaje)) {?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $mensaje; ?>
                            </div>
                        <?php
                        }
                        ?>
                        
                    </div>
                </div>

            </div>
        </div>
    </div>

  </body>
</html>