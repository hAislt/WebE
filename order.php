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

    $userId =$_COOKIE["userId"];
 
    #validate userId
    if(isset($_COOKIE['userId'])){
    $userId =  $_COOKIE['userId'];
    }
    if(isset($_SESSION['userId'])){
    $userId =  $_SESSION['userId'];
    }
    
        #einazeige der Warenkorb-Elemente in der Nav
        $sql = "SELECT * FROM  cards c, products p WHERE  user_id=$userId and c.product_id=p.id ";
        $result2 = $mysqli->query($sql);
        $cardItems=0;
        while ($row2 = $result2->fetch_array(MYSQLI_ASSOC)){
        $cardItems++;
        }
    

    

        $sql = "SELECT * FROM  cards c, products p WHERE  user_id=$userId and c.product_id=p.id";
        $result = $mysqli->query($sql);

        if (isset($_SESSION['username'])) {
        if ($result -> num_rows > 0) {
            //output data of each row
            
            while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
                $ordertxt = $row["user_id"];
                $add = fopen("orders.txt", "a");
                fputs($add, $ordertxt . "\r\n" );
                    fclose($add);
            }
        }
         
        // sql to delete a record
        $sql_del = "DELETE FROM cards WHERE user_Id=$userId";
        $delete = $mysqli->query($sql_del);
        }
      else {
        header("location: login.php");
      }

      
        $mysqli->close();
                
         ?>


    <head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Web Shop - Order submitted">
  <meta name="author" content="Hai Ha">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Web Shop - Order submitted</title>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  


  <!-- Custom styles for this template -->
  <link href="css/main.css" rel="stylesheet"> 

</head>

<br>  
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
          <li class="nav-item">
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
            <li class="nav-item">
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <br>
    <h3 class="my-4">Your order has been successfully submitted!<h3>
    <img src="img/ty.jpg" alt="thank_you" id="ty">
</div>
<?php
include ("footer.html");
?>

</body>