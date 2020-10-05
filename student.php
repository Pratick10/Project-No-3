<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1st Class</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<?php include 'connection.php'; ?>
<body>
    <div class="container">
        <div>
            <h2>Add Student</h2>
        </div>

        <div class="row">
            <div class="col-md-8">
                <form method="post" action="">
                    

                    <div class="form-group">
                        <label for="">Student ID</label>
                        <input type="text" class="form-control" placeholder="Student ID" name="id" id="id">
                    </div>
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" placeholder="Name" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="Password" class="form-control" placeholder="Password" name="password" id="password">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" placeholder="Email" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="">Roll</label>
                        <input type="text" class="form-control" placeholder="Roll" name="roll" id="roll">
                    </div>


               
                        </select>
                    </div>

                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="submit" value="Add Student">

                        <a class="btn btn-danger" href="studentlist.php">List All Students</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php
   if(isset($_POST['submit'])) {

   

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $roll = $_POST['roll'];
    $str = "INSERT INTO student (id,name,email,password,roll)
     VALUES ('".$id."', '".$name."', '".$email."', '".$password."','".$roll."' )";
    if(mysqli_query($conn, $str)) {
        header('Location: student.php');
   
 
    }
   }

?>