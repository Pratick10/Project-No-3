
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
    $section_id=$_REQUEST['id'];
    //echo $section_id;
     $str="SELECT * FROM section where id='$section_id'";
    $result =mysqli_query($con,$str);
    $result1=mysqli_fetch_array($result);
?>

               <form action="" method="post">
                    <div class="form-group">
                        <label for="">Section Name:</label>
                        <input type="text" class="form-control" name="sectionname" id="" value="<?php echo $result1['section']?>">
                    </div>
                    <div>
                        <input type="submit" name="submit" class="btn btn-primary" value="Update Section">
                    </div>
                </form>
                       
            </div>
        </main>
<?php
    if (isset($_POST['submit'])) {
        $sectionname=$_POST['sectionname'];

        $str = "UPDATE section SET section='$sectionname' where id=$section_id";
        if (mysqli_query($con,$str)) {
        header('Location:listAllSection.php');
        }
    }
    ob_end_flush();
?>
<?php include'footer.php'?>