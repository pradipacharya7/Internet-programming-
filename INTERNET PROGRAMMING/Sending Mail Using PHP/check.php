<?php
function sendmail()
{
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

$to = "youracharya@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";



mail($to,$subject,$txt,$headers);
if(mail($to,$subject,$txt,$headers)==true){
	echo "sent";
}
}
sendmail();
?>