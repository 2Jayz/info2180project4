<html>
    <head>
        <title>Registration Complete</title>
    </head>
    <body>
        <?php
            $fname = $_POST["fname"];
            $lname = $_POST["lname"];
            $user = $_POST["user"];
            $pass = $_POST["pass"];
//             $salt = mt_rand();
// 			$digest = md5($pass.$salt);
            
//             $connection = mysql_connect();
            
//             $sql = "INSERT INTO User (id, firstname, lastname, password, username) VALUES ('$id', '$fname', '$lname', '$pass', '$user')";
            
            echo($fname.", ".$lname.", ".$user.", ".$pass);
        ?>
    </body>
</html>