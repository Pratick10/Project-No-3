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
                    <div>
                        <select class="from-control" id="test" name="">
                    <option value=""> Select Option</option>
                <?php
                    $str="SELECT * FROM session";
                    $results = mysqli_query($con,$str);
                    while($row = mysqli_fetch_array($results)){
                ?>
                    <option value="<?php echo $row['id']?>"><?php echo $row['session']?>
                    </option>
                <?php } ?>
                    
                </select>
                    </div>
                    <div class="col-md-12" id="changetable">

                    <div class="checkbox">  
                        <table class="table">
                          <tr>
                            <th>Subject Code</th>
                            <th>Subject Name</th>
                            <th>Action</th>
                            <th>Type</th>
                           
                        </tr>

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
                        <td><label><?php echo $row['sub_code']?></label></td>
                        <td><label><?php echo $row['sub_name']?></label></td>
                     <td><input type="checkbox" class="get_value" value="<?php echo $row['id']?>" /></td>
                      <td>
                        <select class="from-control" id="test2" class="get_value2" name="">
                            <option value="1">Regular</option>
                            <option value="2">Retake</option>
                            <option value="3">Recourse</option>
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
                var test_id2=[];
                $('.get_value').each(function(){
                    if($(this).is(":checked"))
                    {
                        languages.push($(this).val());
                    }
                });


                languages=languages.toString();


                $.ajax({  
                url:"insert.php",  
                method:"POST",  
                data:{languages:languages,test_id:test_id},  
                success:function(data){  
                     $('#result').html(data);  
                }  
           }); 

             });
      });  
 });   
 </script>