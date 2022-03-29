
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
    <script src='main.js'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css?v=<?php echo time(); ?>">
</head>

<body>
<div class="container-fluid">
    <header class="header">
        <a href="#" class="logo">
            <img src="images/" alt="">
        </a>
        <h1 class="header_title text-primary">Online Teaching Platform </h1>
        <nav class="navbar">
            <a href="../../../learnersTab/learnerstab.php">Home</a>
            <a href="../../../Availability_Page/availability.html">Availability</a>
            <a href="../../../Homepage/homepage.html">Log out</a>
        </nav>
    </header>
</div>
<!-- ROWWWWWWWWWWWWWWWWWWWWWW -->
   <div class="row container-fluid mt-5 pt-5 justify-content-center">
        <div class="col-lg-3 col-md-2 col-sm-2 asd rounded ml-5">
             <h3 class="display-3 text-center text-secondary">
                Profile 
             </h3>
            <div class="text-center ">
            <img src="images/profile.png" >
            
            </div>
        </div>
    
        <div class="col-lg-8 col-md-10 col-sm-10 asd rounded ml-4 pl-3">
             <h3 class="text-danger">
                <?php
                    include_once 'mylogin.php';
               
                    $con = new mysqli('localhost', 'root', '', 'main_register');
                    $getnm = "SELECT id, fname, lname FROM studreg where email = '$email'";
                    $result = mysqli_query($con,$getnm);
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo("". $row["fname"]. " ". $row["lname"]."");
                            echo "<h5> E-mail: <img src='email.png' class='edit-logo'></h5> $email"."<br><br> ";
                    
                    }
             ?>
               </h1>
                <h5>Contact #: <img src="edit.png" class="edit-logo" alt=""></h5> <p contenteditable="true" class="bg-light">
                    09123456789
                </p>
             <h5>Student</h5>

             <p class="display-5"> 
                 <h5>About: <img src="edit.png" class="edit-logo" alt=""></h5> 
                 <p contenteditable="true" class="bg-light">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, alias! Amet ducimus voluptatem tempore, fugiat magnam nobis laboriosam nihil assumenda odit aliquam, quis minima ex vitae sint delectus ullam ea.</p> </p>
             <h5>Skill: <img src="edit.png" class="edit-logo" alt=""></h5> <p contenteditable="true" class="bg-light"> Read books, Research internet, learn history, making website</p>
            </div>
    </div>
    <div class="row ml-5 container-fluid">
        <div class="col-3">
        </div>
        <div class="col-8 pb-3 ml-4">
            <br>
            <button type="button" class="btn btn-primary" onclick="window.location.reload()">Save</button>
        </div>
    </div>
</body>
</html>