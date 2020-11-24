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
                               <th>Student id</th>
                               <th>Subject id</th>
                           
                               
                            </thead>
                            <tbody>

                                 <?php 
                    $str="SELECT id,student_id,count(subject_id) as total FROM requested GROUP BY student_id having total>3";
                    $results = mysqli_query($con,$str);
                    while($row = mysqli_fetch_array($results)){
                        
                        $student_id=$row['student_id'];
                        ?>

                             <tr>
                      <td><label><?php echo $row['student_id']?></label></td>

                        <?php
                         $str="SELECT * FROM requested where student_id=$student_id";
                    $results1 = mysqli_query($con,$str);
                    while($row1 = mysqli_fetch_array($results1)){
                        //echo $row1['student_id'];
                        
                        //echo $row['id'];
                        //$tot_id=$row['subject_id'];
                            //$subject="SELECT * FROM requested where subject_id=$tot_id";
                        //$results1 = mysqli_query($con,$subject);
                            // $row1 = mysqli_fetch_array($results1);
                        $subject_id=$row1['subject_id'];
                        
                    $subject="SELECT * FROM subject where id=$subject_id";
                         $results2 = mysqli_query($con,$subject);
                            $row2 = mysqli_fetch_array($results2);

                        ?> 
                       

                        <td><label><?php echo $row2['sub_name']?></label></td>

                           
                       
                        </tr>
                       
                             </tbody>
                    
                    <?php }}?>
                </table>        
            </div>
            
        </div>
                       
            </div>
        </main>
        
 <?php include'student_footer.php'?>