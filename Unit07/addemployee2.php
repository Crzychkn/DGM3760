<?php include'header.php'?>

<?php

$ext = pathinfo($_FILES['picture']['name'], PATHINFO_EXTENSION);
$filename = $_POST['first'].$_POST['last'].time().'.'.$ext;
$filepath = 'images/';

if ($_FILES['picture']['size'] == 0){
   echo "You didn't select a photo.";
}
else if ($_FILES['picture']['size'] > 1000000){
   echo "File is too large. Please reduce size.";
}
else if ($_FILES['picture']['type'] != 'image/gif' && $_FILES['picture']['type'] != 'image/png' && $_FILES['picture']['type'] != 'image/jpeg' && $_FILES['picture']['type'] != 'image/pjpeg'){
   
   echo "Incorrect file type.";
}

else if (isset($_POST))
{

//Move uploaded file
$tmp_name = $_FILES['picture']['tmp_name'];
move_uploaded_file($tmp_name, $filepath.$filename);
@unlink($_FILES['picture']['tmp_name']);

//Store in Database
$stmt = $conn->prepare("insert into employees7 (first, last, phone, email, expertise, image) values (?,?,?,?,?,?)");

$stmt->bind_param("ssisss", $first, $last, $phone, $email, $expertise, $image);

$first = $_POST['first'];
$last = $_POST['last'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$expertise = $_POST['expertise'];
$image = $filepath.$filename;


$stmt->execute();
$stmt->close();
$conn->close();

echo "<h2>Employee has been added!</h2>";

}

?>

<meta http-equiv="refresh" content="3; url=admin.php" />
