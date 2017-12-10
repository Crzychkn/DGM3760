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

   <form id="searchexpertise" action="search.php" method="post">
     <div class="form-group">
           <h1>Search Employee Expertise</h1>
         <label for="searchdata" class="form-group">Search Employee Expertise</label>
            <input name="searchdata" class="form-control" type="text" placeholder="Search Expertise">
<small id="passwordHelpBlock" class="form-text text-muted">Separate terms with a comma.</small>
   <br>
   <button name="searchexpertise" type="submit" form="searchexpertise" value="" class="primary-btn btn btn-sm">Search</button>

   <br>
   <br>


      </div>
</div>


<?php

$expertise;
$expertiseSanitized;
$expertiseTerms;

if (isset($_POST['searchexpertise']) && isset($_POST['searchdata']))
{
   
   $expertise = strtolower($_POST['searchdata']);

   $expertiseSanitized = str_replace(',',' ', $expertise);

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
      $whereList[] = "expertise like '%$term%'";
   }

   $whereClause = implode(' OR ',$whereList);

   $query = "select * from employees9";

   if (!empty($whereClause)) {
      $query .= " where $whereClause";
   }


   echo "<h3>Search Results for '$expertiseSanitized'</h3>";


   $result = mysqli_query($conn, $query) or die ('query failed');


   if (mysqli_num_rows($result) > 0) {

      while ($row = mysqli_fetch_array($result))
      {

         echo '<h4>'.$row['first']." ".$row['last'].'</h4>';
         echo '<p>Expertise: '.$row['expertise'].'</p>';
      }



   } // end if rows
   else {

      echo "No search results found matching $expertise";
   }

}//end isset


?>


    </main><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
  </body>
</html>
