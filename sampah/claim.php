<?php
	require_once 'Conn.php';
	$conn = dbConnect();
	if (isset($_GET['claim'])) {
		$nik = $_GET['claim'];
		$data="";
		$sql = "SELECT Nama_Karyawan FROM db_karyawan WHERE NIK='$nik'";
		$stmt = $conn->prepare($sql);
		$results = $stmt->execute(array($data));
		$rows = $stmt->fetchAll();
		$error = $stmt->errorInfo();
	}
	if(empty($rows)) echo "";
	else {
		foreach ($rows as $row) {
			echo $row['Nama_Karyawan'];
		}
	}
?>