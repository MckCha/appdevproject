<?php session_start();
//$_SESSION['verified'] = false;
//require_once("db.php");
//$db = get_connnection();
//pass: deezonez17
//hashed: $2y$10$7TqZdbfjyzq.ZhM1IVSaqOD8kXabtlmZzCzj2AMyx5upouFln1goO

function get_connection() {
  static $connection;
  
  if (!isset($connection)) {
      // Connect to the database
      $connection = mysqli_connect('localhost', 'learnapp', 
          'job19Fmuslk','learnapp') 
          or die(mysqli_connect_error());
  }
  if ($connection === false) {
      echo "Unable to connect to database<br/>";
      echo mysqli_connect_error();
  }

  return $connection;
}

$db = get_connection();
?>

<?php if (!isset($_SESSION['logged_in']) && $_SESSION['logged_in'] != true): ?>
	<h3> You are not logged in!</h3>
	<br>
    <?php else: ?>
	<h3> You are logged in! </h3>
    <?php
        if ($_SESSION['logged_in'] == true) {
			  header("Location: home.php");
	    }
      
    ?>

    <?php endif; ?>

<?php
if (isset($_POST) && !empty($_POST)) {
	$user = htmlspecialchars($_POST['username']);
	$pass = htmlspecialchars($_POST['password']);

	$stmt = $db->prepare("SELECT * FROM user WHERE username = ? AND password = ?");
	$stmt->bind_param("ss", $user,$pass);
	$stmt->execute();
	$result = $stmt->get_result();
	if ($result->num_rows == 1) {

		$_SESSION['logged_in'] = true;
	}
	$result->free();
  header("Location: home.php");
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="project.css">
    <title>Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="homecon">
      <img src="pepe.png" class="rounded mx-auto d-block" id="logo" alt="..."> <br><br><br>
      <form method = "POST">
          Username: <input type="username" name="username" />
          <br>
          <br>
          Password: <input type="password" name="password" />
          <br>
          <br>
          <input type="submit" class="btn btn-primary" name="Login" value="Login" />
      </form>
      <a href="signup.php" name="signup" class="btn btn-primary" role="button" aria-pressed="true">Sign Up</a>
      <br><br><br>
    </div>
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> -->
  </body>
  <script src="https://unpkg.com/@popperjs/core@2.4.0/dist/umd/popper.min.js"></script>
  <script src="bootstrap/js/bootstrap.js"></script>
</html>
