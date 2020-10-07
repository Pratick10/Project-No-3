<?php
include '../connection.php';
$session_id=$_REQUEST['id']; //receive studentid from query parameter
$str="DELETE from student WHERE id=$session_id";
if (mysqli_query($conn, $str))
{
    header('location: ../studentlist.php');
}
?>