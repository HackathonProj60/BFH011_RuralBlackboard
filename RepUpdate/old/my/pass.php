<?php
$pass = password_hash('1234567a', PASSWORD_BCRYPT);
echo "<p>".$pass."</p>";
$res = password_verify('1234567a', $pass);
echo $res;
?>