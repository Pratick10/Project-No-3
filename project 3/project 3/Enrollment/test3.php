 <?php
 ob_start();
    include 'connection.php';
 ?>
 <form action="" method="post">
                         <table class="table">
                            <thead>
                               
                               <th>Id</th>
                               <th>Type Name</th>
                               
                            </thead>
                            <tbody>
                                <tr>
                                <?php
                                    $str="SELECT * FROM subject";
                    $results2 = mysqli_query($con,$str);
                    while($row2 = mysqli_fetch_array($results2)){
                                ?>
                                <td><?php echo $row2['id']?></td>
                                <td><select>
                                    <option>Select type</option>
                                    <?php
                                    $str="SELECT * FROM type";
                    $results = mysqli_query($con,$str);
                    while($row = mysqli_fetch_array($results)){
                                ?>
                                <option value="<?php $row['id']?>"><?php echo $row['type_name']?></option><?php}?>
                                </select></td><?php}?></tr>
                            </tbody>
                            
                    
                    
                </table>   
                 <input type="submit" name="submit" value="Submit" />  
            </form>

    