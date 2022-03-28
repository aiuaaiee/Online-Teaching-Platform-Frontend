<?php 
include "dbcon.php";
$confirm = false;
$id = 0;
if (isset($_GET['delete'])){
    $id = $_GET['delete'];

    //DELETE ROWS
    $delquer = "DELETE FROM teach WHERE id=$id";
    $mysqli->query($delquer) or die($mysqli->error);

    include_once "appli.php";
   

}
?>
