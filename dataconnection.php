<?php
    $servername = "Localhost";
    $username = "root";
    $password = "";
    $dbname = "prof";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
