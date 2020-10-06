<?php

session_start();

if (isset($_SESSION['username']))
{
    header('location: admin_dashboard.php');
}
if (isset($_SESSION['userrole']) && $_SESSION['userrole'] == 'student')
{
    header('location: user_dashboard.php');
}

?>
