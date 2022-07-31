<?php 
session_start();
session_destroy();
//cuando se destruye la sesion se redirige al login 
header("location:login.php");
?>