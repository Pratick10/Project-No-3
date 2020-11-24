<?php ob_start(); ?>
<?php include'header.php';
include'connection.php';
?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Add Session</li>
                    <li class="breadcrumb-item "><a href="listAllSession.php">List Sessions</a></li>
                </ol>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Session Name:</label>
                        <input type="text" class="form-control" name="sessionname" id="">
                    </div>
                    <div>
                        <button onclick="myFunction()" name="submit" id="submit" class="btn btn-info">Submit</button>

                        <div id="snackbar">Session Added</div>
                    </div>
      
                </form>
                <script>
                    function myFunction() {
                        var x = document.getElementById("snackbar");
                        x.className = "show";
                        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
                    }
                </script>
                       
            </div>
        </main>
        <?php
            if (isset($_POST['submit'])) {
                $sessionname=$_POST['sessionname'];
                //echo $sectionname;
                $str = "INSERT INTO session (session) VALUES ('".$sessionname."')";
                if (mysqli_query($con,$str)) {
                     header('Location:listAllSession.php');
                }
           }
            ob_end_flush();
        ?>

 <?php include'footer.php'?>