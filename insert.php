 <?php  
 //insert.php 
 include 'connection.php'; 
  session_start();
  include 'connection.php';
  $id=$_SESSION['id'];

 
 if(isset($_POST["languages"]))
 {   
 	  $test_id=$_POST["test_id"];
 	  echo $test_id;
 	  $parts = explode(',', $_POST["languages"]);
 	  $result = sizeof($parts);
 	  //echo $result;
 	  for ($i=0; $i < $result ; $i++) { 
 	  	$query = "INSERT INTO requestedCours(session_id,student_id,subject_id) VALUES ('".$test_id."','".$id."','".$parts[$i]."')";
      	$results = mysqli_query($conn,$query);

 	  }
            echo 'Check Box Data Inserted';
            //echo $id;  

 }
                    ob_end_flush();

 ?> 