<?php
$mysql_db_hostname = "localhost";
$mysql_db_user = "kasongan";
$mysql_db_password = "k3nsh1n";
$mysql_db_database = "hr-data";
$con = @mysqli_connect($mysql_db_hostname, $mysql_db_user, $mysql_db_password,
 $mysql_db_database);

if (!$con) {
 trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());
}
$nik=$_GET['nik'];
$var = array();
$var[]="";
$sql = "SELECT Nama_Karyawan,Department,Section,Position,POH FROM db_karyawan where nik='$nik'
UNION SELECT Nama_Karyawan,Department,Section,Position,POH FROM db_mutasi_resign where nik='$nik' limit 0,1";
$result = mysqli_query($con, $sql);
while($obj = mysqli_fetch_object($result)) {
$var[]= $obj;
}
echo '{"users":'.json_encode($var).'}';
?>
