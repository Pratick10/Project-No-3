<?php
ob_start();
include'student_header.php';
include 'connection.php';
?>
<?php include'student_header.php';
session_start();
$id=$_SESSION['id'];
//echo $id;
?>
    <div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="dashboard_student.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Tables</li>
            </ol>
            <div class="row">
                <div class="col-md-12">

                    <table class="table">
                        <thead>
                        <th>Subject Code</th>
                        <th>Subject Name</th>
                        <th>Section Name</th>
                        <th>Action</th>

                        </thead>
                        <tbody>

                        <?php

                        $str="SELECT * FROM requestedcours where student_id=$id";
                        $results = mysqli_query($conn,$str);
                        while($row = mysqli_fetch_array($results)){
                        //echo $row['id'];
                        $subject_id=$row['subject_id'];
                        //echo $subject_id;
                        $subject="SELECT * FROM subject where id=$subject_id";
                        $results1 = mysqli_query($conn,$subject);
                        $row1 = mysqli_fetch_array($results1);
                        $sectionname=$row1['section_id'];
                        $section="SELECT * FROM section where id=$sectionname";
                        $results2 = mysqli_query($conn,$section);
                        $row2 = mysqli_fetch_array($results2);



                        ?>
                        <tr>
                            <td><label><?php echo $row1['sub_code']?></label></td>
                            <td><label><?php echo $row1['sub_name']?></label></td>
                            <td><label><?php echo $row2['section']?></label></td>
                            <td><a class="btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $row['id']?>">Delete</a></td>

                        </tr>

                        </tbody>

                        <?php }?>
                    </table>
                </div>

            </div>

        </div>
    </main>

<?php include'student_footer.php'?>