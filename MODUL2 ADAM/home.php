<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <link rel="stylesheet" href="style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Home</title>
</head>
<body>
    <?php
        ini_set('display_errors', 0);
        include 'gamba/deschotel.php' 
    ?>
    <header>
    <nav>
            <ul>
                <li><a class="nav" href ="home.php">Home</a></li>
                <li><a class="nav" href ="booking.php">Booking</a></li>
            </ul>
        </nav>
    </header>
    <br>
    <center>
        <span class="c-teal">
            <h3>EAD HOTEL</h3>
            <h4>Welcome to star 5 hotel</h4>
        </span>
    </center>
    <div class="container">
        <div class="row">
         <?php foreach($deshotel as $data):  ?>
       <div class="col-sm-12 col-md-4 col-lg-3 ml-5 mt-4">
                    <div class="card">
                 <img height="215px" class="card-img-top" src="<?php echo $data['image']; ?>">
                       <div class="card-block">
                        <center>
                    <h4 class="card-title"><?php echo $data['room'] ?></h4>
                        <h4 class="c-teal card-title"><?php echo '$ ' . $data['price'] . '/Day' ?></h4>
                        </center>
                            <div class="meta menu-title">
                                <span href="#">Facilities</span>
                            </div>
                            <?php foreach($data['facility'] as $facility): ?>
                       <div class="card-text">
                        <?php echo $facility ?>
                 </div>
                        <?php endforeach ?>
                   </div>
                     <div class="card-footer">
                     <center>
                       <a href="booking.php?id=<?php echo $data['id']?>" class="btn btn-sm btn-primary" name="button">Book Now</a>
                      </center>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</body>
</html>
