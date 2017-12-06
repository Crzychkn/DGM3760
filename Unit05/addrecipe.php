<?php include'../../includes/connect.php'?>

<?php
if (isset($_POST))
{

//Store in Database
$stmt = $conn->prepare("insert into recipes (name, cooktime, ingredients, directions, image, author) values (?,?,?,?,?,?)");

$stmt->bind_param("ssssss", $name, $cooktime, $ingredients, $directions, $image, $author);

$name = $_POST['recipename'];
$cooktime = $_POST['cooktime'];
$ingredients = $_POST['ingredients'];
$directions = $_POST['directions'];
$picture = $_POST['picture'];
$author = $_POST['author'];



$stmt->execute();
$stmt->close();
$conn->close();

echo "Thanks for adding a recipe!";

}

?>

<meta http-equiv="refresh" content="5; url=index.php" />
