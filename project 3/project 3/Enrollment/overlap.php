<?php ob_start(); 
include 'connection.php';
?>
<?php include'student_header.php';
       session_start();
       $id=$_SESSION['id'];
       //echo $id;
?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Tables</li>
                </ol>
                <div class="row">
                   
                    <div class="col-md-12" id="changetable">

                    <div class="checkbox">  
                        <table class="table">
                          <tr>
                            <th>Subject Name</th>
                            <th>Action</th>
                           
                        </tr>

                    <?php 
                    
                    $str="SELECT * FROM subject";
                    $results = mysqli_query($con,$str);
                    while($row = mysqli_fetch_array($results)){
    
                        ?> 
                          
                        <tr>
                        <td><label><?php echo $row['sub_name']?></label></td>
                        
                        <td><input type="checkbox" class="get_value" value="<?php echo $row['id']?>" /></td>
                         <td>
                     
                                <select id="type" name="name[]">
                        
                                    <option>Select Type</option>
                                                    <?php
                    $str="SELECT * FROM type";
                    $results2 = mysqli_query($con,$str);
                    while($row = mysqli_fetch_array($results2)){
                    ?>
                                    <option class="get_value2" value="<?php echo $row['id']?>"><?php echo $row['type_name']?></option>
                                    <?php } ?>
                                </select>
                                  
                    </td>
                        </tr>
                     <?php } ?></table>                      
                </div>       
                <button type="button" name="submit" class="btn btn-info" id="submit">Submit</button>  
                                <div id="result"></div>
                       
            
                  </div>
              </div>
        </main>
        <?php
            include 'student_footer.php';
        ?>
        <script>  
           $(document).ready(function(){  
            $("#changetable").hide();
           $('#test').change(function(){
            var test_id=$("#test").val();
            alert(test_id);
             $("#changetable").show();  
             $("#submit").click(function(){
                var languages=[];
                var type=[];
                //var type=$("#type").val();
               // alert(type);
                $('.get_value').each(function(){
                    if($(this).is(":checked"))
                    {
                        languages.push($(this).val());
                       // console.log(languages);
                    
                    }

                });
                    $('.get_value2').each(function(){
                         if($(this).is(":selected"))
                        {
                            type.push($(this).val());
                        //console.log(type);
                            //alert(type);
                        }

                         });
                 //var type=($('#type :selected').text());
               // ($('#type :selected').text());
                languages=languages.toString();

                console.log(languages);
                type=type.toString();
               console.log(type);


                $.ajax({  
                url:"insert.php",  
                method:"POST",  
                data:{languages:languages,test_id:test_id,type:type},  
                success:function(data){  
                     $('#result').html(data);  
                }  
           }); 

             });
      });  
 });   
 </script>