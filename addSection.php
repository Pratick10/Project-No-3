<?php ob_start(); ?>
<?php include'header.php';
include'connection.php';
?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Add Section</li>
                </ol>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Section Name:</label>
                        <input type="text" class="form-control" name="sectionname" id="">
                    </div>
                    <div>
                        <input type="submit" name="submit" class="btn btn-primary" value="Add Section">
                    </div>
      
                </form>
            </div>
        </main>
        <?php
            if (isset($_POST['submit'])) {
                $sectionname=$_POST['sectionname'];
                //echo $sectionname;
                $str = "INSERT INTO section (section) VALUES ('".$sectionname."')";
               if (mysqli_query($conn,$str)) {
                    header('Location:listAllSection.php');
                }
            }
           ob_end_flush();
        ?>
        
 <?php include'footer.php'?>