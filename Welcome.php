<?php


session_start();

$user = $_SESSION['username'];

echo "<h1> Willkommen $user </h1>";