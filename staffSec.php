<?php
session_start();
if (isset($_SESSION['staffid'])) {
    $sus = 1;
}else{
    session_destroy();
    echo "<script type='text/javascript'>alert('you are not logged in!!!')</script>";
    echo "<script type='text/javascript'>window.location.assign('index.php')</script>";
} 
?>