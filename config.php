<?php 
    //Database
    $servername = "localhost";
    $username = "root";
    $password = "P0r@dmin!23$";
    $dbname = "trainee";
    $port = 3307;

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname, $port);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    //Line
    $LineToken = "en3SECmdIFKJ1SNLDdvUBkHd9tBtQepSzBLULMVxPrk";

?>