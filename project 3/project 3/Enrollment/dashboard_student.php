<?php ob_start(); ?>
<?php include'student_header.php'?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="dashboard_student.php">Dashboard</a></li>
<!--                    <li class="breadcrumb-item active">Tables</li>-->
                </ol>
                <?php
//                    session_start();
                    include 'connection.php';
                    $id=$_SESSION['id'];
                $str= "select * from student WHERE id='$id'";
                $result= mysqli_query($con, $str);
                $row=mysqli_fetch_array($result);
                echo "Welcome" ." ".$row['name'] ;
//                    echo $id;
                    ob_end_flush();
                ?>
                       
            </div>
        </main>
 <?php include'student_footer.php'?>