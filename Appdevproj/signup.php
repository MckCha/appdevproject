<?php session_start();
//$_SESSION['verified'] = false;
//require_once("db.php");
//$db = get_connnection();
//pass: deezonez17
//hashed: $2y$10$7TqZdbfjyzq.ZhM1IVSaqOD8kXabtlmZzCzj2AMyx5upouFln1goO
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
    <div class="bg"></div>
    <div class="fixed-bottom">
      <img src="pepe.png" class="rounded mx-auto d-block" alt="..."> <br><br><br>
      <form method = "POST">
          Username: <input type="username" name="username" />
          <br>
          <br>
          Password: <input type="password" name="pass" />
          <br>
          <br>
          <input type="submit" class ="btn btn-primary" name="Login" value="Login" />
      </form>
      <br>
      <a href="https://www.cs.csub.edu/~mcha/3390/signup.php" class="btn btn-primary" role="button" aria-pressed="true">Sign Up</a>
      <br><br><br>
    </div>
  </body>
  <script src="https://unpkg.com/@popperjs/core@2.4.0/dist/umd/popper.min.js"></script>
  <script src="bootstrap/js/bootstrap.js"></script>
</html>