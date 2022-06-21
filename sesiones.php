<?php
    session_start();
    $_SESSION['nombUser'] = 'user';
    $_SESSION['passUser'] = 'user123';
    $_SESSION['nombAdm'] = 'Admin';
    $_SESSION['passAdm'] = 'admin123';
    
    function validar($nombre , $passwd){
          if($nombre == $_SESSION['nombUser'] && $passwd == $_SESSION['passUser']){
            header("location:../Veterinaria/userLogued.php");
          }elseif($nombre == $_SESSION['nombAdm'] && $passwd == $_SESSION['passAdm']){
            header("location:../Veterinaria/adminLogued.php");
          }else{
            echo "<script> alert('Datos Incorrectos , serás redireccionado');window.location ='index.php'</script>";
          }
    }

?>