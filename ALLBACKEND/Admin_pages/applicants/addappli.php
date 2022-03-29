<?php 
include "dbcon.php";
$confirm = false;
$id = 0;
if (isset($_GET['confirm'])){
    $id = $_GET['confirm'];
    $addquer = "INSERT INTO teachregs (fname,mname,lname,email,cntc) 
    SELECT fname,mname,lname,email,cntc FROM teach WHERE id=$id";
    $mysqli->query($addquer) or die($mysqli->error);

    // DELETE DATA FROM TEACH REG AFTER TRANSFERING DATA ROWS
    $delquer = "DELETE FROM teach WHERE id=$id";
    $mysqli->query($delquer) or die($mysqli->error);

    include_once "appli.php";
   

}
?>
