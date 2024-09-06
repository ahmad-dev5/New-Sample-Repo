<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <script src="includes/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="row header" id="header">
        <div class="col-md-12" >
            <div class="col-md-4" style="display:inline-block;">
                <h3> Task Management System </h3>
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
                        <a href="user_dashboard.php" type="button"> Dashboard</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center">
                        <a href="manage_task.php" type="button"> Update task</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center">
                        <a href="apply_leave.php" type="button"> Apply Leave</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center">
                        <a href="view_leave.php" type="button"> Leave Status</a>
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
            <h4>Instructions for employees</h4>
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