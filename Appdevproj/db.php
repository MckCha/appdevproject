<?php
session_start();
//---------EXAMPLE!!!! YOU NEED TO  SET UP DATABASE FIRST--------

function get_connnection() {
    static $connection;

    if(!isset($connection)) {
        $connection = mysqli_connect('localhost', 'learnapp', 
        'job19Fmuslk', 'learnapp')
        or die(mysqli_connect_error());
    }
    if ($connection === false) {
        echo "Unable to connect to database<br/>";
        echo mysqli_connect_error();
    }
      
    return $connection;
}

?>