<?php 
class eventclass_tb_meal  extends eventsBase
{ 
	function eventclass_tb_meal()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;

		$this->events["AfterEdit"]=true;

		$this->events["AfterDelete"]=true;

		$this->events["BeforeInsert"]=true;


//	onscreen events


	}
// Captchas functions	

//	handlers

		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values,&$keys,$inline,&$pageObject)
{

		global $conn;
$nik=$values['nip'];
$jml=$values['amount'];
$jeneng=$values['nama'];
$taon=substr($values['tglpay'], 0, 4);
$bln=substr($values['tglpay'],5,2);
$dept=$values['dept'];
$strSQLExists = "select nip from tb_report where nip='$nik'";
$rsExists = db_query($strSQLExists,$conn);
$data=db_fetch_array($rsExists);
if($data)
{
 	$strsum="select meal,total from tb_report where nip='$nik'";
	$rsjml = db_query($strsum,$conn);
	$data=db_fetch_array($rsjml);
	$jumlahe=$data['meal']+$jml;
	$totale=$data['total']+$jml;
	$strmeal = "update tb_report set meal='$jumlahe',total='$totale' where nip='$nik'";
	db_exec($strmeal,$conn);
}
else
{
$strSQLInsert = "insert into tb_report (nip,nama,dept,meal,total,tahun) values ('$nik','$jeneng','$dept','$jml','$jml','$taon')";
db_exec($strSQLInsert,$conn);
}

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values,$where,&$oldvalues,&$keys,$inline,&$pageObject)
{

		global $conn;
$nik=$values['nip'];
$jml=$values['amount'];
$jeneng=$values['nama'];
$dept=$values['dept'];
$strSQLExists = "select nip from tb_report where nip='$nik'";
$rsExists = db_query($strSQLExists,$conn);
$data=db_fetch_array($rsExists);
if($data)
{
 	$strsum="select meal,total from tb_report where nip='$nik'";
	$rsjml = db_query($strsum,$conn);
	$data=db_fetch_array($rsjml);
	$jumlahe=$data["meal"]+$jml-$oldvalues['amount'];
	$totale=$data["total"]+$jml-$oldvalues['amount'];
	$strmeal = "update tb_report set meal='$jumlahe',total='$totale' where nip='$nik'";
	db_exec($strmeal,$conn);
}

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record deleted
function AfterDelete($where,&$deleted_values,&$message,&$pageObject)
{

		global $conn;
$nik=$deleted_values['nip'];
$jml=$deleted_values['amount'];
 	$strsum="select meal,total from tb_report where nip='$nik'";
	$rsjml = db_query($strsum,$conn);
	$data=db_fetch_array($rsjml);
	$jumlahe=$data['meal']-$jml;
	$totale=$data['total']-$jml;
	if ($totale>0)	$strmeal = "update tb_report set meal='$jumlahe',total='$totale' where nip='$nik'";
	else  $strmeal ="delete from tb_report where nip='$nik'";
	db_exec($strmeal,$conn);
// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterDelete

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before Insert Record
function BeforeInsert(&$rawvalues,&$values,&$pageObject)
{

		global $conn;
$nik=$values['nip'];
$jml=$rawvalues['amount'];
$jeneng=$rawvalues['nama'];
$taon=substr($rawvalues['tglpay'], 0, 4);
$bln=substr($rawvalues['tglpay'],5,2);
$dept=$rawvalues['dept'];
$strSQLExists = "select nip from tb_report where nip='$nik'";
$rsExists = db_query($strSQLExists,$conn);
$data=db_fetch_array($rsExists);
if($data)
{
 	$strsum="select meal,total from tb_report where nip='$nik'";
	$rsjml = db_query($strsum,$conn);
	$data=db_fetch_array($rsjml);
	$jumlahe=$data['meal']+$jml;
	$totale=$data['total']+$jml;
	$strmeal = "update tb_report set meal='$jumlahe',total='$totale' where nip='$nik'";
	db_exec($strmeal,$conn);
}
else
{
$strSQLInsert = "insert into tb_report (nip,nama,dept,meal,total,taon) values ('$nik','$jeneng','$dept','$jml','$jml','$taon')";
db_exec($strSQLInsert,$conn);
}
// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeInsert

		
		
		
		
		
//	onscreen events

} 
?>
