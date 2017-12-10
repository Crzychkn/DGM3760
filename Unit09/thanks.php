
<?php

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
header("location: index.php");
exit;
}

?>



<?php echo "<h2>Your message has been sent to this employee!</h2>";?>


<meta http-equiv="refresh" content="3; url=admin.php" />
