<?php
session_start();
$host = "localhost";
$username = "2jayzMail";
$password = "2015info4";
$dbname = "mail";

$connection =  mysql_connect($dbhost,$dbuser,$dbpassword);
	if (!mysql_connect()) 
	{
		die("Connection failed: " . mysql_errno());
	} else{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql = "SELECT * FROM user WHERE UserName = '$username' AND Password = '$password'";
		$database = mysql_select_db($dbname,$connection);

		session_start();
		$rows = mysql_query($sql);
		if(mysql_num_rows($rows) == 1){
			while($row = mysql_fetch_array($rows)){
				$_SESSION["id"] = $rows["id"];
				$_SESSION["first_name"] = $rows["First"];
				$_SESSION["last_name"] = $rows["Last"];
				$_SESSION["username"] = $rows["User"];
				$_SESSION["password"] = $rows["Access"];
				header('HTTP/1.1 200 OK', true, 200);
    		}
    	} else{
		echo "<p>Invalid username or password</p>";
		header('HTTP/1.1 401 Unauthorized', true, 401);
		exit;
		}
	}

?>






