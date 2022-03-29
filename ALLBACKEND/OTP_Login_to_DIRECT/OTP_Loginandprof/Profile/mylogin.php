<?php
    

    $email = $_POST['email'];
    $password = $_POST['password'];

    //Database connection here
    $con = new mysqli('localhost', 'root', '', 'main_register');
    $sql = "select * from studreg where email = '$email' and password = '$password'";
    $sql2 = "select * from teachreg where email = '$email' and password = '$password'";
    $res = mysqli_query($con, $sql);
    $res2 = mysqli_query($con, $sql2);
    
    if($con->connect_error) {
        die("Failed to connect: ".$con->connect_error);
    } 
    else{
        $stmt = $con->prepare("SELECT * FROM `studreg` WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        $stmt2 = $con->prepare("SELECT * FROM `teachregs` WHERE email = ?");
        $stmt2->bind_param("s", $email);
        $stmt2->execute();
        $stmt_result2 = $stmt2->get_result();
        if($stmt_result->num_rows > 0) {
            $data = $stmt_result->fetch_assoc();
            if($data['password'] === $password) {
                require 'studprofile.php';
                header('Location:../../../Learner_sTab/Learner_sTab.php');
            }
            else {
                     echo '<script>
                                    if(confirm("Invalid E-mail or Password")) document.location = "../OTP_Login/login.php";
                    </script>';
                }
    }
        elseif($stmt_result2->num_rows > 0){
            $data = $stmt_result2->fetch_assoc();
            if($data['password'] === $password) {
                  header('Location:../../../TEACHERS_TAB_OTP/Educator_sTab/Educator Tab.php');
                }
                else{
                    echo '<script>
                                    if(confirm("Invalid E-mail or Password")) document.location = "../OTP_Login/login.php";
                    </script>';
        }
        }
        else{
               

           
        }
    }


    
    ?>