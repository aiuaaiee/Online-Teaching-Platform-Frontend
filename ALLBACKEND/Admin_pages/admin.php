<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Applications</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://kit.fontawesome.com/32e61978bf.js" crossorigin="anonymous"></script>
	<link href="admin.css" rel="stylesheet">
</head>

<div class="container">
    <!--navbar-->
    <nav class = "navbar navbar-expand-md sticky-top">
        <nav class = "navbar navbar-expand-md sticky-top">
            <div class = "container-fluid">
                <a class = "navbar-brand" href="availability.html"><h1>Online Teaching Platform</h1></a>
                <div class = "collapse navbar-collapse" id = "navbarResponsive">
                    <ul class = "navbar-nav ms-auto">
                        <li class = "nav-item">
                            <a class = "nav-link" href = "#" style="color: #EE6C4D;"><i class="far fa-bell"></i></a>
                        </li>
                        <li class = "nav-item">
                            <a class = "nav-link" href = "#" style="color: #EE6C4D;"><i class="far fa-envelope"></i></a>
                        </li>
                        <li class = "nav-item">
                            <a class = "nav-link" href = "#"><i class="fas fa-user" style="margin-right: 5px;"></i>John Doe | Admin</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </nav>
    <main>
        <!--article-->
        <div id="content1">
            <div id="container1">
                <div class="article">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>

        <!--content-->
        <div id="content7">
        <div class="container3">
            <div class="row">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card">
            <span class="card-header">
              <span class="card-title">

                <?php

                include 'dbcon.php';

                $query = "SELECT id FROM teachregs ORDER BY id";
                $query_run = mysqli_query($mysqli, $query);

                $row = mysqli_num_rows($query_run);

                echo '<h1>' . $row . '</h1>';
                ?>
                
                <h6>Number of Instructors</h6>
              </span>
            </span>
            <button onclick="location.href = 'instructorslist.html';" class="card-meta">
                More Info <i class="fas fa-arrow-right"></i>
              </button>
            </div>
            </div>
          
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                <span class="card-header">
                    <span class="card-title">

                    <?php

                    include 'dbcon.php';

                    $query = "SELECT id FROM teachregs ORDER BY id";
                    $query_run = mysqli_query($mysqli, $query);

                    $row = mysqli_num_rows($query_run);

                    echo '<h1>' . $row . '</h1>';
                    ?>

                    <h6>Number of Learners</h6>
                    </span>
                </span>
                <button onclick="location.href = 'learnerslist.html';" class="card-meta">
                    More Info <i class="fas fa-arrow-right"></i>
                </button>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card">
                <span class="card-header">
                <span class="card-title">
                    <h1>6</h1>
                    <h6>Courses</h6>
                </span>
                </span>
                <button onclick="location.href = 'admin.html';" class="card-meta">
                    More Info <i class="fas fa-arrow-right"></i>
                </button>
            </div>
            </div>
            </div>
            </div>

        </div>
        
    
    </main>

    <!--sidebar-->
    <div id="sidebar">
        <div class="wrapper">
            <input type="checkbox" id="btn" hidden>
            <label for="btn" class="menu-btn">
            <i class="fas fa-bars" style="color: white; padding-left: 100%; padding-top: 10px;  "></i>
            
            </label>
            <nav id="sidebar">
               <div class="title">
                  
               </div>
               <ul class="list-items">
                  <li><a href="admin.html"><i class="fas fa-house" style="color: white;"></i>Dashboard</a></li>
                  <li><a href="#"><i class="fas fa-book" style="color: white;"></i>Courses</a></li>
                  <li><a href="./applicants/appli.php"><i class="fas fa-users" style="color: white;"></i>Applications</a></li>
                  <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                     <i class="fas fa-user" style="color: white;"></i>Accounts</button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li><a href="./instructorslist/instructorslist.php">Instructors List</a></li>
                      <li><a href="learnerslist.php">Learners List</a></li>
                    </ul>
                  </div>
               </ul>
        </nav>
        </div>
    </div>

    

    <script src="admin.js"></script>
</div>
</html>