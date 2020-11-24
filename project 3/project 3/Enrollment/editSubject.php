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
    $subject_id=$_REQUEST['id'];
    //echo $section_id;
    $str="SELECT * FROM subject where id='$subject_id'";
    $result =mysqli_query($con,$str);
    $result1=mysqli_fetch_array($result);
?>

              <form action="" method="post">
                    <div class="form-group">
                        <label for="">Subject Code:</label>
                        <input type="text" class="form-control" name="subjectcode" id="" value="<?php echo $result1['sub_code']?>">
                    </div>
                    <div class="form-group">
                        <label for="">Subject Name:</label>
                        <input type="text" class="form-control" name="subjectname" id="" value="<?php echo $result1['sub_name']?>">
                    </div>
                    <div class="form-group">
                <label for="">Section for Subject:</label>
              <select name="section_id" class="form-control" id="">
                <?php 
                    $str="SELECT id,section from section";
                    $results = mysqli_query($con,$str);
                    while($row = mysqli_fetch_array($results)){?>
                     <option <?php echo ($row['id']==$result1['section_id'])? 'selected': ''?> value="<?php echo $row['id']?>"><?php echo $row['section']?></option>
                 <?php }
                ?>
         
              </select>
        </div>
                    <div>
                        <input type="submit" name="submit" class="btn btn-primary" value="Update Section">
                    </div>
      
            </form>
                       
            </div>
        </main>

<?php
    if (isset($_POST['submit'])) {
        $subjectcode=$_POST['subjectcode'];
        $subjectname=$_POST['subjectname'];
        $section_id=$_POST['section_id'];

        $str = "UPDATE subject SET sub_code='$subjectcode',sub_name='$subjectname',section_id='$section_id' where id=$subject_id";
        if (mysqli_query($con,$str)) {
                header('Location:listAllSubject.php');
    }
        }
    ob_end_flush();
?>
 <?php include'footer.php'?>