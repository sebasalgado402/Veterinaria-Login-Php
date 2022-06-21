<?php
session_start();
 include_once('comparar.php');
 session_unset();
 session_destroy();
 header("location:../Veterinaria/index.php");
?>