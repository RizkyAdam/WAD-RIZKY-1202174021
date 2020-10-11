<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <link rel="stylesheet" href="style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>total</title>
</head>
<body>
    <?php
        ini_set('display_errors', 0);
        $price = $_POST['price'];
        if (isset($_POST['room'])) {
            $price = $price + 20;
        }
        if (isset($_POST['breakfast'])) {
            $price = $price + 20;
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
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <th>Booking Number</th>
               <th>Name</th>
                <th>Check in</th>
            <th>Check Out</th>
                <th>Room Type</th>
        <th>Phone Number</th>
            <th>Service</th>
                <th>Total Price</th>
            </thead>
            <tbody>
                <?php if(!empty($_POST['booking_number'])): ?>
                    <td><?php echo $_POST['booking_number'] ?></td>
                  <td><?php echo $_POST['name'] ?></td>
                    <td><?php echo date('d/m/Y', strtotime($_POST['checkin'])) ?></td>
                   <td><?php echo date('d/m/Y', strtotime($_POST['checkin'] . '+' . $_POST['duration'] . ' days')) ?></td>
                   <td><?php echo $_POST['room'] ?></td>
               <td><?php echo $_POST['nophone'] ?></td>
                    <td>
                        <?php
                            if (isset($_POST['room'])) {
                                echo 'Room Service';
                            }
                            echo '</br>';
                            if (isset($_POST['breakfast'])) {
                                echo 'Breakfast';
                            }
                        ?>
                    </td>
                    <td>$ <?php echo $price ?></td>
                <?php else: ?>
                    <td colspan="10" style="text-align:center">No Service</td>
                <?php endif ?>
            </tbody>
        </table>
        </div>
    </div>
</body>
</html>
