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
                    <div class="form-control" align="center">
                        <select class="from-control col-6" id="test" name="">
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
<!--                              <td><select class="form-control ">-->
<!--                                      <option name="type" id="type" value="">Select type</option>-->
<!--                                      <option name="type" id="type" value="retake">Retake</option>-->
<!--                                      <option name="type" id="type" value="regular">Regular</option>-->
<!--                                      <option name="type" id="type" value="recourse">Recourse</option>-->
<!--                                  </select>-->
<!--                              </td>-->
                              <td>
                                  <select class="form-control id="type" name="name[]">

                                      <option>Select Type</option>
                                      <?php
                                      $str="SELECT * FROM type";
                                      $results2 = mysqli_query($conn,$str);
                                      while($row2 = mysqli_fetch_array($results2)){
                                          ?>
                                          <option class="get_value2" value="<?php echo $row2['id']?>">
                                              <?php echo $row2['type_name']?></option>
                                      <?php } ?>
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
               // var type=$("#type").val();
               // alert (type);
             $("#submit").click(function(){
                var languages=[];
                // var type=$("#type").val();
                // alert(type);
                 var type=[];
                 $('.get_value2').each(function(){
                     if($(this).is(":selected"))
                     {
                         type.push($(this).val());
                         //console.log(type);
                         //alert(type);
                     }

                 });
                 type=type.toString();
                alert(type);
                $('.get_value').each(function(){

                    if($(this).is(":checked"))
                    {
                        languages.push($(this).val());
                        // type.push($(this).text());
                    }
                });
                 languages=languages.toString();
                 alert(languages);
                 // $('.type').each(function(){
                 //
                 //     if($(this).is(":selected"))
                 //     {
                 //         type.push($(this).val());
                 //         console.log(type);
                 //     }
                 //
                 // });


                 // alert(type);
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