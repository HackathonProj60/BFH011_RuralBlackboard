<?php
session_start();
session_unset();
session_destroy();
echo "<script type='text/javascript'>alert('Logged Out Successfully!')</script>";
echo "<script type='text/javascript'>window.location.assign('index.php')</script>";
?>