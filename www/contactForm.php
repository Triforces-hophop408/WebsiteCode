<?PHP

$form = true;

if($form){
?>
<form action='./mail.php' method='post'>
Name: <br><input type='text' name='name'><br>
E-Mail: <br><input type = 'text' name='email'><br>
Subject: <br><input type='text' name='sub'><br>
Message: <br><textarea name='comment' rows='5' cols='40'></textarea><br>
<input type='submit' name='submit' value='Send'>
</form>
<?PHP
}
?>