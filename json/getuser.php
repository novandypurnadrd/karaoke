<?php
//$q = intval($_GET['q']);
$q = $_GET['q'];
$r=$_GET['r'];
$con = mysqli_connect('localhost','kasongan','k3nsh1n','hr-data');
if (!$con)
  {
  die('Could not connect: ' . mysqli_error($con));
  }

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM db_fam_karyawan WHERE NIK = '".$q."'";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result))
  {
  if ($r=="K01") echo $row['Nama_Karyawan'];
  elseif ($r=="K02") echo $row['wife'];
  elseif ($r=="K03") echo $row['child1'];
  elseif ($r=="K04") echo $row['child2'];
  elseif ($r=="K05") echo $row['child3'];
  }

mysqli_close($con);
?> 