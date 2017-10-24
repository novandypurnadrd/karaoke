<?PHP
 include "login_part.php";
if(isset($_SESSION['usernamefinance'])) {
	echo "abcdefg";
}
 else
 {
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Payable Application</title>
<link rel="shortcut icon" href="favicon1.ico" type="image/x-icon">
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
<script src="js/jquery-1.10.2.js" type="text/javascript"></script>
</head>
<body id="login-bg" onLoad="document.postform.elements['username'].focus();"> 
<div id="login-holder">
	<div id="logo-login"><img src="images/logokbknew.jpg" width="376" height="71" /></div>
  <div class="clear"></div>
	<div id="loginbox">
	<p align="center"><font face="Segoe Script" size="5" color="#F9F9F9"><b>Payable Application</b></font></p><br /><br />
	<div id="login-inner">
    	<p align="center"><b><font face="verdana" size="2" color="#FFFFFF"></font></p>
        <p>&nbsp;</p>
        <form action="#" method="post" name="postform">
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<th><font face="verdana" size="2" color="#FFFFFF"><b>Username</b></font></th>
			<td><input type="text"  class="login-inp" name="username"/></td>
		</tr>
		<tr>
			<th><font face="verdana" size="2" color="#FFFFFF"><b>Password</b></font></th>
			<td><input type="password" value=""  name="password" onFocus="this.value=''" class="login-inp" /></td>
		</tr>
        <tr>
			<th></th>
			<td><input type="submit" class="submit-login" name="login"/></td>
		</tr>
		</table>
        </form>
	</div>
	<div class="clear"></div>
 </div>
</div>
</body>
</html>
<?php } ?>