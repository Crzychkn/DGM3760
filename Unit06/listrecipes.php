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

$query = "select * from recipessix";

$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_array($result))
{
   $resultArr[] = $row;
}

?>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Image</th>
      <th scope="col">Recipe Name</th>
      <th scope="col">Cooktime</th>
      <th scope="col">Author</th>
      <th scope="col">Manage</th>
    </tr>
  </thead>
  <tbody>

<?php foreach($resultArr as $output): ?>
<?php if ($output['approved'] == 1): ?>
    <tr>
    <td><img src="<?php echo $output['image']?>" alt="" class="img-thumbnail small-thumb"></td>
    <td><?php echo $output['name']?></td>
    <td><?php echo $output['cooktime']?></td>
    <td><?php echo $output['author']?></td>
    <td>
      <button name="details" type="submit" form="managerecipes" value="<?php echo $output['id'];?>" class="primary-btn btn btn-sm">Details</button>
    </td>
    </tr>
<?php endif; ?>
<?php endforeach; ?>

  </tbody>
</table>


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
