<?php include'../../includes/connect.php'?>
<?php include'header.php'?>

    <main role="main" class="container">

<?php include'navigation.php'?>

      <div class="starter-template">
        <h1>Manage Recipes</h1>

<form id="managerecipes" action="managerecipes.php" method="post">
  <div class="form-group">
<br>

<?php
if (isset($_POST['details']))
{
   $id = $_POST['details'];
}
else if (isset($_POST['delete']))
{
   $id = $_POST['delete'];
}
else if (isset($_POST['update']))
{
   $id = $_POST['update'];
}
$query = "select * from recipes where id='$id'";

$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_array($result))
{
   $resultArr[] = $row;
}

foreach ($resultArr as $output)
{


if (isset($_POST['details']))
{
   echo "<h2>".$output['name']."</h2>";
   echo "<img src='".$output['image']."'>";
   echo "<p>Recipe Author: ".$output['author']."</p>";
   echo "<p>Ingredients: ".$output['ingredients']."</p>";
   echo "<p>Directions: ".$output['directions']."</p>";
   echo "<a href='listrecipes.php'><button name='dead' form='none' class='primary-btn btn btn-lg'>Back</button></a>";
}


if (isset($_POST['delete']))
{
   echo "<form method='post' action='managerecipes.php'>";
   echo "<h2>".$output['name']."</h2>";
   echo "<img src='".$output['image']."'>";
   echo "<p>Recipe Author: ".$output['author']."</p>";
   echo "<p>Ingredients: ".$output['ingredients']."</p>";
   echo "<p>Directions: ".$output['directions']."</p>";
   echo "<input type='hidden' name='photo' value='".$output['image']."'></input>";
   echo "<button class='primary-btn btn btn-lg' type='submit' name='confirmdelete' value='".$output['id']."'>Confirm Delete</button>";
   echo "</form>";
}


if (isset($_POST['update']))
{
   echo $output['name'];
}

}
?>

<?php

if (isset($_POST['confirmdelete']))
{
   $query = "delete from recipes where id='".$_POST['confirmdelete']."'";
   mysqli_query($conn, $query);
   @unlink($_POST['photo']);
   header("location: listrecipes.php");
}

?>


</div>
</form>	


      </div>

    </main><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
