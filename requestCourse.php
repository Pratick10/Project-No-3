<?php
include 'connection.php';
include'student_header.php';
//       session_start();
       $id=$_SESSION['id'];
       echo $id;
?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="user_dashboard.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Request For Enroll</li>
                </ol>
                <div>
                    <div class="col-8">
                        <select class="from-control" id="test" name="">
                            <option value=""> Select Option</option>
                            <?php
                            $str="SELECT * FROM session";
                            $results = mysqli_query($conn,$str);
                            while($row = mysqli_fetch_array($results)){
                            ?>
                            <option value="<?php echo $row['id']?>"><?php echo $row['session']?>
                            </option>
                            <?php
                            }
                            ?>
                    </select>
                    </div>
                    <div class="col" id="changetable">

                    <div >
                        <table class="table">
                          <tr>
                            <th>Name</th>
                            <th>Section</th>
                              <th>Type</th>
                            <th>Action</th>
                           
                        </tr>

                    <?php 
                    
                    $str="SELECT subject.*, section.* FROM subject,section";
                    $results = mysqli_query($conn,$str);
                    while($row = mysqli_fetch_array($results)){
                        $section_id=$row['id'];
                            $section_name="SELECT * FROM section where id=$section_id";
                            $results1 = mysqli_query($conn,$section_name);
                            $row1 = mysqli_fetch_array($results1);
                        ?> 
                          
                          <tr>
                        <td><label><?php echo $row['sub_name']?></label></td>
                        <td><label><?php echo $row1['section']?></label></td>
                              <td><select class="form-control " id="type" name="sub_type">
                                      <option value="">Select type</option>
                                      <option value="retake">Retake</option>
                                      <option value="regular">Regular</option>
                                      <option value="recourse">Recourse</option>
                                  </select>
                              </td>
                     <td><input type="checkbox" class="get_value" value="<?php echo $row['id']?>" /></td></tr>
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
                var type=$("#type").val();
                alert(type);
//                  var types=[];
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
                data:{languages:languages,test_id:test_id, type:type},
                success:function(data){  
                     $('#result').html(data);  
                }  
           }); 

             });
      });  
 });   
 </script>