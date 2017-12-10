<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <?php if(isset($_SESSION['username'])): ?>
      <a class="nav-item nav-link" href="addemployee.php">Add Employee</a>
      <a class="nav-item nav-link" href="admin.php">Manage Employees</a>
      <a class="nav-item nav-link" href="search.php">Search</a>
      <a class="nav-item nav-link" href="access.php">Access</a>
      <a class="nav-item nav-link" href="logout.php">Logout</a>
      <p class="nav-item nav-link">Logged in as <?php echo $_SESSION['username']; ?></p>
      <?php else: ?>
      <a class="nav-item nav-link" href="index.php">Login</a>
      <a class="nav-item nav-link" href="register.php">Register</a>
      <?php endif; ?>
    </div>
  </div>
</nav>
