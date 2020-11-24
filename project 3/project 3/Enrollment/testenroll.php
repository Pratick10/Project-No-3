<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <?php
    session_start();
        include 'connection.php';
        $str="SELECT id,student_id,count(subject_id) as total FROM requested GROUP BY student_id having total>3";
                    $results = mysqli_query($con,$str);
                    while($row = mysqli_fetch_array($results)){
                        
                        $student_id=$row['student_id'];
                         $str="SELECT * FROM requested where student_id=$student_id";
                    $results1 = mysqli_query($con,$str);
                    while($row1 = mysqli_fetch_array($results1)){
                        //echo $row1['student_id'];
                        // echo $row1['subject_id'];?>

                         <td>
                            <tr><label><?php echo $row1['student_id']?></label></tr>
                        <tr><label><?php echo $row1['subject_id']?></label></tr>
                       

                        </td>
                        
 <?php   }
}
    ?>

</body>
</html>