<?php include'header.php';
      include 'connection.php';
?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item "><a href="addStudent.php"> Add Student</a> </li>
                    <li class="breadcrumb-item active">List Sessions</li>
                </ol>
                <div class="row">
                    <div class="col-md-12">
                
                         <table class="table table-dark ">
                            <thead>
                            
                               <th>Student Name</th>
                               <th>Email</th>
                               <th>Id</th>
                               <th>Actions</th>
                            </thead>
                            <tbody>
                             <?php 
                    $str="SELECT * FROM student";
                    $results = mysqli_query($con,$str);
                    while($row = mysqli_fetch_array($results)){
                        ?>
                        
                
                        <tr>
                            <td><?php echo $row['name']?></td>
                            <td><?php echo $row['email']?></td>
                            <td><?php echo $row['student_id']?></td>
                        

                            <td>
                                <a class="btn btn-primary" href="editSubject.php?id=<?php echo $row['id']?>">Edit</a>
                                <a class="btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $row['id']?>">Delete</a>
    
                              <!-- The Modal -->
                              <div class="modal" id="myModal<?php echo $row['id']?>">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                  
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                      <h4 style="color: black"class="modal-title">Delete Confirmation !!</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                      <p style="color: black">Are you sure to delete <strong><?php echo $row['sub_name']?></strong><p>
                                    </div>
                                    
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                      <a href="delete-subject.php?id=<?php echo $row['id']?>" class="btn btn-success">Yes</a>
                                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                    
                                  </div>
                                </div>
                              </div>
  
                            </td>
                        </tr>
                        <?php } ?>
                            </tbody>
                    
                    
                </table>        
            </div>
            
        </div>
                       
            </div>
        </main>
        
 <?php include'footer.php'?>