<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "films";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
        die("Connection failed". $conn->connec_error);
    }

?>