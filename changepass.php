<link href="css/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="js/function.js"></script>
	<title>Change Password</title>
<?php include "css/menu2.php"; ?>
<CENTER>
<?php
session_start();
	$username=$_SESSION['usernamefinance'];
	$passwd1=$_SESSION['passfinance'];
if (isset($_POST['submit']))
{
include ("conn.php");
	$oldpassword=trim($_POST['oldpassword']);
	$oldpass=md5($oldpassword);
	$newpassword=trim($_POST['newpassword']);
	$newpassmd5=md5($newpassword);
	if ($oldpass==$passwd1&&$newpassword!="") 
	{
		$hasil=mysql_query("update tb_user set password='$newpassmd5' where username='$username'",$koneksi);
		if ($hasil) echo "Password berhasil dirubah";
		else echo "Gagal";
	}
	else
	 echo "Password gagal dirubah";
}
?>
 <div id="contact_form">
        <form action="" id="formku" method="post"  >
        <label for="nama">Nama: </label>
		<input type="text" name="username" id="username" value="<?php echo $username; ?>" class="input_sedengan" readonly="readonly"/><div class="cleaner h10"></div>
		 <label for="nama">Password Lama: </label>
		<input type="text" name="oldpassword" id="oldpassword" value="" class="input_sedengan" /><div class="cleaner h10"></div>
		 <label for="nama">Password Baru: </label>
		<input type="text" name="newpassword" id="newpassword" value="" class="input_sedengan" /><div class="cleaner h10"></div>
		<input type="submit" name="submit" value="Submit" id="submit_btn" /><input type="reset" name="reset" value="Reset" id="submit_btn" />
               
		</form>
</div>
</center>