<?php
$hostname ="localhost";
$username = "root";
$password = "";
$db = "main_register";


$mysqli = mysqli_connect($hostname, $username, $password, $db);

if(!$mysqli){
    die("Connection Failed ".mysqli_connect_error());
}
?>