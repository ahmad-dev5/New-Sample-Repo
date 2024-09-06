<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <h3>create a new task</h3>
    <div class="row">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="form-group">
                    <label for=""> --Select User-- </label>
                    <select class="form-control" name="id">
                        <option > --select </option>
                        <?php
                        include '../includes/connection.php';
                        $query= "SELECT uid,name from users";
                        $query_run= mysqli_query($connection,$query);
                        if(mysqli_num_rows($query_run)){
                            while($row=mysqli_fetch_assoc($query_run)){
                                ?>
                                <option value="<?php echo $row['uid']; ?>"><?php echo $row['name']; ?></option> 
                                <?php     
                            }
                        }
                        ?>
                    </select>

                </div>
                <div class="form-group">
                    <label > Description:

                    </label>
                    <textarea class="form-control" rows="3" cols="50" name="description" 
                    id="" placeholder="mention the task " ></textarea>
                </div>
                <div class="form-group">
                    <label for=""> Start Date:</label>
                    <input type="text" class="form-control" name="start_date">
                </div>
                <div class="form-group">
                    <label for=""> End Date:</label>
                    <input type="text" class="form-control" name="end_date">
                </div>
                <input type="submit" class="btn btn-warning" name="create_task"
                >
            </form>
        </div>
    </div>

</body>
</html>