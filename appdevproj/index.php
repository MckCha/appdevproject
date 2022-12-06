<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0">
    <title>Video upload php and mysql</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
        }
        input {
            font-size: 2rem;
        }
    </style>
</head>
<body>
    <?php if (isset($_GET['error'] )) { ?>
        <p><?=$_GET['error']?></p>
    <?php } ?>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="my_video">
        <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>
