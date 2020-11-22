<?php 
session_start();
if(! isset($_SESSION['is_login']))
{
  header('location:login.php');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Home</title>
 
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">
    <script src="assets/js/jquery351.min.js"></script>
 
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
    <link href="assets/css/starter-template.css" rel="stylesheet">
  </head>
  <body>
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
 
<main role="main" class="container">
 
  <div class="starter-template">
    <h1>Selamat Datang <?php echo $_SESSION['nama']; ?></h1>
  </div>
 <!-- card top -->
 <div class="card bg-dark text-black">
  <img src="images/benelli.jpg" class="card-img" alt="Benelli">
  <div class="card-img-overlay">
    <h5 class="card-title">Benelli Motor Company</h5>
    <p class="card-text">Benelli has a legendary history spanning more than a century. 100 years of challenges, successes and satisfactions united by the passion for two wheels.

<br>In 1911 Teresa Benelli, widowed, invested all the capital of her family to establish a workshop and ensure a stable job for her six sons, Giuseppe, Giovanni, Filippo, Francesco, Domenico e Antonio “Tonino” Benelli.

<br>At the beginning it was only a service garage, where some spare parts for cars and motorcycles were also made. But the six Benelli brothers had a much higher ambition : building motorcycles. Eight years later, in 1919, the first engine was born, a two stroke 75cc applied to a bicycle frame which did not produce satisfying results. </p>
  </div>
</div>
 <!-- Card Bottom -->
 <div class="card-group">
  <div class="card">
    <img src="images/diavel.jpg" class="card-img-top" alt="502">
    <div class="card-body">
      <h5 class="card-title">Benelli 502c</h5>
      <p class="card-text">The Benelli 502C is offered Petrol engine in the Indonesia. The new Cruiser from Benelli comes in a total of 2 variants. If we talk about Benelli 502C engine specs then the Petrol engine displacement is 499.6 cc. 502C is available with Manual transmission. </p>
      <input type=submit name="b502" id="502" type="button" class="btn btn-success" value="Buy"><a class="add-cart cart1" href="#"></button>
    </div>
  </div>
  <div class="card">
    <img src="images/152.jpg" class="card-img-top" alt="152">
    <div class="card-body">
      <h5 class="card-title">Motobi 152</h5>
      <p class="card-text">The Benelli Motobi 152 is offered Petrol engine in the Indonesia. The new Dual Sport from Benelli comes in a total of 2 variants. If we talk about Benelli Motobi 152 engine specs then the Petrol engine displacement is 149 cc. </p>
      <input type=submit name="152" id="152" type="button" class="btn btn-success" value="Buy"><a class="add-cart cart2" href="#"></button>
    </div>
  </div>
  <div class="card">
    <img src="images/vtwin.jpg" class="card-img-top" alt="vtwin">
    <div class="card-body">
      <h5 class="card-title">Benelli V250</h5>
      <p class="card-text">Benelli V250 Offers Unique and small package due to its 250cc engine but still offers the performance of a usual cruiser bikes</p>
      <input type=Submit name="250" id="250" type="button" class="btn btn-success" value="Buy"><a class="add-cart cart3" href="#"></button>
      
    </div>
  </div>
</div>
</form>
 <!-- card -->
</main><!-- /.container -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
 </body>
      
      
      </html>