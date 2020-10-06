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
                        <input type="text" class="form-control" placeholder="roll" name="roll" id="roll">
                    </div>
                    <div class="form-group">
                        <label for="">Role</label>
                        <input type="text" class="form-control" placeholder="Role" name="role" id="roll">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="submit" value="Add Student">
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
    $role = $_POST['role'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $roll = $_POST['roll'];
    $str = "INSERT INTO student (id,name,email,password,roll)
     VALUES ('".$role."', '".$name."', '".$email."', '".$password."','".$roll."' )";
    if(mysqli_query($conn, $str)) {
        header('Location: studentlist.php');
    }
}
?>
