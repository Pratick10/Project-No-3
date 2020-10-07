<?php ob_start(); ?>
<?php include 'header.php'; ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="../admin_dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Edit Student</li>
            </ol>

            <?php
            include '../connection.php';
            $session_id= $_REQUEST['id'];
            $str="select * from student where id=$session_id";
            $result= mysqli_query($conn, $str);
            $session=mysqli_fetch_array($result);
            ?>
            <form method="post" action="">

                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" value="<?php echo $session['name'] ?>" placeholder="Name" name="name" id="name">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="Password" class="form-control" value="<?php echo $session['password'] ?>" placeholder="Password" name="password" id="password">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" value="<?php echo $session['email'] ?>" placeholder="Email" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="">Roll</label>
                    <input type="text" class="form-control" value="<?php echo $session['roll'] ?>" placeholder="roll" name="roll" id="roll">
                </div>
                <div class="form-group">
                    <label for="">Role</label>
                    <input type="text" class="form-control" value="<?php echo $session['role'] ?>" placeholder="Role" name="role" id="roll">
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" name="submit" value="Update">
                </div>
            </form>


        </div>
    </main>
    <?php include'../footer.php'?>
    <?php
    if (isset($_POST['submit']))
    {
        //receive data from input controls
        $name=$_POST['name'] ;
        $email=$_POST['email'] ;
        $password=$_POST['password'] ;
        $roll=$_POST['roll'] ;
        $role=$_POST['role'] ;


        $str= "UPDATE student SET name='$name', email='$email', password=md5('$password'), roll='$roll', role='$role' WHERE id=$session_id";

        if (mysqli_query($conn, $str))
        {
            header('location: ../studentlist.php');
        }
        else echo 'failed';

    }

    ?>
