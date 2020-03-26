<?php
$connection=mysqli_connect("localhost", "root", "", "Register");

$name = $_POST["user"];
$email = $_POST["email"];
$password = $_POST["password"];

$insert = "INSERT INTO user(name, email, password) VALUES ('$name', '$email', '$password')"; 

$result = mysqli_query($connection, $insert);
if(!$result){
    echo 'Error';
}else{
    header("location:login.php");
}
mysqli_close($connection);

?>
