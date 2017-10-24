<?php
	require_once 'Conn.php';
	$conn = dbConnect();
	if (isset($_GET['jeneng'])) {
		$nik = $_GET['jeneng'];
		$data="";
		$sql = "SELECT Section FROM db_karyawan WHERE NIK='$nik'";
		$stmt = $conn->prepare($sql);
		$results = $stmt->execute(array($data));
		$rows = $stmt->fetchAll();
		$error = $stmt->errorInfo();
	}
	if(empty($rows)) echo "";
	else {
		foreach ($rows as $row) {
			echo $row['Section'];
		}
	}
?>