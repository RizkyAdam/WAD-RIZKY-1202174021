<!DOCTYPE html>
<?php
session_start();
if(! isset($_SESSION['is_login']))
{
  header('location:login.php');
}
?>
