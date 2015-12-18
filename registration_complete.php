<html>
    <head>
        <title>Registration Complete</title>
    </head>
    <body>
        <?php
            // $fname = $_POST["fname"];
            // $lname = $_POST["lname"];
            // $user = $_POST["user"];
            // $pass = $_POST["pass"];

            $conn = mysql_connect('127.0.0.1', 'root', '', 'cheapomail');

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            echo "Connected successfully";
            
            // $connection = mysql_connect('127.0.0.1', 'comp2190SA','2015Sem1','MPMgmtDB');
            
            // $sql = "INSERT INTO User (id, firstname, lastname, password, username) VALUES ('$id', '$fname', '$lname', '$pass', '$user')";
            
            echo($fname.", ".$lname.", ".$user.", ".$pass);
        ?>
    </body>
</html>