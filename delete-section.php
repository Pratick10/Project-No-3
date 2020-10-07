<?php
  include 'Connection.php';
  $section_id=$_REQUEST['id'];
  $str="DELETE FROM section where id=$section_id ";
  //echo $str;
  if (mysqli_query($con,$str)) {
        header('Location:listAllSection.php');
      }
?>