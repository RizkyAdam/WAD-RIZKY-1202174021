<?php
include 'connection.php';
    if(isset($_POST['submit'])){
        $nama=$_POST['nama'];
        $desk=$_POST['desk'];
        $tags=$_POST['tags'];
        $tgl=$_POST['tgl'];
        $mulai=$_POST['mulai'];
        $selesai=$_POST['selesai'];
        $tempat=$_POST['tempat'];
        $foto=$_POST['foto'];
        $htm=$_POST['htm'];

        $query = "INSERT INTO event VALUES ('nama','desk','tags','tgl','mulai','selesai','tempat','foto','htm')";

        $select ="SELECT * FROM event ";
        $success = mysqli_query($conn,$select);


         header("location:index.php");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EAD EVENT</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/jquery351.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>

    <style>
        .cardv {
            position: relative;
            overflow: hidden;
            padding-bottom: 100%;
        }

        .cardv img {
            position: absolute;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">EAD EVENT</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <button type="button" class="btn btn-outline-light my-2 my-sm-0" data-toggle="modal" data-target="#inputModal">
                        Add Event
                    </button>
                </form>
            </div>
        </div>
    </nav>
    

    <div class="container">

        <div class="row mt-2">
            <div class="col">
                <h5 class="text-center"><b>WAELCOME TO EAD EVENT</b></h5>

                <hr class="my-3">


                
                <?php
                    while($input = mysqli_fetch_assoc($success)){
                ?>
                <div class="row row-cols-1 row-cols-md-3 mt-2 justify-content-center">

                    
                    <div class="col-md-3 my-2 mx-4">
                        <div class="card mh-100" style="width: 18rem;">
                            <div class="cardv">
                                <img src="<?= $input['foto']?>">
                            </div>

                            <div class="card-body">
                                <h5 class="card-title"><?= $input['nama']?></h5>
                                <p class="card-text " style="height :50px; overflow: hidden; text-overflow: ellipsis;">
                                <?= $input['desk']?> </p>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="fa fa-calendar"></i>
                                    <?= $input['tgl']?></li>
                                    <li class="list-group-item"><i class="fa fa-map-marker"></i> &nbsp; 
                                    <?= $input['tempat']?></li>
                                    <li class="list-group-item"><i class="fa fa-tags"></i>&nbsp; <?= $input['tags']?></li>
                                </ul>

                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Detail
                                </button>
                            </div>
                        </div>
                    </div>


                </div>
                
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><?= $input['nama']?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    <b><?= $input['desk']?></b><br>
                                </p>
                                <p>
                                    <i class="fa fa-calendar"><?=$input['tgl']?></i>
                                    <br>
                                    <i class="fa fa-map-marker"><?=$input['tempat']?></i>&nbsp;
                                    <br>
                                    <i class="fa fa-tags"><?=$input['tags']?></i>&nbsp;
                                </p>
                                <h5>HTM: <?=$input['htm']?></h5>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php  
                    }
                ?>
                <div class="modal fade" id="inputModal" tabindex="-1" aria-labelledby="inputModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="inputModalLabel">ADD EVENT</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    <form action="" method="POST">
                                        <label for="nama">Nama:</label><br>
                                        <input type="text" id="nama" name="nama"><br>
                                        <label for="desk">Deskripsi:</label><br>
                                        <input type="text" id="desk" name="desk"><br><br>
                                        <label for="tags">kategori:</label><br>
                                        <input type="radio" name="tags" id="online" value="online"><label for="online">&nbsp;Online</label><br>
                                        <input type="radio" name="tags" id="offline" value="offline"><label for="offline">&nbsp;Offline</label><br><br>
                                        input
                                        <label for="tgl">tgl:</label><br>
                                        <input type="date" name="tgl" id="tgl"><br><br>
                                        <label for="mulai">Jam Mulai:</label><br>
                                        <input type="time" name="mulai" id="mulai"><br><br>
                                        <label for="selesai">Jam Berakhir:</label><br>
                                        <input type="time" name="selesai" id="selesai"><br><br>
                                        <label for="tempat">Tempat:</label><br>
                                        <input type="text" name="tempat" id="tempat"><br><br>
                                        <label for="htm">HTM:</label><br>
                                        <input type="text" name="htm" id="htm"><br><br>
                                        <label for="bebefit">Benefit:</label><br>
                                        <input type="checkbox" name="benefit" id="snack" value="snack"><label for="snack">&nbsp;snack</label><br>
                                        <input type="checkbox" name="benefit" id="sertifikat" value="sertifikat"><label for="sertifikat">&nbsp;sertifikat</label><br>
                                        <input type="checkbox" name="benefit" id="souvenir" value="souvenir"><label for="souvenir">&nbsp;souvenir</label><br>
                                        <br>
                                        <input type="file" name="foto" id="foto"><br><br>

                                        <input type="submit" value="Submit">

                                    </form>
                                </p>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>