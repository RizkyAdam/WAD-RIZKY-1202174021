<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "wad_modul3_rizky";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
    echo "<script>
            alert('Gak Konek ke databasenya cuy!');
            </script>";
}
