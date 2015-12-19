<?php
	session_start();
	
$connection =	mysql_connect(
getenv('IP'),
getenv('C9_USER')

);
     	 mysql_select_db("mail");
     	
		
$id = $_SESSION["id"];
$username = $_SESSION["username"];
$query = "SELECT * FROM message WHERE recipient_ids = '$id' ";
$rows = mysql_query($query);
?>

<html>
<head>
	<title> Inbox <?php echo $_SESSION["username"]?> </title>
	<link rel="stylesheet" type="text/css" href="home.css"/>
	<script src = "home.js" type="text/javascript"> </script>
	<script src = "prototype.js" type="text/javascript"> </script>
</head>
<body>
	<div id = "main">
		<div id = "title"> <span class = "admin"> Welcome <?php echo $_SESSION["username"]?></span>
		</div>
		<div id = "logout">
				<a href = "logout.php"> Logout</a>
			</div>
	</br>
	<div id = "functions">
		<button class = "tab1"> Inbox </button> <button class = "tab"> Compose</button>
	</div>
	<br>
	<div id = "inlay"> 
		<div class ="email">
			<?php
			while ($row = mysql_fetch_array($rows)){
				$user = $row['user_id'];
				$senderQuery = "SELECT * FROM user WHERE id = '$user' ";
				$values = mysql_query($senderQuery);
				$sender = "";
				while ($value = mysql_fetch_array($valuues)){
					$sender = $value["first_name"]." ".$value["last_name"];
				}
				$message = $row["id"];
				$q2 = "SELECT * FROM message_read WHERE message_id = '$mesage' ";
				$readMessages = mysql_query($q2);

				if(mysql_num_rows($readMessages)==0){
					?>
					<div class = "info">
						<button class = "mail1" id = "<?php echo $row['id']?>"> </button>
						<div class = "unread" id = "sub" ><?php echo $row["subject"]?></div>
						<div class = "unread" id = "sent" ><?php echo $sender?></div>
						
					</div>

					<?php
				}
				else{
					?>
					<div class = "info">
						<button class = "mail1" id="<?php echo $row['id']?>"> </button>
						<div  class = "read" id = "sub" ><?php echo $row["subject"]?></div>
						<div  class = "read" id = "sent" ><?php echo $sender?></div>
						
					</div>
					<?php
				}

				}
				?>
			</div>
		</div>
		
	</form>
</div>
</div>

</body>
</html>



				
			