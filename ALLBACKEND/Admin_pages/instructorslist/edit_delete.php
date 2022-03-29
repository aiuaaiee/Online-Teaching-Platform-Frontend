<?php

include '../dbcon.php';

$update = false;

$id = 0;

$fname = '';
$mname = '';
$lname = '';
$email = '';
$homeadd = '';
$password = '';


if (isset($_POST['save'])) {
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $cntc = $_POST['cntc'];
    $password = $_POST['password'];

    $mysqli->query("INSERT INTO `teachregs`(`fname`, `mname`, `lname`, `email`, `cntc`, `password`, `tl`, `res`) 
    VALUES ('$fname','$mname','$lname','$email','$cntc','$password','$pix', '$poi')") 
        or die(mysqli_error($mysqli));

    header("location:  instructorslist.php");
}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM `teachregs` WHERE id=$id") 
        or die(mysqli_error($mysqli));

    header("location:  instructorslist.php");
}

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM `teachregs` WHERE id=$id")
        or die($mysqli->error);
    if ($result->num_rows){
        $row = $result->fetch_array();
        $fname = $row['fname'];
        $mname = $row['mname'];
        $lname = $row['lname'];
        $email = $row['email'];
        $cntc = $row['cntc'];
        $password = $row['password'];

    }

}

if (isset($_POST['update'])){
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $cntc = $_POST['cntc'];
    $password = $_POST['password'];


    $mysqli->query("UPDATE `teachregs` SET `fname`='$fname',`mname`='$mname',`lname`='$lname',`email`='$email',
    `cntc`='$cntc',`password`='$password' WHERE id=$id")
        or die($mysqli->error);

    header("location:   instructorslist.php");
}
