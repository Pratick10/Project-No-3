<?php
  $username="root";
  $password="";
  $hostname="localhost";
  $dbname="project 3";

  $con=mysqli_connect($hostname,$username,$password,$dbname);
  if (!$con) {
    	die("Connection failed: ".mysqli_connect_error());
  } 
  else
  {
  	echo "";
  } 

?>