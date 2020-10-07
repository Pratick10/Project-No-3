<?php include'header.php';
include 'connection.php';
?>
    <div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Tables</li>
            </ol>
            <div class="row">
                <div class="col-md-12">

                    <table class="table table-dark" id="myTable" >
                        <thead align="center">
                        <th>Student Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Roll</th>
                        <th>Role</th>
                        <th>Action</th>
                        </thead>
                        <tbody>
                        <?php
                        $str="SELECT * FROM student";
                        $results = mysqli_query($conn,$str);
                        while($row = mysqli_fetch_array($results)){?>


                            <tr align="center">
                                <td><?php echo $row ['name']; ?></td>
                                <td><?php echo $row ['email']; ?></td>
                                <td><?php echo $row ['password']; ?></td>
                                <td><?php echo $row ['roll']; ?></td>
                                <td><?php echo $row ['role']; ?></td>
                                <td>
                                    <a class="btn btn-primary" href="student/edit_student.php?id=<?php echo $row['id']?>">Edit</a>
                                    <a class="btn btn-danger" data-toggle="modal" data-target="#myModal<?php echo $row['id']?>">Delete</a>

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
                                                    <p style="color: black">Are you sure to delete <?php echo $row['name']?><p>
                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <a href="student/delete_student.php?id=<?php echo $row['id']?>" class="btn btn-success">Yes</a>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                        <?php }
                        ?>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </main>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
<?php include'footer.php'?>