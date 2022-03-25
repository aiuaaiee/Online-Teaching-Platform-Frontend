<?php

$mysqli = new mysqli('localhost', 'root', '', 'main_register') or die(mysqli_error($mysqli));

$update = false;

$id = 0;

$fname = '';
$mname = '';
$lname = '';
$email = '';
$homeadd = '';
$password = '';
$pix = '';
$poi = '';

if (isset($_POST['save'])) {
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $homeadd = $_POST['homeadd'];
    $password = $_POST['password'];
    $pix = $_POST['pix'];
    $poi = $_POST['poi'];

    $mysqli->query("INSERT INTO `studreg`(`fname`, `mname`, `lname`, `email`, `homeadd`, `password`, `pix`, `poi`) 
    VALUES ('$fname','$mname','$lname','$email','$homeadd','$password','$pix', '$poi')") 
        or die(mysqli_error($mysqli));

    header("location:  learnerslist.php");
}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM `studreg` WHERE id=$id") 
        or die(mysqli_error($mysqli));

    header("location: learnerslist.php");
}

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM `studreg` WHERE id=$id")
        or die($mysqli->error);
    if ($result->num_rows){
        $row = $result->fetch_array();
        $fname = $row['fname'];
        $mname = $row['mname'];
        $lname = $row['lname'];
        $email = $row['email'];
        $homeadd = $row['homeadd'];
        $password = $row['password'];
        $pix = $row['pix'];
        $poi = $row['poi'];
    }

}

if (isset($_POST['update'])){
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $homeadd = $_POST['homeadd'];
    $password = $_POST['password'];
    $pix = $_POST['pix'];
    $poi = $_POST['poi'];

    $mysqli->query("UPDATE `studreg` SET `fname`='$fname',`mname`='$mname',`lname`='$lname',`email`='$email',
    `homeadd`='$homeadd',`password`='$password',`pix`='$pix',`poi`='$poi' WHERE id=$id")
        or die($mysqli->error);

    header("location:  learnerslist.php");
}
