<?php 
        ob_start(); 
//      include'student_header.php';
      include 'connection.php';
?>
<?php include'student_header.php';
//       session_start();
       $id=$_SESSION['id'];
       //echo $id;
?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="dashboard_student.php">Dashboard</a></li>
                    <li class="breadcrumb-item "><a href="requestCourse.php">Requested Course</a></li>
                    <li class="breadcrumb-item active"><a>View Course</a></li>
                </ol>
                <div class="row">
                    <div class="col-md-12">
                
                         <table class="table">
                            <thead>
                               <th>Subject Code</th>
                               <th>Subject Name</th>
                               <th>Type Name</th>
                               <th>Action</th>
                               
                            </thead>
                            <tbody>

                                 <?php 
                    
                    $str="SELECT * FROM requested where student_id=$id";
                    $results = mysqli_query($con,$str);
                    while($row = mysqli_fetch_array($results)){
                        //echo $row['id'];
                        $subject_id=$row['subject_id'];
                        $type=$row['type'];
                        //echo $subject_id;
                        $subject="SELECT * FROM subject where id=$subject_id";
                         $results1 = mysqli_query($con,$subject);
                            $row1 = mysqli_fetch_array($results1);
                            $sectionname=$row1['section_id'];
                            $type="SELECT * FROM type where id=$type";
                            $results2 = mysqli_query($con,$type);
                            $row2 = mysqli_fetch_array($results2);

                        ?> 
                        <tr>
                            <td><label><?php echo $row1['sub_code']?></label></td>
                        <td><label><?php echo $row1['sub_name']?></label></td>
                       <td><label><?php echo $row2['type_name']?></label></td>
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