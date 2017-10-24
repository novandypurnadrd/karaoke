<?php
	require_once 'Conn.php';
	$conn = dbConnect();
	if (isset($_GET['posisi'])) {
		$nik = $_GET['posisi'];
		$data="";
		$sql = "SELECT Position FROM db_karyawan WHERE NIK='$nik'";
		$stmt = $conn->prepare($sql);
		$results = $stmt->execute(array($data));
		$rows = $stmt->fetchAll();
		$error = $stmt->errorInfo();
	}
	if(empty($rows)) echo "";
	else {
		foreach ($rows as $row) {
			echo $row['Position'];
		}
	}
?>