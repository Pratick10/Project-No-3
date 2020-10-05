<?php 
include 'connection.php';

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
  <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
</head>
<body>
   <div class="container">
  <table id="sessiontbl" class="table table-striped">
 
    <thead> 
         <th>ID</th>
         <th>Session</th>
         <th>Status</th>
    </thead>
    <tbody>
     <?php  
$str = "SELECT * FROM session"; 
$q = mysqli_query($conn,$str);
    while ($row = mysqli_fetch_array($q)) { ?>
   <tr>
        <td><?php echo $row ['id']; ?></td>
        <td><?php echo $row ['session']; ?></td>
     <td><?php echo $row ['status']; ?></td>
      </tr>
   <?php } 


  ?>    
    </tbody>
  </table>
 </div>
<script>
  $(document).ready( function () {
    $('#sessiontbl').DataTable();
} );
</script>
</body>
</html>