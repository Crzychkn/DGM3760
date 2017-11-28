<?php include'../../includes/connect.php'?>

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
        <h1>Newsletter Signup</h1>

<form id="movie" action="email.php" method="post">
  <div class="form-group">
    <label for="nameinput">First Name</label>
    <input type="text" class="form-control" id="nameinput" name="firstname" placeholder="John">
  </div>
  <div class="form-group">
    <label for="nameinput">Last Name</label>
    <input type="text" class="form-control" id="nameinput" name="lastname" placeholder="Smith">
  </div>
  <div class="form-group">
    <label for="emailinput">Email address</label>
    <input type="email" class="form-control" id="emailinput" name="email" placeholder="name@example.com">
  </div>

<button type="submit" form="movie" value="submit" class="primary-btn btn btn-lg">Sign Up</button>
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
