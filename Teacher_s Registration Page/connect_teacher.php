<?php
session_start();

//initialize variables
$fname = "";
$mname= "";
$lname = "";
$email = "";
$cntc = "";
$subject = "";
$errors = array();

// Database connection
$db = new mysqli('localhost','root','','main_register','3307');
if($db->connect_error){
    echo "$db->connect_error";
    die("Connection Failed : ". $db->connect_error);
} 

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $fname = mysqli_real_escape_string($db, $_POST['fname']);
    $mname = mysqli_real_escape_string($db, $_POST['mname']);
    $lname = mysqli_real_escape_string($db, $_POST['lname']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $cntc = mysqli_real_escape_string($db, $_POST['cntc']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
    $subject = mysqli_real_escape_string($db, $_POST['subject']);
    //for file upload
    $target = "lic/".basename($_FILES['teachli']['name']);
	  $target2 = "resume/".basename($_FILES['res']['name']);
	  $image = $_FILES['teachli']['name'];
  	$cv = $_FILES['res']['name'];
	  $sql = "INSERT INTO teachregs (tl,res) VALUES ('$cv','$image')";
  
    // FORM VALIDATION
    //others are optional incase server side validation is needed
    //if (empty($fname)) { array_push($errors, "First name is required"); }
    //if (empty($lname)) { array_push($errors, "Last name is required"); }
    //if (empty($email)) { array_push($errors, "Email is required"); }
    //if (empty($cntc)) { array_push($errors, "Contact Number is required"); }
    //if (empty($password_1)) { array_push($errors, "Password is required"); }
    if ($password_1 != $password_2) {
      array_push($errors, $passErr = "The two passwords do not match");
    }
  
    // Check if email and contact number exist
    $user_check_query = "SELECT * FROM teachregs WHERE cntc='$cntc' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) { // if user exists
      if ($user['cntc'] === $cntc) {
        array_push($errors, "Contact Number already exists");
      }
  
      if ($user['email'] === $email) {
        array_push($errors, "Email already exists");
      }
    }
  
    // Register if no error
    if (count($errors) == 0) {
        //password encryption
        $password = md5($password_1);
  
        $query = "INSERT INTO teachregs (fname, mname, lname, email, cntc, password, tl, res, subject) 
                  VALUES('$fname','$mname','$lname', '$email', '$cntc', '$password', '$image', '$cv', '$subject')";
        mysqli_query($db, $query);
        move_uploaded_file($_FILES['teachli']['tmp_name'], $target) && move_uploaded_file($_FILES['res']['tmp_name'], $target2);
        $_SESSION['username'] = $email;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
    }
  }
?>