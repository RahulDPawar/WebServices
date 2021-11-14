<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "userdatatofollowup";

    $con = mysqli_connect($server, $user, $pass);
     if(!$con){
        die('Connection is failed due to ' . mysqli_connect_error());
    }
    echo "Success connecting to the server"; 
?>