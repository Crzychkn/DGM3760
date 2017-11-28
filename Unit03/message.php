<?php include'../../includes/connect.php'?>

<?php
if (isset($_POST))
{

$subject = $_POST['subject'];
$message = $_POST['message'];

$query = "select id, first, last, email from newsletter";

$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_array($result))
{
	$resultArr[] = $row;
}

foreach ($resultArr as $output) 
{
	$mailMessage = "Hello ".$output['first']."! 
		
$message";

	mail($output['email'], $subject, $mailMessage, 'FROM:'.$output['email']);
}


$conn->close();

//mail($email, $subject, $mailMessage, 'FROM:'.$email);
echo "Your message has been sent to all newsletter members!";

}

?>

<meta http-equiv="refresh" content="5; url=spam.php" />
