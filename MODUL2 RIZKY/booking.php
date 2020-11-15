<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <link rel="stylesheet" href="style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Booking</title>
</head>
<body>
    <?php
        ini_set('display_errors', 0);
        include 'gamba/deschotel.php';
        $img = "";
     foreach($deshotel as $data){
            if ($data['id'] == $_GET['id']) {
                $price  = $data['price'];
                $img    = $data['image'];
                $type   = $data['room'];
            }
        }
    ?>
    <header>
    <nav>
            <ul>
                <li><a href ="home.php">Home</a></li>
                <li><a href ="booking.php">Booking</a></li>
            </ul>
        </nav>
    </header>
    <br>
    <div class="row">
        <div class="col-md-6 p-5">
            <div class="panel panel-info">
                <div class="panel-body" >
                    <form  class="form-horizontal" method="post" action="total.php">
                        <input type="hidden" name="booking_number" value="<?php echo rand() ?>">
                       <input type="hidden" name="price" value="<?php echo $price ?>">
                        <div class="form-group required">
                            <label class="control-label col-md-4 requiredField">Name</label>
                      <div class="controls col-md-8">
                                <input required class="input-md textinput textInput form-control" name="name" type="text" />
                            </div>
                </div>
                        <div class="form-group required">
                            <label class="control-label col-md-4 requiredField">Check in</label>
                    <div class="controls col-md-8">
                                <input required class="input-md textinput textInput form-control" name="checkin" type="date" />
                            </div>
                      </div>
                      <div class="form-group required">
                            <label class="control-label col-md-4 requiredField">Duration</label>
                        <div class="controls col-md-8">
                                <input required class="input-md textinput textInput form-control" name="duration" type="number" />
                   <span style="font-size:10px">Day(s)</span>
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="control-label col-md-4 requiredField">Room Type</label>
                            <div class="controls col-md-8">
                                <select class="input-md textinput textInput form-control" name="type">
                                 <option <?php echo $selected = ($type == 'Standard') ? 'selected' : '' ?> value="Standard">Standard</option>
                                    <option <?php echo $selected = ($type == 'Superior') ? 'selected' : '' ?> value="Superior">Superior</option>
                                <option <?php echo $selected = ($type == 'Luxury') ? 'selected' : '' ?> value="Luxury">Luxury</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="control-label col-md-4 requiredField">Add Service</label>
                            <div class="controls col-md-offset-4 col-md-8 ">
                                <span style="font-size:10px">$ 20/service</span>
                                <div class="checkbox required">
                               <label for="id_terms" class=" requiredField">
                                        <input class="input-ms checkboxinput" name="room" type="checkbox" />
                                        Room Service
                                    </label>
                                </div>
                                <div class="checkbox required">
                                    <label for="id_terms" class=" requiredField">
                                        <input class="input-ms checkboxinput" name="breakfast" type="checkbox" />
                                     Breakfast
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="control-label col-md-4 requiredField">Phone Number</label>
                            <div class="controls col-md-8">
                                <input required class="input-md textinput textInput form-control" name="nophone" type="text" />
                            </div>
                        </div>
                        <div class="form-group required">
                            <div class="controls col-md-8">
                                <button type="submit" name="button" class="input-md textinput textInput form-control btn btn-primary">Book</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 p-5">
            <img height="215px" class="card-img-top" src="<?php echo $img ?>">
        </div>
    </div>
</body>
</html>
