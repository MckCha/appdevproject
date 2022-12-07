<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0">
    <link rel="stylesheet" href="project.css">
    <title>Creator Studio</title>
</head>
<body>
    <?php if (isset($_GET['error'] )) { ?>
        <p><?=$_GET['error']?></p>
    <?php } ?>
    <form method="post" enctype="multipart/form-data">
        Insert Video Link: <input type="text" name="my_video"> 
        Subject: <input type="text" name="subject">
        <input type="submit" name="submit" value="Upload">
    </form>


<?php session_start();

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


if (isset($_POST['submit']) && !empty($_POST['my_video']) && !empty($_POST['subject'])) {
    
    $result = $db->prepare("Call UploadVid(?,?)");
    $video_link = htmlspecialchars($_POST['my_video']);
    $subject = htmlspecialchars($_POST['subject']);
    $result->bind_param("ss", $subject, $video_link);
	$result->execute();
    //$query = $db->prepare("SELECT * lesson(lesson_subject, vid_link) VALUES(?, ?)");

    //$stmt = $db->prepare("INSERT INTO lesson(lesson_subject, vid_link) VALUES(?, ?)");
    //$stmt->bind_param("ss", $subject, $video_link);

    $db->close();
    //print_r($_POST['my_video']);
    //echo $video_link;
?>
<!--<div class="video"></br>-->
<div class="video">
<?php
    echo "<br></br>";
    echo "<iframe src=$video_link height='400' width='500' ></iframe>";
}
?>
</div>


</body>
</html>
