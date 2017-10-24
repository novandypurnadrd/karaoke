<?php 
ini_set('display_errors',FALSE);
$host="localhost";
$user="kasongan";
$pass="k3nsh1n";
$db="db_finance";
$koneksi=mysql_connect($host,$user,$pass);
mysql_select_db($db,$koneksi);
if ($koneksi)
{
	//echo "berhasil : )";
}else{
	?><script language="javascript">alert("Gagal Koneksi Database MySql !!")</script><?php 
}

?>
