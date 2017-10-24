<?php  session_start();
if(isset($_SESSION['usernameenum']))
{
	unset($_SESSION['usernamefinance']);
	session_destroy();
	header('Location:login.php?status=logout');
}else{
	session_destroy();
	header('Location:login.php?status=Please Login!');
}
?>