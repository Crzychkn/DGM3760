<?php include'header.php'?>

<?php

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
header("location: index.php");
exit;
}

?>

    <main role="main" class="container">

<?php include'navigation.php'?>

      <div class="starter-template">
        <h1>Manage Employees</h1>

<form id="manageemployees" action="manageemployees.php" method="post">
  <div class="form-group">
<br>

<?php

$query = "select * from employees8";

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
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Expertise</th>
    </tr>
  </thead>
  <tbody>

<?php foreach($resultArr as $output): ?>
    <tr>
    <td><img src="<?php echo $output['image']?>" alt="" class="img-thumbnail small-thumb"></td>
    <td><?php echo $output['first']." ".$output['last']?></td>
    <td><?php echo $output['phone']?></td>
    <td><?php echo $output['email']?></td>
    <td><?php echo $output['expertise']?></td>
    <td>
      <button name="details" type="submit" form="manageemployees" value="<?php echo $output['id'];?>" class="primary-btn btn btn-sm">Details</button>
      <button name="delete" type="submit" form="manageemployees" value="<?php echo $output['id'];?>" class="primary-btn btn btn-sm">Delete</button>
      <button name="update" type="submit" form="manageemployees" value="<?php echo $output['id'];?>" class="primary-btn btn btn-sm">Update</button>
    </td>
    </tr>
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
