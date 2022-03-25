<?php
    include 'dbcon.php';    
?>
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
	<link href="admin1.css" rel="stylesheet">
</head>

<body>
     <!--navbar-->
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
                        <a class = "nav-link" href = "#"><i class="fas fa-user"></i>John Doe | Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<br><br><br><br>
     <!--sidebar-->
     <div class="wrapper">
        <input type="checkbox" id="btn" hidden>
        <label for="btn" class="menu-btn">
        <i class="fas fa-bars"></i>
        <i1 class="fas fa-bars"></i1>
        </label>
        <nav id="sidebar">
           <div class="title">
              
           </div>
           <ul class="list-items">
              <li><a href="admin.html"><i class="fas fa-house"></i>Dashboard</a></li>
              <li><a href="#"><i class="fas fa-book"></i>Courses</a></li>
              <li><a href="applications.php"><i class="fas fa-users"></i>Applications</a></li>
              <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                 <i class="fas fa-user"></i>Accounts</button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a href="instructorslist/instructorslist.php">Instructors List</a></li>
                  <li><a href="learnerslist.php">Learners List</a></li>
                </ul>
              </div>
           </ul>
    </nav>
    </div>

    <!--article-->
    <div id="container1">
    <div class="article">
        <h1>Applications List</h1>
    </div>
    </div>

    <!--applications list-->
    <div class="container">
    <form class="search-btn">
        <input type="text" id="myFilter" placeholder="  Search User" name="" onkeyup="searchUser()">
    </form>
    <table id="myUser"> 
        <colgroup>
          <col>
          <col>
          <col>
          <col>
          <col>
        </colgroup>
        <tr>
          <th>User ID</th>
          <th>Fullname</th> 
          <th>Email</th>
          <th>Contact</th>
          <th>Status <i class="fas fa-angle-down" type="button"></i></th>
          <th colspan="2">Action</th>
        </tr>
        <form method="post" action ="">
        <?php
           
            $result = $mysqli->query("SELECT * FROM teachregs ORDER BY id") ;           
            while ($data= $result->fetch_assoc()){

        ?>
        <tr>
          <td><?php echo $data['id'];?></td>
          <td><?php echo $data['fname'];?> <?php echo $data['mname'];?> <?php echo $data['lname'];?></td>
          <td><?php echo $data['email'];?></td>
          <td><?php echo $data['cntc'];?></td>
          <td><?php echo $data['status'];?></td>
          <td>
          <?php
                if ($data['status']=="Pending") {
                    ?><button class="confirm-btn"><a type = "submit" name="confirm "href="updateapplication.php?ID=<?php echo $data['id'];?>">Confirm</a></button>
                   <?php
                }
                else{
                    ?><button  class="confirmed-btn">Confirmed</button></td><?php
                }
          ?>  
            
          <td>
          <?php
                if ($data['status']=="Pending") {
                    ?><button class="decline-btn"><a style="color:red;"type = "submit" name="decline "href="declineapplication.php?ID=<?php echo $data['id'];?>">Decline</a></button>
                   <?php
                }
                
          ?>  
            </td>
        </tr>     
        <?php
        }
        ?>
        </form>
        



      </table>
    </div>
    <script src="admin.js"></script>
    </html>
</body>