<?php ob_start(); ?>
<?php include 'header.php'; ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="../admin_dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Edit Session</li>
            </ol>

            <?php
            include '../connection.php';
            $session_id= $_REQUEST['id'];
            $str="select * from session where id=$session_id";
            $result= mysqli_query($conn, $str);
            $session=mysqli_fetch_array($result);
            ?>

            <form method="post" action="" class="col-6">

                <div class="form-group">

                    <label> Sessions</label>
                    <input type="checkbox" value="<?php echo $session['status'] ?> " checked="checked" name="status" id="">
                    <input type="text" value="<?php echo $session['session'] ?> " class="form-control" name="session" id="">
                </div>


                <div class="form-group">
                    <input type="submit" name="submit" value="Update Data" class="btn btn-primary">
                    <a class="btn btn-danger" href="../list_session.php"> List all Session</a>

                </div>

            </form>

        </div>
    </main>
    <?php include'../footer.php'?>






<?php
if (isset($_POST['submit']))
{
    //receive data from input controls
    $s=$_POST['session'] ;


    $str= "UPDATE session SET session='$s' WHERE id=$session_id";

    if (mysqli_query($conn, $str))
    {
        header('location: ../list_session.php');
    }
    else echo 'failed';

}

?>
