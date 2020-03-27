<?php
error_reporting(-1);
ini_set('display_errors','On');
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

  $sql = 'SELECT * FROM  products  ';
  $result = $conn->query($sql);

  $cardItems= (int)$result;


     
  if(isset($_POST['button1'])) { 

    $conn = mysqli_connect($servername, $username, $password, $dbname);  
    $sql = "INSERT INTO cards (amount, product_id, user_id)
  <--  VALUES BITTE SELBER  -->
    VALUES ('2', '1234', '1')";

if (mysqli_query($conn, $sql)) {
    $last_id = mysqli_insert_id($conn);
    echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
    
    $conn->close();
      
  } 


?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="WebShop">
    <meta name="author" content="Mario">
    <meta name="author" scripts="Hai Ha">
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Web Shop</title>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/counter.js" type="text/javascript"></script>
    
  </head>

<body>

  <!-- Navigation -->
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
          <li class="nav-item ">
            <a class="nav-link" href="productsMain.php">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="cart.php">Cart(<?php echo $cardItems ?>)</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<br>
    <div class="container">
        <div class="card shopping-cart">
                 <div class="card-header bg-dark text-light">
                     <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                     Shipping cart
                     <div class="clearfix"></div>
                 </div>
                 <div class="card-body">
                    <?php while ($row = $result->fetch_array(MYSQLI_ASSOC)) :?>
                         <!-- PRODUCT -->
                         <div class="row">
                             <div class="col-12 col-sm-12 col-md-2 text-center">
                                     <img class="img-responsive" src="img/<?php echo $row['bild'] ?>" alt="prewiew" width="120" height="80">
                             </div>
                             <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                                 <h4 class="product-name"><?php echo $row['name'] ?></h4>
                             </div>
                             <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                                 <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                                     <h6><strong><?php echo $row['preis'] ?> <span class="text-muted">€</span></strong></h6>
                                 </div>
                                 <div class="col-4 col-sm-4 col-md-4">
                                     <div class="quantity">
                                         <input type="button" value="+" class="plus">
                                         <input type="text" step="1" max="99" min="1" value="1" title="Qty" class="qty"
                                                size="4">
                                         <input type="button" value="-" class="minus">
                                     </div>
                                 </div>
                                 <div class="col-2 col-sm-2 col-md-2 text-right">
                                     <button type="button" class="btn btn-outline-danger btn-xs">
                                         <i class="fa fa-trash" aria-hidden="true"></i>
                                     </button>
                                 </div>
                             </div>
                         </div>
                         <hr>
                         <?php endwhile; ?>
                         <!-- END PRODUCT -->
                        

                        
                     <div class="pull-right">
                         <a href="" class="btn btn-outline-secondary pull-right">
                             Update shopping cart
                         </a>
                     </div>
                 </div>
                 
                 <div class="card-footer">
                     <div class="pull-right" style="margin: 10px">
                         <form method="post" >
                         <input type="submit" name="button1" class="btn btn-success pull-right"
                            value="Buy"/>
                         <div class="pull-right" style="margin: 5px">
                             Total price: <b>50.00€</b>
                         </div>
                     </div>
                 </div>
             </div>
     </div>
     <br>

<?php
include ("footer.html");
?>

   <!-- Bootstrap core JavaScript -->
   <script src="vendor/jquery/jquery.min.js"></script>
   <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>

