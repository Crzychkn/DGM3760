<?php include'../../includes/connect.php'?>

<?php

$ext = pathinfo($_FILES['picture']['name'], PATHINFO_EXTENSION);
$filename = $_POST['recipename'].time().'.'.$ext;
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
$stmt = $conn->prepare("insert into recipessix (name, cooktime, ingredients, directions, image, author, approved) values (?,?,?,?,?,?,?)");

$stmt->bind_param("ssssssi", $name, $cooktime, $ingredients, $directions, $image, $author, $approved);

$name = $_POST['recipename'];
$cooktime = $_POST['cooktime'];
$ingredients = $_POST['ingredients'];
$directions = $_POST['directions'];
$image = $filepath.$filename;
$author = $_POST['author'];
$approved = 0;


$stmt->execute();
$stmt->close();
$conn->close();

echo "<h2>Thanks for adding a recipe! An admin will review your recipe soon.</h2>";

}

?>

<meta http-equiv="refresh" content="3; url=index.php" />
