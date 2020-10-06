<?php  include 'connection.php'; ?>

<html>
  <head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://www.expertphp.in/js/jquery.form.js"></script>
    

    <form class ="container" method="post" enctype="multipart/form-data">
        <div class=" form-group">
            <label> subjcet name  </label>
                <input type="text" class="form-control " id="subject_name" name="sub_name">
        </div>

        <div class=" form-group">
            <label> subjcet code</label>
                <input type="text" class="form-control " id="code" name="sub_code">
        </div>

        <div class="form-group ">
            <label> subjcet short_name</label>
            <input type="text" class="form-control " id="short_name" name="sub_shortname">
        </div>
        <div class="form-group">
            <label for="sub_type">subject_type:</label>
            <br>
            <select id="sub_type" name="sub_type">
                <option value="">Select type</option>
                <option value="theory">Theory</option>
                <option value="lab">Lab</option>

            </select>
        </div>

        <div class="col-md-4">
            <input type="submit" class="btn btn-primary" name='submit' value="Add"/>
        </div>
    </form>

  </head>
</html>


<?php
 
if(isset($_POST['submit']))
{

        $sub_name = $_POST['sub_name'] ;
        $sub_code = $_POST['sub_code'];

    $query ="insert into subject(sub_name, sub_code) value('$sub_name' , '$sub_code')";
   if(mysqli_query($conn, $query))
   {
       echo 'inserted succssfully';
   }

}


?>








