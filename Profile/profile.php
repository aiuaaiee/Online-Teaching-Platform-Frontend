
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css.css'>
    <script src='main.js'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
    <header class="header">
        <a href="#" class="logo">
            <img src="images/" alt="">
        </a>
        <h1 class="header_title text-primary">Online Teaching Platform </h1>
        <nav class="navbar">
            <a href="#">Home</a>
            <a href="#">Sign in</a>
            <a href="#">Sign up</a>
            <a href="#">FAQs</a>
        </nav>
    </header>
   
</div>

    <div class="row container-fluid p-2">
        <div class="col-lg-2 col-md-2 col-sm-2 m-1 mt-5">
             <h1 class="display-4">
                Profile 
             </h1>
            <div class="text-left ">
            <img src="images/profile.png" >
            </div>
        </div>

        <div class="col-lg-9 col-md-10 col-sm-10 pl-5">
             <br><br><br>
             <h1>
             <?php include 'mylogin.php' ?>
             </h1>
             <h5>Teacher</h5>
             <h5>ENGLISH</h5>
             <p class="display-5"> <h5>About:</h5> <p contenteditable="true">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, alias! Amet ducimus voluptatem tempore, fugiat magnam nobis laboriosam nihil assumenda odit aliquam, quis minima ex vitae sint delectus ullam ea.</p> </p>
             <h5>Skill:</h5> <p contenteditable="true"> Read books, Research internet, learn history, making website</p>
             <h5>E-mail:</h5> <p class="">juan@gmail.com</p>
            
            </div>

    </div>
 
</body>
</html>