<html>
<?php
include('/var/www/chat/chat_fun.php');

if(isset($_POST['send'])){
	if(send_msg($_POST['name'],$_POST['msg'],$con)){
		echo "Message Sent";
	}
	else{
		echo "Failed";
	}
}

?>
<head>
	<title>Chat Box</title>
</head>
<body>
	<div id='msg'>
	<?php
		$message = get_msg($con);
			echo $message['Name'].'Sent<br />';
			echo $message['msg'];
	?>
	</div>
	<form action="index.php" method ="POST">
		<label>Enter Name: <input type="text" name="name" /></label>
		<label>Enter Msg: <input type="text" name="msg" /></label><br/>
		<input type="submit" name="send" value="Send Msg">
	</form>
</body>
</html>