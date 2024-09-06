<?php
    include '../includes/connection.php';
    if(isset($_POST['create_task'])){
        $query="INSERT into tasks values ( null, $_POST[description],
        $_POST[start_date],$_POST[end_date],'Not started' )";
        $query_run=mysqli_query($connection,$query);
        if($query_run){
            echo "<script type='text/javascript'>
            alert('Task created successfully');
            window.location.href='admin_dashboard.php';
            </script>
            " ;
        }
        else{
            "<script type='text/javascript'>
            alert('please try again');
            window.location.href='admin_dashboard.php';
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
    <title>Admin Dashboard</title>
    <script src="../includes/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script type="text/javascript"> 
        $(document).ready(function(){
            $("#create_task").click(function(){
                $("#right_sidebar").load("create_task.php");

            });
        });
    </script>
</head>
<body>
    <div class="row header" id="header">
        <div class="col-md-12" >
            <div class="col-md-4" style="display:inline-block;">
                <h3> Task Management System</h3>
            </div>
            <div class="col-md-6" style="display:inline-block; text-align:right">
                <b> Email:</b> user@gmail.com
                <span style="margin-left:25px;"><b>Name:</b>user </span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2" id="left_sidebar">
            <table class="table">
                <tr>
                    <td style="text-align:center">
                        <a href="admin_dashboard.php" type="button"> Dashboard</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center">
                        <a  type="button" id="create_task"> Create task</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center">
                        <a  type="button" id="manage_task"> Manage Task</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center">
                        <a  type="button" id="leave_view"> Leave Applications</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center">
                        <a href="index.php" type="button"> Log out </a>
                    </td>
                </tr>
            </table>

        </div>
        <div class="col-md-10" id="right_sidebar">
            <h4>Instructions for Admin</h4>
            <ul>
                <li> Everyone must complete the task assigned to them.</li><br>
                <li> Complete all the tasks in time.</li><br>
                <li> Maintain the decorum of the company.</li><br>
                <li> Keep office and your area neat and clean.</li><br>
            </ul>

        </div>
    </div>
</body>
</html>