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
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Add Session</li>
                </ol>
                <form method="post" class="col-6" id="frmChkForm" action="">
                    <fieldset class="custom-border">
                        <legend class="custom-border"> Add Session</legend>
                            <div>
<!--                                <input type="checkbox" > Active</input>-->
                                <input type="checkbox" name="status" id="group1" />Check Me

                            </div>
                            <div class="form-group">
                                <label> Session </label>
                                <input type="text" class="form-control" name="session" id="">
                            </div>

                            <div class="form-group">
                                <input type="submit" name="submit" value="Add" class="btn btn-primary">

                            </div>
                    </fieldset>
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
include 'connection.php';
if (isset($_POST['submit']))
{
    if($_POST['status'] == "on")
    {
        $status= true;
    }
    else
    {
        $status= false;
    }
    //receive data from input controls
    $session=$_POST['session'] ;

    //database query
    $str= "INSERT INTO session(session,status) VALUES ('$session',$status)";
    if (mysqli_query($conn, $str))
    {
        header('Location: list_session.php');
    }

}

?>
