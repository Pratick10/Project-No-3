<?php ob_start(); ?>
<?php include'header.php';
include'connection.php';
?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Add Subject</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Tables</li>
                </ol>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Subject Code:</label>
                        <input type="text" class="form-control" name="subjectcode" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Subject Name:</label>
                        <input type="text" class="form-control" name="subjectname" id="">
                    </div>
                    
<!--                     <div class="form-group">-->
<!--                <label for="">Subject for Section:</label>-->
<!--              <select name="section_id" class="form-control" id="">-->
<!--                --><?php //
//                    $str="SELECT id,section from section";
//                    $results = mysqli_query($con,$str);
//                    while($row = mysqli_fetch_array($results)){?>
<!--                     <option value="--><?php //echo $row['id']?><!--">--><?php //echo $row['section']?><!--</option>-->
<!--                 --><?php //}
//                ?>
<!--         -->
<!--              </select>-->
<!--        </div>-->
                    <div>
                        <input type="submit" name="submit" class="btn btn-primary" value="Add Subject">
                    </div>
      
                </form>

                       
            </div>
        </main>
        <?php
            if (isset($_POST['submit'])) {
                $subjectcode=$_POST['subjectcode'];
                $subjectname=$_POST['subjectname'];
//                $section_id=$_POST['section_id'];

                $str = "INSERT INTO subject (sub_code,sub_name)
                      VALUES ('".$subjectcode."','".$subjectname."')";
      
                if (mysqli_query($conn,$str)) {
                    //echo "Successfully Inserted";
                    header('Location: listAllSubject.php');
                }
            }
            ob_end_flush();
        ?>
 <?php include'footer.php'?>