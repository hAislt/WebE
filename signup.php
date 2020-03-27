<?php

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
  <script src="validate.js"></script>
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/main.css" rel="stylesheet"> 

</head>

<body>

<?php
  include ("old_nav.php");
  ?>

  
  <main>
  
<!-- Login Box -->
    
    <div class="container_login">
    <img src="images/icon.jpg" class="icon"> 
    <h1>Signup</h1>
    <form class ="loginform" action="registerdb.php" method="POST" onsubmit="return validate();">
    <input type="text" id="name" name="user" placeholder="Enter your username">
    <input type="text" id="email" name="email" placeholder="Enter your Email" >
    <input type="password" id="password" name="password" placeholder="Enter your password"><br>
    
    <button type="submit" name="submit" class="button">Sign up</button>
    </form>
   <a>Already have an account?  </a><a href="login.php">Log in</a>
    
    </div> 

  </main>

  <?php
    include ("footer.html");
    ?>


   
   </body>
   
   </html>