<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Edit Profile</title>
 
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sticky-footer/">
    <!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
 
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="sticky-footer.css" rel="stylesheet">
    <!-- navbar| -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">BMC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 
  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="cart.php">Cart <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="profile.php">Profile <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    
 
    <a href="logout.php" class="form-inline my-2 my-lg-0 btn btn-secondary">Logout</a>
 
  </div>
</nav>
 
    <!-- navbar| -->
  </head>
  <body class="d-flex flex-column h-200">
  <?php
  include 'connection.php';
  session_start();
  $database = new database();
$nama=$_SESSION['nama'];
$query=mysqli_query($database->koneksi,"SELECT * FROM user where nama='$nama'");
$row=mysqli_fetch_array($query);
  ?>
  <div class="d-flex justify-content-center align-items-center container ">

<div class="row ">

<div class="profile-input-field" >
        <h3>Edit Profile</h3>
        <form method="post" action="#" >
        
          <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama" style="width:20em;" placeholder="Masukkan Nama" value="<?php echo $row['nama']; ?>" required />
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email" style="width:20em;" placeholder="Masukkan Email" required value="<?php echo $row['email']; ?>" />
          </div>
          <div class="form-group">
            <label>Nomor HP</label>
            <input type="number" class="form-control" name="no_hp" style="width:20em;" placeholder="Masukkan Nomor Telfon" value="<?php echo $row['no_hp']; ?>">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" style="width:20em;" required placeholder="Masukkan Password" value="<?php echo $row['password']; ?>"></textarea>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary" name="submit">Submit</button><br><br>
          </div>
        </form>
      </div>
</div>
  </div>
  </body>
      </html>
      <?php
      if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $no_hp = $_POST['no_hp'];
        $password = $_POST['password'];
      $query = "UPDATE users SET nama = '$nama', email = '$email', no_hp = $no_hp, password = '$password'
                      WHERE nama = '$nama'";
                    $result = mysqli_query($db, $query);
                    ?>
                     <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "home.php";
        </script>
        <?php
             }    
