<!DOCTYPE html>
<html>
  <head>
    <title>REGISTRATION</title>
  </head>
    <h1>TEACHER'S REGISTER</h1>
    <link rel="stylesheet" href="css.css">
    <form action="connect.php" enctype="multipart/form-data" method="POST" >
  <body>
        <table>
            <th colspan="2">FORM</th>
            <tr>
            <td>First name</td>
            <td><input type="text" name="fname" id="fname" placeholder="firstname"></td>
            </tr>
            <tr>
            <td>Middle name</td>
            <td><input type="text" name="mname" id="mname" placeholder="middlename"></td>
            </tr>
            <tr>
            <td>Lastname</td>
            <td><input type="text" name="lname" id="lname" placeholder="lastname"></td>
            </tr>
            <tr>
            <td>Email</td>
            <td><input type="text" name="email" id="email" placeholder="email"></td>
            </tr>
            <tr>
            <td>Contact No.</td>
            <td><input type="number" name="contact" id="contact" placeholder="09123456789"></td>
            </tr>
            <tr>
            <td>Password</td> 
            <td><input type="password" name="password" id="password" ></td>
            </tr>
            <tr>
            <td>Confirm Password</td>
            <td><input type="password" ></td>
            </tr>
            <tr>
            <td>Teacher's License</td>
            <td><input type="file" name="teachli" ></td>
            </tr>
            <tr>
            <td>
            Resume
            <td><input type="file" name="res"></td>
            </td>
            </tr>
            <th colspan="2"><input type="Submit"></th>
        </table>
    </body>
    </form>
</html>