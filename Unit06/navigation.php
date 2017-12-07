<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="index.php">Submit Recipe</a>
      <a class="nav-item nav-link" href="listrecipes.php">List Recipes</a>
      <a class="nav-item nav-link" href="admin.php">Admin</a>
      <?php if (isset($_SESSION['username']) && isset($_SESSION['password'])): ?>
      <a class="nav-item nav-link" href="logout.php">Logout</a>
      <?php endif; ?>
    </div>
  </div>
</nav>
