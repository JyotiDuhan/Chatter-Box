<?php

$host = '<hostname>';
$user = '<username>';
$pass = '<password>';
$db_name = '<database_name>';


if($con = mysqli_connect($host,$user,$pass,$db_name)){
	echo "connected successfully"."<br/>";
}
else{
	echo "no connections available";
}


?>