<?php

if (isset($_POST['submit']) && isset($_FILES['my_video'])) {
    //echo"<pre>";
    //print_r($_FILES['my_video']);

    $video_name = $_FILES['my_video']['name'];
    $tmp_name = $_FILES['my_video']['tmp_name'];
    $error = $_FILES['my_video']['error'];

    if ($error === 0) {
        $video_ex = pathinfo($video_name, PATHINFO_EXTENSION);

        //echo $video_ex;
        $video_ex_lc = strtolower($video_ex);

        $allowed_exs = array("mp4", 'webm', 'avi', 'flv');

        if (in_array($video_ex_lc, $allowed_exs)) {
            //echo "YES";
            $new_video_name = uniqid("video-", true). '.' .$video_ex_lc;
            $video_upload_path = 'uploads/' .$new_video_name;
            move_uploaded_file($tmp_name, $video_upload_path);

        }else {
            $em = "You cannot upload this file type";
            header("Location: index.php?error=$em");
        }
    }
}else{
    header("Location: index.php");
}
