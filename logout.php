<?php
session_start();
$user="";
if(isset($_SESSION["username"])){
 $user = $_SESSION['username']; 
}


session_destroy();
header("Location:login.php");

?>