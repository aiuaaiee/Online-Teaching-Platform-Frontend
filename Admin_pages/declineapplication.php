<?php
	
    include 'dbcon.php';  
    $ID= $_GET['ID'];
    $result = $mysqli->query("DELETE FROM teachregs WHERE id = '".$ID."'");
   
	header('location:applications.php');
?>	