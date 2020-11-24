<?php ob_start(); ?>
<?php include'header.php';
include'connection.php';
?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Add Student</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.php"> Back to Dashboard</a></li>
                    <li class="breadcrumb-item active">Add Student</li>
                    <li class="breadcrumb-item "><a href="listAllStudent.php"> List Student</a></li>
                </ol>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Student Name:</label>
                        <input type="text" class="form-control" name="studentname" id="">
                    </div>
                    <div class="form-group">
                        <label for=""> Student Id:</label>
                        <input type="text" class="form-control" name="studentid" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Email:</label>
                        <input type="text" class="form-control" name="email" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Password:</label>
                        <input type="text" class="form-control" name="password" id="">
                    </div>
                   
                    <div>
                        <button onclick="myFunction()" name="submit" id="submit" class="btn btn-info">Submit</button>

                        <div id="snackbar">Student Added</div>
                    </div>
                    </div>
      
                </form>
            <script>
                function myFunction() {
                    var x = document.getElementById("snackbar");
                    x.className = "show";
                    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
                }
            </script>
                       
            </div>
        </main>
        <?php
            if (isset($_POST['submit'])) {
                $studentname=$_POST['studentname'];
                $studentid=$_POST['studentid'];
                $email=$_POST['email'];
                $password=$_POST['password'];
                $role='student';

                //echo $sectionname;
                $str = "INSERT INTO student (name,email,student_id,password,role) VALUES ('".$studentname."','".$email."','".$studentid."',md5('".$password."'),'".$role."')";
                if (mysqli_query($con,$str)) {
                     header('Location:listAllStudent.php');
                }
           }
            ob_end_flush();
        ?>
 <?php include'footer.php'?>