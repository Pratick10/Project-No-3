 <?php  
 //insert.php 
 include 'connection.php'; 
  session_start();
  include 'connection.php';
  $id=$_SESSION['id'];

 
 if(isset($_POST["languages"]))  
 {   
 	  $test_id=$_POST["test_id"];
 	 //$type=$_POST["test_id"];
// 	  echo $test_id;
 	  $parts = explode(',', $_POST["languages"]);
 	 	  $parts2 = explode(',', $_POST["type"]);
  
// 	  print_r($parts2);
 	  $result = sizeof($parts);
 	  //echo $result;
 	  for ($i=0; $i < $result ; $i++) { 
 	  	$query = "INSERT INTO requested(session_id,student_id,subject_id,type) VALUES ('".$test_id."','".$id."','".$parts[$i]."','".$parts2[$i]."')";  
      	$results = mysqli_query($con,$query);  

 	  }
//            echo 'Check Box Data Inserted';
            //echo $id;  

 }
                    ob_end_flush();

 ?> 