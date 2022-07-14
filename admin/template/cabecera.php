
<?php
  session_start();
  if(!isset($_SESSION['usuario'])){
    header("Location:../index.php");
  }else{
    if($_SESSION['usuario']=="ok"){
      $nombreUsuario = $_SESSION['nombreUsuario'];
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

<?php $url="http://".$_SERVER['HTTP_HOST']."/bookstore" ?>


<nav class="navbar navbar-expand navbar-light bg-light">
    <div class="nav navbar-nav">
        <a class="nav-item nav-link active" href="#">Administrador del sitio web<span class="sr-only"></span></a>
        <a class="nav-item nav-link" href="<?php echo $url; ?>/admin/inicio.php">Inicio</a>
        <a class="nav-item nav-link" href="<?php echo $url; ?>/admin/seccion/productos.php">Libros</a>
        <a class="nav-item nav-link" href=" <?php echo $url;?> ">Ver sitio web</a>
        <a class="nav-item nav-link text-danger" href="<?php echo $url; ?>/admin/seccion/cerrar.php">Cerrar</a>
    </div>
</nav>


    <div class="container">
        <div class="row my-5">