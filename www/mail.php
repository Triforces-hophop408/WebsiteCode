<?PHP
$dir = "../secure/";
$wkdir = getcwd();
include($dir."functions.php");

$to = "PRHSrobotics <contact@prrobotics.com>";
$sub = $_POST['sub'];
$message = str_replace("\n.", "\n..", $_POST['comment']);

$name = $_POST['name'];
$email = $_POST['email'];
$from = $name." <".$email.">";

$headers = "From: ".$from."\r\n";

mail($to, $sub, $message, $headers);
?>