<?php
$hostname ="localhost";
$username = "root";
$password = "";
$db = "main_register";
$port = "3307";

$mysqli = mysqli_connect($hostname, $username, $password, $db, $port);

if(!$mysqli){
    die("Connection Failed ".mysqli_connect_error());
}
?>