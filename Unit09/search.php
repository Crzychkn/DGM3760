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

<?php

if (isset($_POST['searchexpertise']) && isset($_POST['searchdata']))
{
   
   $expertise = strtolower($_POST['searchdata']);

   $expertiseSanitized = str_replace(',',' ', $expertise);
   echo $expertiseSanitized;

   $expertiseTerms = explode(' ', $expertiseSanitized);

   foreach ($expertiseTerms as $terms)
   {
      if (!empty($terms))
      {
         $searchArray[] = $terms;
      }
   }

   $whereList = [];

   foreach ($searchArray as $term)
   {
      $whereList[] = "expertise like '%term%'";
   }

   $whereClause = implode('OR',$whereList);

   echo $whereClause;
}



?>



   <div class="starter-template">

   <form id="searchexpertise" action="search.php" method="post">
     <div class="form-group">
           <h1>Search Employee Expertise</h1>
         <label for="searchdata" class="form-group">Search Employee Expertise</label>
            <input name="searchdata" class="form-control" type="text" placeholder="Search Expertise">
   <br>
   <button name="searchexpertise" type="submit" form="searchexpertise" value="" class="primary-btn btn btn-sm">Search</button>

   <br>
   <br>


        <h1>Search Employee Access</h1>

<form id="searchemployees" action="admin.php" method="post">
  <div class="form-group">
<br>

<?php

$query = "select * from access9 order by item";

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
