<?php
    $servername = "localhost";
    $username = "btech";
    $password = "amilas/308";
    $dbname = 'feedback';
    // $db = new mysqli('localhost', 'btech', 'amilas/308', 'feedback');
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if($conn->connect_error){
        die('Connection Failed ' . $conn->connect_error);
    }
    echo 'Connected';


    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    
    // // Create connection
    // $conn = mysqli_connect($servername, $username, $password);
    
    // // Check connection
    // if (!$conn) {
    //   die("Connection failed: " . mysqli_connect_error());
    // }
    // echo "Connected successfully";
    ?>