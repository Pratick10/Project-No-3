<?php
  include 'Connection.php';
  $session_id=$_REQUEST['id'];
  $str="DELETE FROM session where id=$session_id ";
  //echo $str;
  if (mysqli_query($con,$str)) {
        header('Location:listAllSession.php');
      }
?>