<?php
include('config.php');

if (isset($_POST['submit'])) {
    $idev = $_POST['idev'];
    $nama = $_POST['nama'];
    $desk = $_POST['desk'];
    $tags = $_POST['tags'];
    $tgl = $_POST['tgl'];
    $mulai = $_POST['mulai'];
    $selesai = $_POST['selesai'];
    $tempat = $_POST['tempat'];
    $foto = $_POST['foto'];
    $htm = $_POST['htm'];

    $query =   "UPDATE event SET
                    nama='$nama',
                    deks='$desk', 
                    tags='$tags',
                    tgl='$tgl',
                    mulai='$mulai', 
                    selesai='$selesai',
                    tempat='$tempat',
                    foto='$foto',
                    htm='$htm'
                WHERE idev='$idev'";

    $insert = mysqli_query($conn, $query);
}
