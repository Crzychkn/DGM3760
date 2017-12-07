<?php include'header.php' ?>

    <main role="main" class="container">

<?php include'navigation.php' ?>

      <div class="starter-template">
        <h1>Add Employee</h1>

<form id="employee" action="addemployee2.php" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="first">First Name</label>
    <input type="text" class="form-control" id="first" name="first" placeholder="Jane">
  </div>

  <div class="form-group">
    <label for="last">Last Name</label>
    <input type="text" class="form-control" id="last" name="last" placeholder="Smith">
  </div>

  <div class="form-group">
    <label for="phone">Phone</label>
    <input type="tel" class="form-control" id="phone" name="phone" placeholder="1234567891">
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="name@company.com">
  </div>

  <div class="form-group">
    <label for="expertise">Expertise</label>
    <input type="text" class="form-control" id="expertise" name="expertise" placeholder="Experienced in Human Resources and Management">
  </div>

  <div class="form-group">
    <label for="picture">Picture</label>
    <input type="file" class="form-control-file" id="picture" name="picture">
    <br>
    <p>Image must be .jpg, .png, or .gif. Size must be less than 1mb and less than 200px X 200px.</p>
  </div>


<button type="submit" form="employee" value="submit" class="primary-btn btn btn-lg">Add</button>
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
