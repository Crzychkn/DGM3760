<?php
session_start();
session_destroy();
unset($_SESSION);
setcookie('username', $username, 0);
setcookie('firstname', $firstname, 0);
setcookie('lastname', $lastname, 0);
header("location: index.php");

?>
