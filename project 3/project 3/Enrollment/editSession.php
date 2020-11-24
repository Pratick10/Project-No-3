
<?php ob_start(); ?>
<?php include'header.php'; ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Tables</li>
                </ol>
<?php
    include 'connection.php';
    $session_id=$_REQUEST['id'];
    //echo $section_id;
    $str="SELECT * FROM session where id='$session_id'";
    $result =mysqli_query($con,$str);
    $result1=mysqli_fetch_array($result);
?>

                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Session Name:</label>
                        <input type="text" class="form-control" name="sessionname" id="" value="<?php echo $result1['session']?>">
                    </div>
                    <div>
                        <input type="submit" name="submit" class="btn btn-primary" value="Update Session">
                    </div>
                </form>
                       
            </div>
        </main>
<?php
    if (isset($_POST['submit'])) {
        $sessionname=$_POST['sessionname'];

        $str = "UPDATE session SET session='$sessionname' where id=$session_id";
        if (mysqli_query($con,$str)) {
            header('Location:listAllSession.php');
        }
    }
    ob_end_flush();
?>
<?php include'footer.php'?>