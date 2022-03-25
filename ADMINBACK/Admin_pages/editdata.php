<!DOCTYPE html>
<html>
    <head>
        <title>User</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://kit.fontawesome.com/32e61978bf.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php require_once 'edit_delete.php'; ?>
        <div class="row justify-content-center">
        <form action="edit_delete.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <br>
            <center>
            <h1>User Edit Form</h1>
            <p>Please fill in this form to edit information.</p>
            <hr>
            <table class="table table-danger text-center">
                
                    <tr>
                        <td >
                        <b>First Name</b>
                        </td>
                        <td>
                            <input type="text" name="fname" class="form-control" value="<?php echo $fname; ?>" placeholder="First Name" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <b>Middle Name</b>
                        </td>
                        <td>
                             <input type="text" name="mname" class="form-control" value="<?php echo $mname; ?>" placeholder="Middle Name" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Last Name</b>
                        </td>
                        <td>
                            <input type="text" name="lname" class="form-control" value="<?php echo $lname; ?>" placeholder="Last Name" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>E-mail</b>
                        </td>
                        <td>
                             <input type="text" name="email" class="form-control" value="<?php echo $email; ?>" placeholder="Email" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Contact #</b>
                        </td>
                        <td>
                              <input type="text" name="homeadd" class="form-control" value="<?php echo $homeadd; ?>" placeholder="Contact #" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Password</b>
                        </td>
                        <td>
                             <input type="text" name="password" class="form-control" value="<?php echo $password; ?>" placeholder="Password" required>
                        </td>
                    </tr>
            </table>
              
            <hr>
            <br>
            <div class="form-group">
                <?php if ($update == true): ?>
                    <button type="submit" class="btn btn-info" name="update">Update User</button>
                <?php else: ?>
                    <button type="submit" class="btn btn-primary" name="save">Add User</button>
                <?php endif; ?>
                    <a href="learnerslist.php"><button type="button" class="btn btn-danger">Cancel</button></a>
            </div>
            </center>
        </form>
        </div>
    </body>
</html>