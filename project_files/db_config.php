<?php
    $host = "localhost";
    $username = "root";
    $password = ""; // "siggles"
    $db_name = "sssd_final";

    $mysqli = new mysqli($host, $username, $password, $db_name);
    if (mysqli_connect_errno()) {
        echo "Error: could not connect to the database";
        exit;
    }
?>