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
		$info = get_msg($con);
		foreach ($info as $message) {
			echo $message['Name'].'Sent<br />';
			echo $message['msg'].'<br /><br />';
		}
	?>
	</div>
	<form action="index.php" method ="POST">
		<label>Enter Name: <input type="text" name="name" /></label>
		<label>Enter Msg: <input type="text" name="msg" /></label><br/>
		<input type="submit" name="send" value="Send Msg">
	</form>
</body>
</html>