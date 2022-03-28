<?php
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$cntc = $_POST['contact'];
	$password = $_POST['password'];
	
	// Database connection
	$conn = new mysqli('localhost','root','','main_register');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} 
	$target = "lic/".basename($_FILES['teachli']['name']);
	$target2 = "resume/".basename($_FILES['res']['name']);

	$image = $_FILES['teachli']['name'];
	$cv = $_FILES['res']['name'];

	$sql = "INSERT INTO studreg (pix,poi) VALUES ('$cv','$image')";
	$stmt = $conn->prepare("insert into teach(fname, mname, lname, email, cntc, password, tl, res) values(?, ?, ?, ?, ?, ?,?,?)");
	$stmt->bind_param("ssssssss", $fname, $mname, $lname, $email, $cntc, $password,$cv,$image);
	$execval = $stmt->execute();
	echo $execval;
	move_uploaded_file($_FILES['teachli']['tmp_name'], $target) && move_uploaded_file($_FILES['res']['tmp_name'], $target2);
	
	echo "Registration successfully";
	$stmt->close();
	$conn->close();
	
?>