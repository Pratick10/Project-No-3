<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editpage</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<?php include 'connection.php'; ?>
<?php
$session_id= $_REQUEST['id'];
$str="select * from session where id=$session_id";
$result= mysqli_query($conn, $str);
$session=mysqli_fetch_array($result);

?>
<body>
<div class="container">
    <h2> Edit Session</h2>

    <div>
        <form method="post" action="">

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
</div>

</body>
</html>

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
