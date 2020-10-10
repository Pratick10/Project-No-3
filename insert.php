 <?php  
 //insert.php 
// include 'connection.php';
  session_start();
  include 'connection.php';
  $id=$_SESSION['id'];
  echo'student_id = ' .$id;
 echo '<br>';
 
 if(isset($_POST["languages"]))
 {
 	  $test_id=$_POST["test_id"];
 	  echo 'session id =' .$test_id;
 	  echo '<br>';
 	  $parts = explode(',', $_POST["languages"]);
 	  $result = sizeof($parts);
     $parts2 = explode(',', $_POST["type"]);
//     $result2 = sizeof($parts2);
//     $sub_type = $_POST['type'];
 	  //echo $result;
 	  for ($i=0; $i < $result; $i++) {
 	  	$query = "INSERT INTO requestedCours(session_id,student_id,subject_id,type) VALUES 
            ('".$test_id."','".$id."','".$parts[$i]."','".$parts2[$i]."')";
      	$results = mysqli_query($conn,$query);

 	  }
            echo 'Check Box Data Inserted';
//            echo $id;

 }
                    ob_end_flush();

 ?> 