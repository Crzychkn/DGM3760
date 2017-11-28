<?php include'../../includes/connect.php'?>

<?php
if (isset($_POST))
{

//Store in Database
$stmt = $conn->prepare("insert into newsletter (first, last, email) values (?,?,?)");

$stmt->bind_param("sss", $first, $last, $email);

$first = $_POST['firstname'];
$last = $_POST['lastname'];
$email = $_POST['email'];


$stmt->execute();
$stmt->close();
$conn->close();

echo "Thanks for signing up for our newsletter! You will receive email when we send out new letters.";
//mail($email, $subject, $mailMessage, 'FROM:'.$email);

}

?>

<meta http-equiv="refresh" content="5; url=index.php" />
