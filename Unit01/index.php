<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Web Languages II</title>

    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  </head>

  <body>

    <main role="main" class="container">

      <div class="starter-template">
        <h1>Send Mail With PHP</h1>

<form id="movie" action="email.php" method="post">
  <div class="form-group">
    <label for="nameinput">Name</label>
    <input type="text" class="form-control" id="nameinput" name="name" placeholder="John Smith">
  </div>
  <div class="form-group">
    <label for="emailinput">Email address</label>
    <input type="email" class="form-control" id="emailinput" name="email" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="movieinput">Movie</label>
    <select class="form-control" id="movieinput" name="movie">
      <option>select movie</option>
      <option>Star Wars</option>
      <option>Lord of the Rings</option>
      <option>Star Trek</option>
      <option>The Matrix</option>
      <option>Mission Impossible</option>
    </select>
  </div>
  <div class="form-group">
    <label for="viewersinput">Number of Viewers</label>
    <select multiple class="form-control" id="viewersinput" name="viewers">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" name="popcorn" value="popcorn">
  Popcorn
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" name="drink" value="drink">
  Drink
  </label>
</div>  

  <div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" name="candy" value="candy">
Candy
  </label>
</div>


  <div class="form-group">
    <label for="messageinput">Special Request</label>
    <textarea class="form-control" id="messageinput" rows="3" name="request" placeholder="Type Message Here..."></textarea>
  </div>

<button type="submit" form="movie" value="submit" class="primary-btn btn btn-lg">Submit</button>
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
