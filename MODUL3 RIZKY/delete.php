<?php
include('config.php');

$idev = $_GET['idev'];

$query = "DELETE FROM event WHERE idev='$idev'";
$delete = mysqli_query($conn, $query);
header("location:index.php");
