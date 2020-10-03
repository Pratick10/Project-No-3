<?php include'header.php';
include'connection.php';
?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Add Student</li>
                </ol>
                <form method="post" action="">

                    <div class="form-group">
                        <label> Student ID </label>
                        <input type="text" class="form-control" name="roll" id="">
                    </div>

                    <div class="form-group">
                        <label> Password </label>
                        <input type="text" class="form-control" name="password" id="">
                    </div>

                    <div class="form-group">
                        <input type="submit" name="submit" value="Add" class="btn btn-primary">

                    </div>

                </form>
            </div>
        </main>
        <?php include'footer.php'?>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    </body>
    </html>

<?php
   if(isset($_POST['submit'])) {

    $id = $_POST['roll'];
    $password = $_POST['password'];
    $str = "INSERT INTO student (roll, password)
       VALUES ('".$id."', '".$password."')";
    if(mysqli_query($conn, $str)) {
        header('Location: studentlist.php');
     echo 'Successfully Inserted';
 
    }
   }

?>