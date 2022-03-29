<?php
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$homeadd = $_POST['homeadd'];
	$password = $_POST['password'];
	
	// Database connection
	$conn = new mysqli('localhost','root','','main_register');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} 
	$target = "poi/".basename($_FILES['poi']['name']);
	$target2 = "tobto/".basename($_FILES['tobto']['name']);
	$image = $_FILES['poi']['name'];
	$image2 = $_FILES['tobto']['name'];
	$sql = "INSERT INTO studreg (pix,poi) VALUES ('$image2','$image')";
	$stmt = $conn->prepare("insert into studreg(fname, mname, lname, email, homeadd, password, pix, poi) values(?, ?, ?, ?, ?, ?,?,?)");
	$stmt->bind_param("ssssssss", $fname, $mname, $lname, $email, $homeadd, $password,$image2,$image);
	$execval = $stmt->execute();
	echo $execval;
	move_uploaded_file($_FILES['poi']['tmp_name'], $target) && move_uploaded_file($_FILES['tobto']['tmp_name'], $target2);
	echo "Registration successfully";
	$stmt->close();
	$conn->close();
	
?>