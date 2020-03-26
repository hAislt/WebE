<?php
$connection=mysqli_connect("localhost", "root", "", "Register");
session_start();

$name = $_POST["user"];
$password = $_POST["password"];

$q ="SELECT COUNT(*) as count FROM user WHERE name='$name' and password='$password'";
$result=mysqli_query($connection, $q);

$array = mysqli_fetch_array($result);

if($array['count'] > 0){
    $_SESSION['username'] = $name;
    header("location: index.php");
} else {
    echo "ERROR";
}
