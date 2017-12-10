<?php include'header.php'?>

    <main role="main" class="container">

<?php include'navigation.php'?>

<?php

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
header("location: index.php");
exit;
}


?>

      <div class="starter-template">
        <h1>Search Employee Access</h1>

<form id="searchemployees" action="admin.php" method="post">
  <div class="form-group">
<br>

<?php

$query = "select * from access8 order by item";

$result = mysqli_query($conn, $query) or die('query failed');

?>
<div>
<?php while ($row = mysqli_fetch_array($result)): ?>

<button name="search" type="submit" form="searchemployees" value="<?php echo $row['id'];?>" class="primary-btn btn btn-sm"><?php echo $row['item']?></button>
<br>
<br>

<?php endwhile; ?>



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
