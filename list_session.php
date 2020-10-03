<?php

session_start();

if (!isset($_SESSION['username']))
{
    header('location: login.php');
}
if (isset($_SESSION['userrole']) && $_SESSION['userrole'] == 'student')
{
    header('location: unauthorized.php');
}

?>
<?php include'header.php';
include'connection.php';
?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">List Session</h1>
                <a class="btn btn-primary" href="add_session.php">Add Session</a>

                <div>
                    <table class="table">
                        <thead class="thead-dark" align="center">
                        <th>ID</th>
                        <th>Sessions</th>
                        <th >Actions</th>

                        </thead>

                        <tbody align="center">
                        <?php
                        $str= "select * from session";
                        $result= mysqli_query($conn, $str);
                        while($row=mysqli_fetch_array($result))
                        {?>
                            <tr>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['session'] ?></td>
                                <td>
                                    <a class="btn btn-info" href="session/edit_session.php?id=<?php echo $row['id'] ?>">Edit</a>
                                    <a class="btn btn-danger" data-toggle="modal" data-target="#myModal<?php echo $row['id'] ?>" ">Delete</a>
                                    <div class="modal fade" id="myModal<?php echo $row['id'] ?>"  >
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Delete Confirmation!!!!</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    Are you sure you want to delele <b><?php echo $row['session']?></b>
                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <a class="btn btn-success" href="session/delete_session.php?id=<?php echo $row['id'] ?>">Yes</a>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
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
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2020</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
</body>
</html>