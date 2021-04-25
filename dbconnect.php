<?php
    $server="localhost";
    $username="root";
    $password="chand";
    $databse="eventcurator";

    $connection =mysqli_connect($server, $username, $password, $databse);

    if(!$connection) {
        die("Databse Error");
    }
?>