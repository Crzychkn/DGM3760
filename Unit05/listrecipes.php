<?php include'../../includes/connect.php'?>

<?php
	if (isset($_POST))
	{

		$query = "select * from recipes";

		$result = mysqli_query($conn, $query);

		foreach ($_POST['todelete'] as $delete)
		{
         $query = "delete from newsletter where id=$delete";

         $result = mysqli_query($conn, $query);
		  	
		}
	}


?>

<?php include'header.php'?>

    <main role="main" class="container">

<?php include'navigation.php'?>

      <div class="starter-template">
        <h1>Manage Recipes</h1>

<form id="unsubscribe" action="managerecipes.php" method="post">
  <div class="form-group">
    <label for="nameinput">Recipes</label>
<br>
<!-- Checkbox and foreach loop here -->

<?php

$query = "select * from recipes";

$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_array($result))
{
	echo '<label>';
	echo '<input type="checkbox" value="'.$row['id'].'" name="todelete[]" /> ';
	echo $row['name']." " ." ". $row['cooketime']." "." ".$row['author'];
	echo '</label>';
	echo '<br>';
}

?>


  </div>

<button type="submit" form="unsubscribe" value="submit" class="primary-btn btn btn-lg">Unsubscribe</button>
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
