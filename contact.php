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
  <title>Web Shop - Contact</title>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  


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


  <!-- Contact Area -->
  
	<section class="contact_area section_gap_bottom">
		<div class="container">
			<div id="mapBox" class="mapBox" data-lat="47.99599592" data-lon="7.85109133" data-zoom="18" data-info="Kaiser-Joseph-Straße, Freiburg im Breisgau, Baden-Württemberg, 79098, Germany."
			 data-mlat="47.99599592" data-mlon="7.85109133">
      </div>
			<div class="row">
				<div class="col-lg-3">
					<div class="contact_info">
						<div class="info_item">
            <i class="fa fa-map-marker" aria-hidden="true"></i><h6>Germany, Freiburg</h6>
							<p>Kaiser-Joseph-Straße</p>
						</div>
						<div class="info_item">
						<i class="fa fa-phone" aria-hidden="true"></i><h6><a href="#">+49 x x x x x</a></h6>
							<p>Mon to Fri 8:30am to 6pm</p>
						</div>
						<div class="info_item">
					<i class="fa fa-envelope" aria-hidden="true"></i><h6><a href="#">blabla@email.de</a></h6>
							<p>Send us your question anytime!</p>
						</div>
					</div>
				</div>
				<div class="col-lg-9">
					<form class="row contact_form" action="request_sent.php" method="post" id="contactForm" novalidate="novalidate">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"></textarea>
							</div>
						</div>
						<div class="col-md-12 text-right">
							<button type="submit" name ="submit" value="submit" class="primary-btn">Send Message</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
    include ("footer.html");
    ?>
  
   <!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDan3cOoY5nwvrtvVTUU3-vMr08P8nq_9k"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
