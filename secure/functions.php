<?PHP if(isset($dir)&&chdir($dir)){

if(isset($wkdir)){chdir($wkdir);}}else if(!isset($dir)){die("Variable $dir must be set prior to including this code");}?>
<?PHP
function sendMessage($from, $name, $sub, $message){
	require '../PHPMailer/PHPMailerAutoLoad.php';
	
	$mail = new PHPMailer;
	
	$mail->isSMTP();
	$mail->SMTPDebug = 1;
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'technogeek6952@gmail.com';
	$mail->Password = 'vjjohvarxmwwxdbr';
	$mail->SMTPSecure = 'ssl';
	$mail->Port = 465;
	
	$mail->From = $from;
	$mail->FromName = $name;
	$mail->addAddress('technogeek6952@gmail.com', 'PRHS Robotics');
	
	$mail->WordWrap = 50;
	$mail->isHTML(true);
	
	$mail->Subject = $sub;
	$mail->Body = $message;
	$mail->AltBody = $message;
	
	if($mail->send()){
		return true;
	}else{
		return false;
		echo 'Error sending message.';
		echo $mail->ErrorInfo;
	}
}
?>