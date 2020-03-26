<?php
session_start();
error_reporting(-1);
ini_set('display_errors','On');
 
$mysqli = new mysqli('localhost', 'root', '', 'shop');
if($mysqli->connect_error) {
  echo 'Fehler bei der Verbindung: ' . mysqli_connect_error();
  exit();
  }
  if(!$mysqli->set_charset('utf8')) {
  echo 'Fehler beim Laden von UTF-8: ' . mysqli_error();
  }
  $sql = 'SELECT * FROM products';
  $result = $mysqli->query($sql);

  $userId =random_int(0,time());
  $cardItems=0;

if(isset($_COOKIE['userId'])){
    $userId = (int) $_COOKIE['userId'];
    }
  if(isset($_SESSION['userId'])){
      $userId = (int) $_SESSION['userId'];
  }

    setcookie('userId',$userId,strtotime('+30 days'));

    $sql ="SELECT  *  FROM cards Where user_id=".$userId;
    $resultcard = $mysqli->query($sql);
    $cardItems= (int)$resultcard;

    $mysqli->close();

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="WebShop">
    <meta name="author" content="Mario">
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/heroic-features.css" rel="stylesheet">
    
    <title>Web Shop</title>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    
  </head>

 <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">Web Shop</a>
      <div class="collapse navbar-collapse" id="navbarMenu">
      <div class="input-group md-form form-sm form-2 pl-0">
        <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <span class="input-group-text red lighten-3" id="basic-text1"><i class="fa fa-search" aria-hidden="true"></i>
          </span>
        </div>
      </div>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="productsMain.php">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cart.php">Cart(<?php echo $cardItems ?>)</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<body>
   
    <div class="container">
    <h1 class="my-4">Our Products</h1>

    <?php while ($row = $result->fetch_array(MYSQLI_ASSOC)) :?>
    <div class="row">
      <div class="col-md-7">
        <a href="product.html">
          <img class="img-fluid rounded mb-3 mb-md-0" src=" img/<?php echo $row['bild'] ?>" alt="">
        </a>
      </div>
      <div class="col-md-5">
        <h3> <?php echo $row['name'] ?></h3>
        <p><?php echo $row['bescheibung_kurz'] ?></p>
        <a class="btn btn-primary" href="<?php echo $row['link'] ?>">View Project</a>
      </div>
    </div>
    <!-- /.row -->

    <hr>
    <?php endwhile; ?>
    </div>

    

    <?php
    include ("footer.html");
    ?>


      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   </body>
   
   </html>
