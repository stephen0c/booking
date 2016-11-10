<?php

    $servername ="localhost";
    $username = "stephen_c";
    $password ="";
    $dbname ="c9";
    
    //Creates the connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if($conn->connect_error){
        die("Connection Failed, fam.".$conn->connect_error);
    }
    
?>