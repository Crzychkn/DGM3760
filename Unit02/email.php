<?php include'../../includes/connect.php'?>

<?php
if (isset($_POST))
{

//Store in Database
$stmt = $conn->prepare("insert into movies (name, email, movie, viewers, popcorn, drinks, candy, request) values (?,?,?,?,?,?,?,?)");

$stmt->bind_param("sssissss", $name, $email, $movie, $viewers, $popcorn, $drink, $candy, $request);

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

$stmt->execute();
$stmt->close();
$conn->close();

echo "Thanks! Your order details have been recorded and stored.";
//echo $mailMessage;
//mail($email, $subject, $mailMessage, 'FROM:'.$email);

}

?>

<meta http-equiv="refresh" content="5; url=index.php" />
