<?php session_start();
//
//function get_connection() {
//    static $connection;
//    
//    if (!isset($connection)) {
//        // Connect to the database
//        $connection = mysqli_connect('localhost', 'learnapp', 
//            'job19Fmuslk','learnapp') 
//            or die(mysqli_connect_error());
//    }
//    if ($connection === false) {
//        echo "Unable to connect to database<br/>";
//        echo mysqli_connect_error();
//    }
//  
//    return $connection;
//  }
//  
//  $db = get_connection();
//
//
//if (isset($_POST['submit']) && !empty($_POST['my_video']) && !empty($_POST['subject'])) {
//    $video_link = htmlspecialchars($_POST['my_video']);
//    $subject = htmlspecialchars($_POST['subject'])
//
//    $stmt = $db->prepare("INSERT INTO lesson(subject, vid_link) VALUES($subject, $video_link)");
//    //$stmt->bind_param("ss", $subject, $video_link);
//    $stmt->execute();
//    $result = $stmt->get_result();
//   
//    if ($result !== false) {
//        //$_SESSION['logged_in'] = true;
//        header("Location: creatorstudio.php");
//    }   
//    $result->free();
//    $db->close();
//    //print_r($_POST['my_video']);
//}
//
//    //}else{
////    header("Location: creatorstudio.php");
////}
////echo"<pre>";
//    //print_r($_FILES['my_video']);
//
//   //$video_name = $_FILES['my_video']['name'];
//   //$tmp_name = $_FILES['my_video']['tmp_name'];
//   //$error = $_FILES['my_video']['error'];
//
//   //if ($error === 0) {
//   //    $video_ex = pathinfo($video_name, PATHINFO_EXTENSION);
//
//   //    //echo $video_ex;
//   //    $video_ex_lc = strtolower($video_ex);
//
//   //    $allowed_exs = array("mp4", 'webm', 'avi', 'flv');
//
//   //    if (in_array($video_ex_lc, $allowed_exs)) {
//   //        //echo "YES";
//   //        $new_video_name = uniqid("video-", true). '.' .$video_ex_lc;
//   //        $video_upload_path = 'uploads/' .$new_video_name;
//   //        move_uploaded_file($tmp_name, $video_upload_path);
//
//   //    }else {
//   //        $em = "You cannot upload this file type";
//   //        header("Location: index.php?error=$em");
//   //    }
//   //}
//?>