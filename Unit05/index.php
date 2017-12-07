<?php include'header.php' ?>

    <main role="main" class="container">

<?php include'navigation.php' ?>

      <div class="starter-template">
        <h1>Submit Recipe</h1>

<form id="recipe" action="addrecipe.php" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="nameinput">Recipe Name</label>
    <input type="text" class="form-control" id="nameinput" name="recipename" placeholder="Smoked Chicken">
  </div>

  <div class="form-group">
    <label for="cooktime">Cook Time</label>
    <input type="text" class="form-control" id="cooktime" name="cooktime" placeholder="30 Minutes">
  </div>

  <div class="form-group">
    <label for="ingredients">Ingredients</label>
    <textarea type="text" class="form-control" rows="6" id="ingredients" name="ingredients" placeholder="4 cups water"></textarea>
  </div>

  <div class="form-group">
    <label for="directions">Directions</label>
    <textarea type="text" class="form-control" rows="6" id="directions" name="directions" placeholder="Mix water, milk, and sugar in pot."></textarea>
  </div>

  <div class="form-group">
    <label for="picture">Picture</label>
    <input type="file" class="form-control-file" id="picture" name="picture">
    <br>
    <p>Image must be .jpg, .png, or .gif. Size must be less than 1mb and less than 200px X 200px.</p>
  </div>

  <div class="form-group">
    <label for="author">Author</label>
    <input type="text" class="form-control" id="author" name="author" placeholder="John Smith">
  </div>



<button type="submit" form="recipe" value="submit" class="primary-btn btn btn-lg">Submit</button>
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
