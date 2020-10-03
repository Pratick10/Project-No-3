<?php
include 'connection.php';
$session_id=$_REQUEST['id']; //receive studentid from query parameter
$str="DELETE from session WHERE id=$session_id";
if (mysqli_query($conn, $str))
{
    header('location: ../list_session.php');
}
?>