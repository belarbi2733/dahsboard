<?php
    $servername = "localhost";
    $username = "leaderboard";
    $password = "57SAdR&z6G0CXfs";
    $database="leaderboard";
    
   // Create connection
    $conn = new mysqli($servername, $username, $password,$database);
    
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

    //echo "Connected successfully";
?>