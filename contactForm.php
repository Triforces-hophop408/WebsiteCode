<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?PHP

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Contact</title>
<link href="styles.css" rel="stylesheet" type="text/css">
</head>
//Contact form to require with PHP *require function*
<body>
<form action='./mail.php' method='post'>
Name: <br><input type='text' name='name'><br>
E-Mail: <br><input type = 'text' name='email'><br>
Subject: <br><input type='text' name='sub'><br>
Message: <br><textarea name="comment" rows="5" cols="40"></textarea><br>
<input type='submit' name='submit' value='Send'>
</form>
</body>
</html>
