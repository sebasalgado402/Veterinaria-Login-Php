<?php
    include_once('sesiones.php');
    
     if(isset($_SESSION['nombAdm'])){

     }else{
         header("location:../Veterinaria/index.php");
     }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Bienvenido Administrador</h1>
    <p>¿Donde desea ingresar?</p>
    <a href="#">Mascotas</a>
    <a href="#">Facturación</a> <br>
    <a  href="logout.php" class="btn btn-danger" >cerrar sesion</a>
</body>
</html>