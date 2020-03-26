<?php
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
  $sql = 'SELECT * FROM  products  ';
  $result = $mysqli->query($sql);

?>

<!DOCTYPE html>
<html lang="de">

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

<body>

  <!-- Navigation -->
  <?php
    include ("nav.php");
    ?>
  <main>
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
                                     <img class="img-responsive" src="<?php echo $row['bild'] ?>" alt="prewiew" width="120" height="80">
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
                         <a href="" class="btn btn-success pull-right">Kaufen</a>
                         <div class="pull-right" style="margin: 5px">
                             Total price: <b>50.00€</b>
                         </div>
                     </div>
                 </div>
             </div>
     </div>
     <br>
</main>

<?php
include ("footer.html");
?>

   <!-- Bootstrap core JavaScript -->
   <script src="vendor/jquery/jquery.min.js"></script>
   <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>

