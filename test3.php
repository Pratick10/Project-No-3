 <?php
    include 'connection.php';
 ?>
 <form action="" method="post">
                         <table class="table">
                            <thead>
                               
                               
                               <th>Subject Name</th>
                               <th>Section Name</th>
                               <th>Actions</th>
                            </thead>
                            <tbody>
                             <?php 
                    $str="SELECT * FROM subject";
                    $results = mysqli_query($con,$str);
                    while($row = mysqli_fetch_array($results)){
                            $section_id=$row['section_id'];
                            $section_name="SELECT * FROM section where id=$section_id";
                            $results1 = mysqli_query($con,$section_name);
                            $row1 = mysqli_fetch_array($results1);
                        ?>
                        
                
                        <tr>
                            
                            
                            <td><?php echo $row['sub_name']?></td>
                            <td><?php echo $row1['section']?></td>

                            <td>
                              <input type="checkbox" name="course[]" value="<?php $row['id']?>" />
                            </td>
                        </tr>

                        <?php }
                        

                         ?>
                            </tbody>
                            
                    
                    
                </table>   
                 <input type="submit" name="submit" value="Submit" />
        <input type="reset" name="reset" value="reset" />     
            </form>

             <?php
            if(isset($_POST['submit'])){//to run PHP script on submit
            if(!empty($_POST['course'])){
// Loop to store and display values of individual checked checkbox.
            foreach($_POST['course'] as $course){
//echo $selected."</br>";
            echo $course;
}
}
}ob_end_flush();
        ?>