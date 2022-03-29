<?php
	
    include 'dbcon.php';    
    $ID= $_GET['ID'];
    $result = $mysqli->query("UPDATE teachregs SET status='Confirmed' WHERE id = '".$ID."'");
    $result1 = $mysqli->query("SELECT * FROM teachregs WHERE id = '".$ID."'");
    $row = $result1->fetch_assoc();

    $result3 = $mysqli->query("INSERT INTO teach(id, fname, mname, lname, email, cntc, password, tl, res, socmed, pwe, about, skill, subject) 
        VALUES ('".$row['id']."',
            '".$row['fname']."',
            '".$row['mname']."',
            '".$row['lname']."',
            '".$row['email']."',
            '".$row['cntc']."',
            '".$row['password']."',
            '".$row['tl']."',
            '".$row['res']."',
            '".$row['socmed']."',
            '".$row['pwe']."',
            '".$row['about']."',
            '".$row['skill']."',
            '".$row['subject']."')");
	header('location: applications.php');
?>	