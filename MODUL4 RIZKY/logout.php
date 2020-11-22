<?php 
session_start();
session_unset();
session_destroy();
setcookie('nama', '', 0, '/');
header('location:login.php');
?>