<?PHP
$dir = "../secure/";
$wkdir = getcwd();
include($dir."functions.php");

$to = "Test <technogeek6952@gmail.com>";
$sub = $_POST['sub'];
//$sub = "Test for PHPMail on robotics website";
$message = str_replace("\n.", "\n..", $_POST['comment']);
//$message = "I hope this works";

$name = $_POST['name'];
//$name = "Sean";
$email = $_POST['email'];
//$email = "technogeek6952@gmail";
$from = $name." <".$email.">";

//$headers = "From: ".$from."\r\n";

sendMessage($email, $name, $sub, $message);
?>