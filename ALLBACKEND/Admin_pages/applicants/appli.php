<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Instructors List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://kit.fontawesome.com/32e61978bf.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../admin.css?v=<?php echo time(); ?>">
</head>
 <?php
            include 'dbcon.php';
            $result = $mysqli->query("SELECT * FROM teach") or die($mysqli->error);
        ?>
<div class="container">
    <nav>
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
        
    </nav>
    <main>
        <!--article-->
        <div id="content1">
            <div id="container1">
                <div class="article">
                    <h1>Teacher Applicants List</h1>
                </div>
                </div>
        </div>

        <!--instructors list-->
        <div id="content5">
            <div class="container2">
                <button id="myBtn"><i class="fas fa-plus"></i> Add Instructor</i></button>
                <div id="addInstructor" class="instructor">
             <!--add instructor inside-->
                <div class="instructors-content">
                    <div class="instructors-header">
                    <span class="close">&times;</span>
                    </div>
                    <div class="instructors-body">
                        <h3 style="font-weight: bold;">Add Instructor</h3>
                        <div class="i-container">
                            <form action="/">
                            <div class="row">
                            <div class="col-25">
                                <label for="fname">First Name</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="fname" name="firstname" placeholder="Your name..">
                            </div>
                            </div>

                            <div class="row">
                            <div class="col-25">
                                <label for="lname">Last Name</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                            </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                <label for="uname">Username</label>
                                </div>
                                <div class="col-75">
                                <input type="text" id="uname" name="username" placeholder="Your username..">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                <label for="eaddress">Email Address</label>
                                </div>
                                <div class="col-75">
                                <input type="text" id="eaddress" name="email address" placeholder="Your email address..">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                <label for="haddress">Home Address</label>
                                </div>
                                <div class="col-75">
                                <input type="text" id="haddress" name="home address" placeholder="Your home address..">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                <label for="country">Country</label>
                                </div>
                                <div class="col-75">
                                <input type="text" id="country" name="country" placeholder="Your country..">
                                </div>
                            </div>
                            
                            <div class="row">
                            <div class="col-25">
                                <label for="contactno">Contact No.</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="contactno" name="contactno" placeholder="Your contact no..">
                            </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                <label for="password">Password</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="password" name="password" placeholder="Your password..">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="password">User Image</label>
                                </div>
                                <div class="col-75">
                                    <div class="mb-3">
                                        <input class="form-control" type="file" id="formFile">
                                    </div>
                                </div>
                            </div>

                            <br>
                            <div class="submit-btn">
                            <input type="submit" value="Submit">
                            </div>
                            </form>
                        </div>
                    
                    </div>
                    <div class="instructors-footer">
                    </div>
                </div>
                </div>
        </div>

        <div id="content6">
            <form class="search-btn1">
                <input type="text" id="myFilter" placeholder="  Search User" name="" onkeyup="searchUser1()">
            </form>        
        </div>

        <div id="content4">
           <!-- TABLE -->
            <table class="table table-responsive">
                <thead class="table-he">
                    <tr class="text-center">
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Contact #</th>
                        <th>Password</th>
                        <th>Confirmed</th>
                         <th>Delete</th>
                    </tr>
                </thead>

                <?php
                     while ($row = $result->fetch_assoc()):
                ?>

                    <tr>
                        <td><?php echo $row['id']?></td>
                        <td><?php echo $row['fname']?></td>
                        <td><?php echo $row['mname']?></td>
                        <td><?php echo $row['lname']?></td>
                        <td><?php echo $row['email']?></td>
                        <td><?php echo $row['cntc']?></td>
                        <td><?php echo $row['password']?></td>
                        <td class="">
                            <a href="addappli.php?confirm=<?php echo $row['id'];?>"
                                class="btn btn-info" name="confirm">Confirm</a>
                        </td>
                        <td>
                            <a href="remappli.php?delete=<?php echo $row['id'];?>"
                                class="btn btn-danger" name="delete">Delete</a>
                        </td>
                    </tr>

                <?php endwhile; ?>

            </table>



           
        </div>
        
    </main>
    <div id="sidebar">
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
                      <li><a href="../admin.html"><i class="fas fa-house" style="color: white;"></i>Dashboard</a></li>
                      <li><a href="#"><i class="fas fa-book" style="color: white;"></i>Courses</a></li>
                      <li><a href="../applicants/appli.php"><i class="fas fa-users" style="color: white;"></i>Applications</a></li>
                      <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                         <i class="fas fa-user" style="color: white;"></i>Accounts</button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a href="../instructorslist/instructorslist.php">Instructors List</a></li>
                          <li><a href="../learnerslist.php">Learners List</a></li>
                        </ul>
                      </div>
                   </ul>
            </nav>
            </div>
        </div>
    </div>
    <footer>

    </footer>
    <script src="admin.js"></script>
    <script src="instructor.js"></script>
</div>
</html>