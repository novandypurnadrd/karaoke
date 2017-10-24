<?php  
session_start();
error_reporting(E_ALL);
if (isset($_POST['login']))
{
include ("conn.php");
$user_name=trim($_POST['username']);
$password=md5($_POST['password']);
$login=mysql_query("select id,password from tb_user where username='$user_name' and password='$password'",$koneksi);
	$cek_login=mysql_num_rows($login);
	if (empty($cek_login))
		{
		?><script language="javascript">
			alert("Maaf, Password Anda salah!!");
			document.location="login.php";
		</script><?php  
		}
		else
		{
				$_SESSION['usernamefinance']=$user_name;
				$_SESSION['passfinance']=$password;
		header("Location: tb_report_list.php?pagesize=-1");
		}
}
else{
	unset($_POST['login']);
}
?>