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

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="project.css">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="bg"></div>
        
        <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        Contact Info
                    </div>
                </div>
        </div>
        <div class="fixed-top">
            <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
              <div class="username">
                 Welcome!
                <br>

              </div>
              <a class="btn btn-primary" href="creatorstudio.php" role="button">Creator Studio</a><br>
              <button type="button" class="btn btn-primary btn-x1">Your Creators</button><br>
              <button type="button" class="btn btn-primary btn-x1">Notifications</button><br>
              <button type="button" class="btn btn-primary btn-x1">Search</button><br>
              <h3>
                <?php if($_SESSION['logged_in'] == true) : ?>
                  <a class="btn btn-primary" href="logout.php" role="button">Logout</a>
                <?php else : ?>
                <?php endif; ?>
              </h3>
            </div>
            <div class="contact">
                E-Mail:
                <br>
                <br>
                Social Media:
            </div>
  </body>
  <script src="https://unpkg.com/@popperjs/core@2.4.0/dist/umd/popper.min.js"></script>
  <script src="bootstrap/js/bootstrap.js"></script>
</html>