
<?php
	session_start();
	
$connection =	mysql_connect(
getenv('IP'),
getenv('C9_USER')

);
     	 mysql_select_db("mail");
     	$username = $_POST['username'];
		$password = $_POST['password'];
		
		$sql = "SELECT * FROM user WHERE username = '".$username."' AND password = '".$password."' LIMIT 1";
		

		session_start();
		$rows = mysql_query($sql);
		//print $rows;
		$numRows = mysql_num_rows($rows);
		
		
    		if($numRows > 0){
    			http_response_code(200);
    		while($row = mysql_fetch_array($rows)){
				$_SESSION["id"] = $row["id"];
				$_SESSION["first_name"] = $row["first_name"];
				$_SESSION["last_name"] = $row["last_name"];
				$_SESSION["username"] = $row["username"];
				$_SESSION["password"] = $row["password"];
    		}
    		
    			//print "found";
    		}else{
    		http_response_code(404);
    		//}


echo $rows;
mysql_close($connection);
?>






