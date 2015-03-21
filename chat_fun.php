<?php
	include('/var/www/chat/includes/db.php');

	function get_msg($con){
		$sql = "select * from chats";
		$result = mysqli_query($con,$sql);
		$info = array();
		while($message = mysqli_fetch_assoc($result)){
			$info[] = array('Name'=>$message['Name'] , 'msg'=>$message['msg']);
		}
		// $data = mysqli_fetch_assoc($result);
		// $info[] = array('Name'=>$data['Name'] , 'msg'=>$data['msg']);
		return $info;
	}
	
	// get_msg($con);

	function send_msg($name,$msg,$con){
		$n = mysqli_real_escape_string($con,$name);
	    $m = mysqli_real_escape_string($con,$msg);
	 //    die($msg);
	    $sql = "INSERT INTO `chats` (`Name`, `msg`) VALUES('$n','$m')";

	    if($result = mysqli_query($con,$sql)){
	    	return true;
	    }
	    else{
	    	return false;
	    }
	}

?>