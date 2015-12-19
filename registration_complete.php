<?php
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $user = $_POST["user"];
    $pass = $_POST["pass"];

    $conn = mysql_connect('127.0.0.1', 'root', '', 'cheapomail');
    
    $sql = "INSERT INTO User (first_name, last_name, username, password) VALUES ('$fname', '$lname', '$user', '$pass')";
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "Connected successfully";
    $conn->query($sql);
    
    // if(($connection->query($sql)) === TRUE){
        
    // }
    
    
    // echo($fname.", ".$lname.", ".$user.", ".$pass);
    
    mysql_close();
?>
