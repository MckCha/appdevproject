<?php
//---------EXAMPLE!!!! YOU NEED TO  SET UP DATABASE FIRST--------

function get_connnection() {
    // server address, username, password, databse name
    return mysqli_connect('localhost', 'learnapp', 'job19Fmuslk', 'learnapp');
        
}

?>