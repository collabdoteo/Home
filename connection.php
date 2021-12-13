<?php
    $servername = "sg2plzcpnl487148";
    $username = "collabeo";
    $password = "Collab@2021#";
    $db = "collabeo";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$db);
    // Check connection
    if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
    }
    // echo "Connected successfully";
?>