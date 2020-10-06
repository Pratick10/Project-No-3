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
                <form class ="container col-6" method="post" enctype="multipart/form-data">
                    <div class=" form-group">
                        <label> Subjcet name  </label>
                        <input type="text" class="form-control " id="subject_name" name="sub_name">
                    </div>

                    <div class=" form-group">
                        <label> Subjcet code</label>
                        <input type="text" class="form-control " id="code" name="sub_code">
                    </div>

                    <div class="form-group ">
                        <label> Subjcet short_name</label>
                        <input type="text" class="form-control " id="short_name" name="sub_shortname">
                    </div>
                    <div class="form-group">
                        <label for="sub_type">Subject_type:</label>
                        <select class="form-control" id="sub_type" name="sub_type">
                            <option value="">Select type</option>
                            <option value="theory">Theory</option>
                            <option value="lab">Lab</option>

                        </select>
                    </div>

                    <div class="col-md-4">
                        <input type="submit" class="btn btn-primary" name='submit' value="Add"/>
                    </div>
                </form>

                       
            </div>
        </main>
        <?php
        if(isset($_POST['submit']))
        {

        $sub_name = $_POST['sub_name'] ;
        $sub_code = $_POST['sub_code'];
        $sub_shortname = $_POST['sub_shortname'];
        $sub_type = $_POST['sub_type'];

        $query ="insert into subject(sub_name, sub_code, sub_shortname, sub_type) value('$sub_name' , '$sub_code' , ' $sub_shortname' , '$sub_type' )";
        if(mysqli_query($conn, $query))
        {
        header('location: listAllSubject.php');
        }

        }


        ?>
 <?php include'footer.php'?>