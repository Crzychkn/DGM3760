<?php include'header.php' ?>

    <main role="main" class="container">

<?php include'navigation.php' ?>

      <div class="starter-template">
        <h1>Admin Login</h1>

<form id="login" action="admin.php" method="post">

  <div class="form-group">
    <label for="nameinput">User Name</label>
    <input type="text" class="form-control" id="username" name="username" >
  </div>

  <div class="form-group">
    <label for="cooktime">Password</label>
    <input type="password" class="form-control" id="password" name="password" >
  </div>


<button type="submit" form="login" value="submit" class="primary-btn btn btn-lg">Login</button>
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
