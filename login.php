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
  <meta name="description" content="Web Shop - Login">
  <meta name="author" content="Hai Ha">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Web Shop - Login</title>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/main.css" rel="stylesheet"> 

</head>

<body>

 <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Web Shop</a>
      <div class="input-group md-form form-sm form-2 pl-0">
        <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <span class="input-group-text red lighten-3" id="basic-text1"><i class="fa fa-search" aria-hidden="true"></i>
          </span>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="productsMain.php">Products</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="contact.php">Contact
                <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cart.php">Cart(<?php echo $cardItems ?>)</a>
        </ul>
      </div>
    </div>
  </nav>
  
  <main>
  
<!-- Login Box -->
    <div class="container_login">
    <img src="images/icon.jpg" class="icon"> 
    <h1>Login</h1>
    <form class ="loginform" action="inc/login-inc.php" method="POST">
    <input type="text" name="user" placeholder="Enter your username">
    <input type="password" name="password" placeholder="Enter your password"><br>
    <button type="submit" name="submit" class="button">Login</button>
    </form>
    <a href="signup.php">Registration</a>
    <p><a href="forgotpw.php">Forgot Password?</a></p>
    </div> 

  </main>

  <?php
    include ("footer.html");
    ?>


   
   </body>
   
   </html>