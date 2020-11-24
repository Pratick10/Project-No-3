 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Insert Checkbox values using Ajax Jquery in PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;">  
                <h3 class="text-center">Insert Checkbox values using Ajax Jquery in PHP</h3>  
                <div class="checkbox">  
                    <?php 
                    include 'connection.php';
                    $str="SELECT * FROM subject";
                    $results = mysqli_query($con,$str);
                    while($row = mysqli_fetch_array($results)){
                        $section_id=$row['section_id'];
                            $section_name="SELECT * FROM section where id=$section_id";
                            $results1 = mysqli_query($con,$section_name);
                            $row1 = mysqli_fetch_array($results1);
                        ?> <table>
                          <tr>
                            <th>Name</th>
                            <th>action</th>
                          </tr>
                          <tr>
                        <td><label><?php echo $row['sub_name']?></label></td>
                     <td><input type="checkbox" class="get_value" value="<?php echo $row['id']?>" /><br /></td></tr></table>                  
                     <?php } ?>    
                </div>       
                <button type="button" name="submit" class="btn btn-info" id="submit">Submit</button>  
                                <div id="result"></div>
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#submit').click(function(){  
           var languages = [];  
           $('.get_value').each(function(){  
                if($(this).is(":checked"))  
                {  
                     languages.push($(this).val());  
                }  
           });  
           languages = languages.toString();  
           $.ajax({  
                url:"insert.php",  
                method:"POST",  
                data:{languages:languages},  
                success:function(data){  
                     $('#result').html(data);  
                }  
           });  
      });  
 });   
 </script>