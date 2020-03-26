<?php
error_reporting(-1);
ini_set('display_errors','On');

$userId =random_int(0,time());
$cardItems=0;
 
$mysqli = new mysqli('localhost', 'root', '', 'shop');
if($mysqli->connect_error) {
  echo 'Fehler bei der Verbindung: ' . mysqli_connect_error();
  exit();
  }
  if(!$mysqli->set_charset('utf8')) {
  echo 'Fehler beim Laden von UTF-8: ' . mysqli_error();
  }
  $sql = 'SELECT * FROM products Where id=4';
  $result = $mysqli->query($sql);

  $row = $result->fetch_array(MYSQLI_ASSOC);

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

  $result->close();
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
    <script src="js/bilder.js" type="text/javascript"></script>
    <script src="js/zaehler.js" type="text/javascript"></script>
    
  </head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="index.php">Web Shop</a>
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

<div class="container">

  <!-- Portfolio Item Heading -->
  <h1 class="my-4">Produkt
    <small></small>
  </h1>

  <!-- Portfolio Item Row -->
  <div class="row">

    <div class="col-md-6">
        <div class="container">
            <div class="row">
              
            <?php for ($i=0; $i < 6; $i++):?>            
              <div class="mySlides">
                <div class="numbertext">1 / 6</div>
                <img src="img/<?php echo $row['bild']; ?>" style="width:100%">
              </div>
            <?php endfor?>
              
              <a class="prev" onclick="plusSlides(-1)">❮</a>
              <a class="next" onclick="plusSlides(1)">❯</a>
            </div>
            <div class="caption-container row ">
              <p></p>
          </div>

              <div class="row"> 
              <?php for ($i=0; $i < 6; $i++):?>            
              <div class="column">
                  <img class="demo cursor" src="img/<?php echo $row['bild']; ?>" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
                </div>
            <?php endfor?>
              </div>

          </div>
          <br>
          <div class="row">

            <div class="btn-group col-md-3">

              <button class="produkt" id="minus">-</button>
              <input type="text" maxlength="3" size="4" value="0"></input>
              <button class="produkt"  id="plus">+</button>
            
          </div>
          <div class="col-md-6"></div>
          <div class="col-md-2 text-right">
            <label style="font-size: larger;"><?php echo $row['preis']; ?> </label>  
          </div>
          <div class="col-md-1 text-right">
            <label style="font-size: larger;">€ </label>  
          </div>
          </div> 
          <br>
        <div class="row"style="float: right;">
            <div >
                <button class="produkt" > In den Warenkorb</button> 
              </div>  
            </div>
    </div>

    <div class="col-md-4">
      <h3 class="my-3"> <?php echo $row['name']; ?></h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
      <h3 class="my-3">Project Details</h3>
      <ul>
        <li>Lorem Ipsum</li>
        <li>Dolor Sit Amet</li>
        <li>Consectetur</li>
        <li>Adipiscing Elit</li>
      </ul>
    </div>
  </div>
<hr>
<div>
    <h2>Produkt Infos</h2>
    <p><?php echo $row['beschreibung']; ?></p>
    <hr>
</div>


<div >
    <h2>Ähnliche Produkte</h2>
    <div class="row" style="border:solid 1px grey">
        <div class="col-md-3">
          <a href="gtx2.php">
            <img class="img-fluid rounded mb-3 mb-md-0" src="img/1125753_0__68857.jpg" alt="">
          </a>
        </div>
        <div class="col-md-3">
          <h3>GTX</h3>
          <p>4GB MSI GeForce GTX 1050 Ti GAMING</p>
        </div>
        <br>
      
      <div class="col-md-3">
        <a href="ram.php">
          <img class="img-fluid rounded mb-3 mb-md-0" src="img/1237318_0__8850603.jpg" alt="">
        </a>
      </div>
      <div class="col-md-3">
        <h3>RAM</h3>
        <p>16GB G.Skill Aegis DDR4-2666 DIMM CL19 Dual Kit</p>
      </div>
    </div>
    </div>
      <br>
</div>


<?php
include ("footer.html");
?>

   <!-- Bootstrap core JavaScript -->
   <script src="vendor/jquery/jquery.min.js"></script>
   <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>