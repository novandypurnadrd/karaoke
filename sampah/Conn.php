<?php
function dbConnect (){
 	$conn =	null;
 	$host = 'localhost';
 	$db = 	'hr-data';
 	$user = 'kasongan';
 	$pwd = 	'k3nsh1n';
	try {
	   	$conn = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pwd);
		//echo 'Connected succesfully.<br>';
	}
	catch (PDOException $e) {
		echo '<p>Cannot connect to database !!</p>';
		echo '<p>'.$e.'</p>';
	    exit;
	}
	return $conn;
 }

 ?>