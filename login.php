<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <title>Login</title>
</head>
<body>
<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
<!--            <img src="https://www.b-cube.in/wp-content/uploads/2014/05/aditya-300x177.jpg" id="icon" alt="User Icon" />-->
            <h1>LOGIN FORM</h1>
        </div>

        <!-- Login Form -->
        <form method="post">
            <input type="text" id="login" class="fadeIn second" name="email" placeholder="Email">
            <input type="password" id="password" class="fadeIn second" name="password" placeholder="Password">
            <input type="submit" name="submit" class="fadeIn fourth" value="Log In">
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
            <a class="underlineHover" href="#">Go to the Site</a>
        </div>

    </div>
</div>

</body>
</html>
<?php
include 'connection.php';
if (isset($_POST['submit'])) {

    $email= $_POST['email'];
    $password = md5($_POST['password']);
    //echo $email;

    $str="SELECT * FROM student where email='$email' and password='$password'";
    echo $str;
    $q=mysqli_query($conn,$str);
    $result= mysqli_fetch_array($q);
    if ($result) {
        $id=$result['email'];
        $userrole=$result['role'];
        if($userrole=='admin'){
            $_SESSION['email']=$id;
            //$_SESSION['role']=$role;
            //echo $_SESSION['userrole'];
            header('Location:admin_dashboard.php');
        }
        if($userrole=='student'){
            $_SESSION['email']=$id;
            //$_SESSION['role']=$role;
            header('Location: user_dashboard.php');
        }



        ob_end_flush();
    }
}

?>