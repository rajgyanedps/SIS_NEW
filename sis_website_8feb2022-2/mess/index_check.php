<?php
	//error_reporting(0);
	$hostname = '115.124.104.167';
	$username = 'dpsgs_mess';
	$password = 'mess@123';
	$db_name = 'dpsgs_mess';
$conn1 = mysql_connect('localhost','sisschoo_selaquimess','sisschoo_selaquimess');
if (!$conn1) {
   die('Could not connect Ajay: ' . mysql_error());
}else{ echo "connected successfully";}


	
?>