<?php

$name = $_POST['name'];
$email = $_POST['email'];
$movie = $_POST['movie'];
$viewers = $_POST['viewers'];
$request = $_POST['request'];
$subject = 'Movie Night Confirmation';


if (isset($_POST['popcorn']))
{
	$popcorn = "Popcorn";	
}
else {
	$popcorn = "";
}

if (isset($_POST['drink']))
{
	$drink = "Drink";
}
else {
	$drink = "";
}

if (isset($_POST['candy']))
{
	$candy = "Candy";
}
else {
	$candy = "";
}

$mailMessage = "Hello $name! 
	
Your viewing of $movie has been confirmed. Your order details are below: 
	
Movie: $movie
Viewers: $viewers
Treats: $popcorn
$drink
$candy
	
Special Request: $request";

echo "Thanks! You will receive an email shortly.";
mail($email, $subject, $mailMessage, 'FROM:'.$email);

?>

<meta http-equiv="refresh" content="5; url=index.php" />
