<?PHP
$dir = "../secure/";
$wkdir = getcwd();
include($dir."functions.php");

require($dir."session.class.php");
$session = new session();
// Set to true if using https
$session->start_session('_s', false);

if(isset($_SESSION['name'])){
	echo "Welcome! " . $_SESSION['name'];
	?>
<br>html code to display if user is logged in.
	<?PHP
} else {
	echo "Welcome! Guest";
	?>
<br><a href="login.php" class="normal">Login</a> or
<br><a href="create.php" class="normal">Create account</a>
	<?PHP
}

?>