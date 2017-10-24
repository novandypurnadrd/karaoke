<?php
$q = trim($_GET['q']);
$con = mysqli_connect('localhost','kasongan','k3nsh1n','db_finance');
if (!$con)
  {
  die('Could not connect: ' . mysqli_error($con));
  }

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM tb_nilaita WHERE tujuan = '".$q."'";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result))
  {
	echo $row['nilaita'];
  }

mysqli_close($con);
?> 