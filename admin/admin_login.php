<?php
    include '../includes/connection.php';
    if(isset($_POST['adminlogin'])){
        $query=" SELECT email,password,name FROM admins where email='$_POST[email]' and 
        password='$_POST[password]'";
        $result=mysqli_query($connection,$query);
        if(mysqli_num_rows($result)){
            echo "<script type='text/javascript'>
            window.location.href='admin_dashboard.php';
            </script>
            " ;
        }
        else{
            echo "<script type='text/javascript'>
            alert('Credentials Wrong. Plese try again.');
            window.location.href='admin_login.php';
            </script>
            " ;
        }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TMS | Admin </title>
    <script src="../includes/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    

</head>
<body style="background-color: #59b4d8;">
    <div class="row">
        <div class="col-md-3 m-auto" >
            <center><h3 style="margin-top: 150px;">Admin Login</h3>
            <form action="" method="post" id="login_home_page">
                <div class="form-group" style="padding-bottom: 10px;">
                    <input type="email" name="email" class="form-group" placeholder="Enter email" required>

                </div>
                <div class="form-group" style="padding-bottom: 10px;">
                    <input type="password" name="password" class="form-group" placeholder="Enter password" required>
                    
                </div>
                <div class="form-group" style="padding-bottom: 10px;">
                    <input type="submit" name="adminlogin" value="login" class="btn btn-warning">
                </div>
                
            </form>
            <a href="../index.php" class="btn btn-danger"> Back to Home</a>
            </center>

        </div>
    </div>
    
</body>
</html>