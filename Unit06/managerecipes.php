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
$query = "select * from recipessix where id='$id'";

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

  echo "<div class='form-group'>";
    echo "<label for='nameinput'>Recipe Name</label>";
    echo "<input type='text' class='form-control' id='nameinput' name='recipename' value='".$output['name']."'";
  echo "</div>";

  echo "<div class='form-group'>";
    echo "<label for='cooktime'>Cook Time</label>";
    echo "<input type='text' class='form-control' id='cooktime' name='cooktime' value='".$output['cooktime']."'";
  echo "</div>";

  echo "<div class='form-group'>";
    echo "<label for='ingredients'>Ingredients</label>";
    echo "<textarea type='text' class='form-control' rows='6' id='ingredients' name='ingredients' value='".$output['ingredients']."'></textarea>";
  echo "</div>";

  echo "<div class='form-group'>";
    echo "<label for='directions'>Directions</label>";
    echo "<textarea type='text' class='form-control' rows='6' id='directions' name='directions' value='".$output['directions']."'></textarea>";
  echo "</div>";

  echo "<div class='form-group'>";
    echo "<label for='author'>Author</label>";
    echo "<input type='text' class='form-control' id='author' name='author' value='".$output['author']."'>";
  echo "</div>";


echo "<button type='submit' form='managerecipes' value='".$output['id']."' name='confirmupdate' class='primary-btn btn btn-lg'>Update</button>";
echo "    ";
echo "<a href='listrecipes.php'><button type='submit' form='dead' value='submit' class='primary-btn btn btn-lg'>Cancel</button></a>";

}

}
?>

<?php

if (isset($_POST['confirmdelete']))
{
   $query = "delete from recipessix where id='".$_POST['confirmdelete']."'";
   mysqli_query($conn, $query);
   @unlink($_POST['photo']);
   header("location: listrecipes.php");
}

if (isset($_POST['confirmupdate']))
{
   $query = "update recipessix set name='".$_POST['recipename']."', cooktime='".$_POST['cooktime']."', ingredients='".$_POST['ingredients']."', directions='".$_POST['directions']."', author='".$_POST['author']."' where id='".$_POST['confirmupdate']."';";
   mysqli_query($conn, $query);
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
  </body>
</html>
