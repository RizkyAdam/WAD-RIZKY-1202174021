<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EAD EVENT</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="assets/bootstrap/js/jquery351.min.js"></script>
    <script src="assets/bootstrap/js/popper.min.js">
    </script>
    <script src="assets/bootstrap/js/bootstrap.min.js">
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
     <?php 
    include('config.php');
    $query = "SELECT * FROM event";
    $select= mysqli_query($conn,$query);
    ?>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">EAD EVENT</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <!-- <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li> -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">As Admin</a>
                    </li> -->
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <button type="button" class="btn btn-outline-light my-2 my-sm-0" data-toggle="modal" data-target="#inputModal">
                        Add Event
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->

    <div class="container">

        <div class="row mt-2">
            <div class="col">
                <h5 class="text-center"><b> WELCOME TO EAD EVENT</b></h5>

                <hr class="my-3">


                <?php while ($selects = mysqli_fetch_assoc($select)) { ?>
                <!-- CARD -->
                <div class="row row-cols-1 row-cols-md-3 mt-2 justify-content-center">

                    <div class="col-md-3 my-2 mx-4">
                        <div class="card mh-100" style="width: 18rem;">
                            <div class="cardv">
                                <img src="<?= $selects['foto'] ?>" class="card-img-top img img-responsive full-width">
                            </div>

                            <div class="card-body">
                                <h5 class="card-title"><?= $selects['nama'] ?></h5>
                                <p class="card-text " style="height :50px; overflow: hidden; text-overflow: ellipsis;">
                                <?= $selects['desk'] ?> </p>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="fa fa-calendar"></i> <?= $selects['tgl'] ?></li>
                                    <li class="list-group-item"><i class="fa fa-map-marker"></i> &nbsp; <?= $selects['tempat'] ?> </li>
                                    <li class="list-group-item"><i class="fa fa-tags"></i>&nbsp; <?= $selects['htm'] ?></li>
                                </ul>

                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?= $selects['idev'] ?>">
                                    Detail
                                </button>
                            </div>
                        </div>
                    </div>
                

                </div>
                <!-- END CARD -->



                 <!-- MODAL Preview -->
                 <div class="modal fade" id="exampleModal<?= $selects['idev'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">detail event</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <?php 
                                $id= $selects['idev'] ;
                                $query2 ="SELECT * FROM event WHERE idev='$id'" ;
                                $select2= mysqli_query($conn,$query2);
                                while ($liat = mysqli_fetch_assoc($select2)) { ?>
                                <img src="<?= $liat['foto'] ?>">
                                    <p>
                                        <b>Description:</b><br>
                                        <?= $liat['desk'] ?>
                                    </p>
                                    <p>
                                        <i class="fa fa-calendar"></i> <?= $liat['tgl'] ?>
                                        <br>
                                        <i class="fa fa-map-marker"></i>&nbsp; <?= $liat['tempat'] ?>
                                        <br>
                                        <i class="fa fa-tags"></i>&nbsp;<?= $liat['tags'] ?>
                                    </p>
                                    <h5>HTM: </h5><?= $liat['htm'] ?>
                                    <h5>Benefit:</h5><?= $liat['benefit'] ?>
                                <?php } ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="editModal"data-target="#editModal<?= $selects['idev'] ?>" >Edit</button>
                                <!-- <button type="button" class="btn btn-danger" href="delete.php?idev=<?= $selects['idev'] ?>" >Delete </button> -->
                                <a href="delete.php?idev=<?= $selects['idev'] ?>" id="delete" name="delete" class="btn btn-danger" role="button">delete</a>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div> 
                </div>
                <!-- END MODAL Preview -->

                 <!-- UPDATE MODAL -->
                 <div class="modal fade" id="editModal<?= $selects['idev'] ?>" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel">EDIT EVENT</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    <form action="">
                                        <label for="idev">ID Event:</label><br>
                                        <input type="text" id="idev" name="idev" disabled><br><br>
                                        <label for="nama">Nama Event:</label><br>
                                        <input type="text" id="nama" name="nama"><br>
                                        <label for="desk">Deskripsi:</label><br>
                                        <textarea name="desk" id="desk" cols="30" rows="3"></textarea><br><br>
                                        <label for="tags">Kategori:</label><br>
                                        <input type="radio" name="tags" id="tags" value="online">
                                        <label for="online">&nbsp;Online</label><br>
                                        <input type="radio" name="tags" id="tags" value="offline">
                                        <label for="offline">&nbsp;Offline</label><br><br>
                                        <label for="tgl">tgl:</label><br>
                                        <input type="date" name="tgl" id="tgl"><br><br>
                                        <label for="mulai">Jam Mulai:</label><br>
                                        <input type="time" name="mulai" id="mulai"><br><br>
                                        <label for="selesai">Jam Berakhir:</label><br>
                                        <input type="time" name="selesai" id="selesai"><br><br>
                                        <label for="tempat">Tempat:</label><br>
                                        <input type="text" name="tempat" id="tempat"><br><br>
                                        <label for="htm">HTM:</label><br>
                                        <input type="number" name="htm" id="htm"><br><br>
                                        <label for="bebefit">Benefit:</label><br>
                                        <input type="checkbox" name="benefit" id="snack" value="snack"><label for="snack">&nbsp;snack</label><br>
                                        <input type="checkbox" name="benefit" id="sertifikat" value="sertifikat"><label for="sertifikat">&nbsp;sertifikat</label><br>
                                        <input type="checkbox" name="benefit" id="souvenir" value="souvenir"><label for="souvenir">&nbsp;souvenir</label><br>
                                        <br>
                                        <input type="file" name="foto" id="foto" value=""><br><br>

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
                <!-- END UPDATE MODAL -->

                <?php 
                }
                ?>



                <!-- MODAL INPUT -->
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
                                    <form action="create.php" method="POST">
                                        <!-- <label for="idev">ID Event:</label><br>
                                        <input type="text" id="idev" name="idev"disabled><br><br> -->
                                        <label for="nama">Nama Event:</label><br>
                                        <input type="text" id="nama" name="nama"><br>
                                        <label for="desk">Deskripsi:</label><br>
                                        <textarea name="desk" id="desk" cols="30" rows="3"></textarea><br><br>
                                        <label for="tags">Kategori:</label><br>
                                        <input type="radio" name="tags" id="tags" value="online">
                                        <label for="online">&nbsp;Online</label><br>
                                        <input type="radio" name="tags" id="tags" value="offline">
                                        <label for="offline">&nbsp;Offline</label><br><br>
                                        <label for="tgl">tgl:</label><br>
                                        <input type="date" name="tgl" id="tgl"><br><br>
                                        <label for="mulai">Jam Mulai:</label><br>
                                        <input type="time" name="mulai" id="mulai"><br><br>
                                        <label for="selesai">Jam Berakhir:</label><br>
                                        <input type="time" name="selesai" id="selesai"><br><br>
                                        <label for="tempat">Tempat:</label><br>
                                        <input type="text" name="tempat" id="tempat"><br><br>
                                        <label for="htm">HTM:</label><br>
                                        <input type="number" name="htm" id="htm"><br><br>
                                        <label for="benefit">Benefit:</label><br>
                                        <input type="checkbox" name="benefit" id="snack" value="snack"><label for="snack">&nbsp;snack</label><br>
                                        <input type="checkbox" name="benefit" id="sertifikat" value="sertifikat"><label for="sertifikat">&nbsp;sertifikat</label><br>
                                        <input type="checkbox" name="benefit" id="souvenir" value="souvenir"><label for="souvenir">&nbsp;souvenir</label><br>
                                        <br>
                                        <input type="file" name="foto" id="foto"><br><br>

                                        <input type="submit" value="Submit" name="submit">

                                    </form>
                                </p>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END MODAL INPUT -->



               
            </div>
        </div>
    </div>

</body>

<!-- ID GENERATOR JS-->
<!-- //<script>
    // GENERATE ID BY DATETIME
    Number.prototype.AddZero = function(b, c) {
        var l = (String(b || 10).length - String(this).length) + 1;
        return l > 0 ? new Array(l).join(c || '0') + this : this;
    }
    n = new Date();
    y = n.getFullYear();
    m = n.getMonth() + 1;
    d = n.getDate().AddZero();
    h = n.getHours().AddZero();
    min = n.getMinutes().AddZero();
    sec = n.getSeconds().AddZero();
    document.getElementById("idev").value = d + "" + m + "" + y + "" + h + "" + min + "" + sec;
</script> -->

</html>