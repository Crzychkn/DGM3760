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

$id = 0;

if (isset($_POST['details']))
{
   $id = $_POST['details'];
}
elseif (isset($_POST['delete']))
{
   $id = $_POST['delete'];
}
elseif (isset($_POST['update']))
{
   $id = $_POST['update'];
}
elseif (isset($_POST['approve']))
{
   $id = $_POST['approve'];
}

$query = "select * from employees8 where id='$id'";

$result = mysqli_query($conn, $query);

$resultArr = [];

while ($row = mysqli_fetch_array($result))
{
   $resultArr[] = $row;
}

foreach ((array) $resultArr as $output)
{


if (isset($_POST['details']))
{
   echo "<h2>".$output['first']." ".$output['last']."</h2>";
   echo "<img src='".$output['image']."'>";
   echo "<p>Phone: ".$output['phone']."</p>";
   echo "<p>Email: ".$output['email']."</p>";
   echo "<p>Expertise: ".$output['expertise']."</p>";
   echo $output['pay'] == 1 ? '<p>Pay Type: Salary':'<p>Pay Type: Hourly'."</p>";
   echo "<br>";


   $joinQuery = "select * from access8 inner join approvedaccess8 on (access8.id = approvedaccess8.item_id) where emp_id='".$output['id']."';";

   $result2 = mysqli_query($conn, $joinQuery) or die ('query failed');

   echo "<br>";
   echo "<h3>Employee has access to:</h3>";

   while ($row2 = mysqli_fetch_array($result2)) {
      echo $row2['item'];
      echo "<br>";
   }

   echo "<br>";

  echo "<div class='form-group'>";
    echo "<label for='emailname'>Your Name</label>";
    echo "<input type='text' class='form-control' id='emailname' name='emailname'>";
  echo "</div>";

  echo "<div class='form-group'>";
    echo "<label for='emailemail'>Your Email</label>";
    echo "<input type='email' class='form-control' id='emailemail' name='emailemail'>";
  echo "</div>";

  echo "<div class='form-group'>";
    echo "<label for='emailmessage'>Your Message</label>";
    echo "<textarea type='text' rows='3' class='form-control' id='emailmessage' name='emailmessage'></textarea>";
  echo "</div>";

   echo "<input type='hidden' name='id' value='".$output['id']."'>";
   echo "<button name='emailconfirm' form='manageemployees' class='primary-btn btn btn-lg'>Email</button>";
   echo "    ";
   echo "<a href='admin.php'><button name='dead' form='none' class='primary-btn btn btn-lg'>Back</button></a>";

}


if (isset($_POST['delete']))
{
   echo "<form method='post' action='manageemployees.php'>";
   echo "<h2>".$output['first'].$output['last']."</h2>";
   echo "<img src='".$output['image']."'>";
   echo "<p>Phone: ".$output['phone']."</p>";
   echo "<p>Email: ".$output['email']."</p>";
   echo "<p>Specialty: ".$output['expertise']."</p>";
   echo $output['pay'] == 1 ? '<p>Pay Type: Salary':'<p>Pay Type: Hourly'."</p>";
   echo "<br>";



   $joinQuery = "select * from access8 inner join approvedaccess8 on (access8.id = approvedaccess8.item_id) where emp_id='".$output['id']."';";

   $result2 = mysqli_query($conn, $joinQuery) or die ('query failed');

   echo "<br>";
   echo "<h3>Employee has access to:</h3>";

   while ($row2 = mysqli_fetch_array($result2)) {
      echo $row2['item'];
      echo "<br>";
   }

   echo "<br>";



   echo "<input type='hidden' name='photo' value='".$output['image']."'></input>";
   echo "<button class='primary-btn btn btn-lg' type='submit' name='confirmdelete' value='".$output['id']."'>Confirm Delete</button>";
   echo "</form>";
}


if (isset($_POST['update']))
{

  echo "<div class='form-group'>";
    echo "<label for='first'>First Name</label>";
    echo "<input type='text' class='form-control' id='first' name='first' value='".$output['first']."'";
  echo "</div>";

  echo "<div class='form-group'>";
    echo "<label for='last'>Last Name</label>";
    echo "<input type='text' class='form-control' id='last' name='last' value='".$output['last']."'";
  echo "</div>";

  echo "<div class='form-group'>";
    echo "<label for='phone'>Phone</label>";
    echo "<input type='tel' class='form-control' id='phone' name='phone' value='".$output['phone']."'>";
  echo "</div>";

  echo "<div class='form-group'>";
    echo "<label for='email'>Email</label>";
    echo "<input type='email' class='form-control' id='email' name='email' value='".$output['email']."'>";
  echo "</div>";

  echo "<div class='form-group'>";
    echo "<label for='expertise'>Expertise</label>";
    echo "<input type='text' class='form-control' id='expertise' name='expertise' value='".$output['expertise']."'>";
  echo "</div>";


echo "<button type='submit' form='manageemployees' value='".$output['id']."' name='confirmupdate' class='primary-btn btn btn-lg'>Update</button>";
echo "    ";
echo "<a href='admin.php'><button type='submit' form='dead' value='submit' class='primary-btn btn btn-lg'>Cancel</button></a>";

}
}
?>

<?php

if (isset($_POST['confirmdelete']))
{
   $query = "delete from employees8 where id='".$_POST['confirmdelete']."'";
   mysqli_query($conn, $query);
   @unlink($_POST['photo']);
   header("location: admin.php");
}

if (isset($_POST['confirmupdate']))
{
   $query = "update employees8 set first='".$_POST['first']."', last='".$_POST['last']."', phone='".$_POST['phone']."', email='".$_POST['email']."', expertise='".$_POST['expertise']."' where id='".$_POST['confirmupdate']."';";
   mysqli_query($conn, $query);
   header("location: admin.php");
}

if (isset($_POST['emailconfirm']))
{
   $query = "select * from employees8 where id='".$_POST['id']."'";
   $result = mysqli_query($conn, $query);
   $row = mysqli_fetch_array($result);
   $subject = "You have a new message!";
   $mailMessage = "Hello ".$row['first']." ".$row['last']."!
                  You have been sent a message! Details are below:
     
                  Sender Name: ".$_POST['emailname']."
                  Sender Email: ".$_POST['emailemail']."
                  Sender Message: ".$_POST['emailmessage']."";
   mail($row['email'], $subject, $mailMessage, 'FROM:'.$_POST['emailemail']);
   header("location: thanks.php");
}

?>
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
