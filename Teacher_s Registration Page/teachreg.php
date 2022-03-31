<?php include('connect_teacher.php') ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher's Registration</title>
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>

    <header class="header">
        <a href="#" class="logo">
            <img src="Image/logo update 2.png" width="60%">
        </a>
        <nav class="navbar">
            <a href="../Homepage/homepage.html">Home</a>
            <a href="../OTP_Login/login.html">Sign In</a>
            <a href="../Signup/Reg.html">Sign Up</a>
            <a href="../FAQs pages/FQAsPage/index.html">FAQs</a>
        </nav>
    </header>

    <br> <br>
    <br> <br>
    <br> <br>

    <div class="registration-form">
        <h2>Instructor's Registration<span></span></h2><br>
        <h3>Please fill out the Information</h3><br>
        <form action="connect_teacher.php" enctype="multipart/form-data" method="POST">

            <input type="text" id="fname" name="fname" placeholder="Firstname" required><br><br>
            <input type="text" id="mname" name="mname" placeholder="Middlename" required><br><br>
            <input type="text" id="lname" name="lname" placeholder="Lastname" required><br><br>
            <input type="text" id="email" name="email" placeholder="Email Address" required><br><br>
            <input type="text" id="cntc" name="cntc" placeholder="Contact Number" required><br><br>
            <input type="password" name="password_1" placeholder="Password" required><br><br>
            <input type="password" name="password_2" placeholder="Confirm Password" id="myInput" required><br><br>
            <?php include ('errors.php'); ?>

            
                <label for="subjects">Select a subject to teach:</label><br><br>
                <select name="subject" id="subjects">
                    <option value="select">Select a subject</option>
                    <option value="Mathematics">Mathematics</option>
                    <option value="Science">Science</option>
                    <option value="English">English</option>
                    <option value="Filipino">Filipino</option>
                    <option value="History">History</option>
                </select>
                <br><br>

            <h3>Additional Information</h3><br>
            <p>Upload your resume here:</p><br>
            
                <input type="file" name="res" required><br><br>
                <p>Upload your teacher's license here:</p><br>
                
                    <input type="file" name="teachli" required><br><br>
                    <label class="container">
                        <input type="checkbox" required>
                        <p>By checking this box, you are agreeing to our terms of service </p>
                        <span class="checkmark"></span>
                    </label>

                    <button type="submit" name="reg_user">Register</button>


                </form>
    </div>

</body>

</html>