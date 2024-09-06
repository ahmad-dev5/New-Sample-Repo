<?php
    include 'includes/connection.php';
    if(isset($_POST['userregistration'])){
        $sql="INSERT  into users Values (null,'$_POST[name]', '$_POST[email]',
        '$_POST[password]','$_POST[mobile]')";
        $result=mysqli_query($connection,$sql);
        if($result){
            echo "<script type='text/javascript'>
            alert('Registration Successfull');
            window.location.href='index.php';
            </script>
            " ;


    }
    else{
         echo "<script type='text/javascript'>
            alert('Error!!! try again');
            window.location.href='user_register.php';
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
    <title>TMS | register</title>
    <script src="includes/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    

</head>
<body>
    <div class="row">
        <div class="col-md-3 m-auto" >
            <center><h3 style="margin-top: 150px;">User Registration</h3>
            <form action="" method="post" id="login_home_page">
                <div class="form-group" style="padding-bottom: 10px;">
                    <input type="text" name="name" class="form-group" placeholder="Enter name" required>

                </div>
                <div class="form-group" style="padding-bottom: 10px;">
                    <input type="email" name="email" class="form-group" placeholder="Enter email" required>

                </div>
                <div class="form-group" style="padding-bottom: 10px;">
                    <input type="password" name="password" class="form-group" placeholder="Enter password" required>
                    
                </div>
                <div class="form-group" style="padding-bottom: 10px;">
                    <input type="text" name="mobile" class="form-group" placeholder="Enter mobile #" required>

                </div>
                <div class="form-group" style="padding-bottom: 10px;">
                    <input type="submit" name="userregistration" value="register" class="btn btn-warning">
                </div>
                
            </form>
            <a href="index.php" class="btn btn-danger"> Back to Home</a>
            </center>

        </div>
    </div>
    
</body>
</html>