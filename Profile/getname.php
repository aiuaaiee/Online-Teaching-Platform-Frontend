<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "main_register";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$getnm = "SELECT id, fname, lname FROM teachregs where email = 'jpanofuente@gmail.com'";
$result = $conn->query($getnm);

    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "". $row["fname"]. " ". $row["lname"]."";
   
}
?>