<?php
include('config.php');

if (isset($_POST['submit'])) {
   // $idev = $_POST['idev'];
    $nama = $_POST['nama'];
    $desk = $_POST['desk'];
    $tags = $_POST['tags'];
    $tgl = $_POST['tgl'];
    $mulai = $_POST['mulai'];
    $selesai = $_POST['selesai'];
    $tempat = $_POST['tempat'];
    $foto = $_POST['foto'];
    $htm = $_POST['htm'];
    $bene= $_POST['benefit'];
    $query =   "INSERT INTO event ( nama, desk, foto,tags,tgl, mulai, selesai, tempat, htm,benefit)
                    VALUES ('$nama','$desk','$foto','$tags','$tgl', '$mulai', '$selesai', '$tempat', '$htm','$bene')";

    $insert = mysqli_query($conn, $query);
    header("location:index.php");
}
