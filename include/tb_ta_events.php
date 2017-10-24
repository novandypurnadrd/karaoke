<?php 
class eventclass_tb_ta  extends eventsBase
{ 
	function eventclass_tb_ta()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;

		$this->events["AfterEdit"]=true;

		$this->events["AfterDelete"]=true;

		$this->events["BeforeAdd"]=true;

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
$dept=$values['dept'];
$taon=substr($values['tglpay'], 0, 4);
$strSQLExists = "select nip from tb_report where nip='$nik'";
$rsExists = db_query($strSQLExists,$conn);
$data=db_fetch_array($rsExists);
if($data)
{
 	$strsum="select ta,total from tb_report where nip='$nik'";
	$rsjml = db_query($strsum,$conn);
	$data=db_fetch_array($rsjml);
	$jumlahe=$data['ta']+$jml;
	$totale=$data['total']+$jml;
	$strmeal = "update tb_report set ta='$jumlahe',total='$totale' where nip='$nik'";
	db_exec($strmeal,$conn);
}
else
{
$strSQLInsert = "insert into tb_report (nip,nama,dept,ta,total,tahun) values ('$nik','$jeneng','$dept','$jml','$jml','$taon')";
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
 	$strsum="select ta,(ta+medical+tugas+meal+sumbangan)as totale from tb_report where nip='$nik'";
	$rsjml = db_query($strsum,$conn);
	$data=db_fetch_array($rsjml);
	$jumlahe=$data["ta"]+$jml-$oldvalues['amount'];
	$strmeal = "update tb_report set ta='$jumlahe',total='$totale' where nip='$nik'";
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
 	$strsum="select ta,total from tb_report where nip='$nik'";
	$rsjml = db_query($strsum,$conn);
	$data=db_fetch_array($rsjml);
	$jumlahe=$data['ta']-$jml;
	$totale=$data['total']-$jml;
	if ($totale>0) $strmeal = "update tb_report set ta='$jumlahe',total='$totale' where nip='$nik'";
  else  $strmeal = "delete from tb_report where nip='$nik'";
	db_exec($strmeal,$conn);
// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterDelete

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values,&$message,$inline,&$pageObject)
{

		$values['amount']=trim($values['amount']);

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before Insert Record
function BeforeInsert(&$rawvalues,&$values,&$pageObject)
{

		global $conn;
$nik=$rawvalues['nip'];
$jml=trim($rawvalues['amount']);
$jeneng=$rawvalues['nama'];
$dept=$rawvalues['dept'];
$taon=substr($rawvalues['tglpay'], 0, 4);
$strSQLExists = "select nip from tb_report where nip='$nik'";
$rsExists = db_query($strSQLExists,$conn);
$data=db_fetch_array($rsExists);
if($data)
{
 	$strsum="select ta,total from tb_report where nip='$nik'";
	$rsjml = db_query($strsum,$conn);
	$data=db_fetch_array($rsjml);
	$jumlahe=$data['ta']+$jml;
	$totale=$data['total']+$jml;
	$strmeal = "update tb_report set ta='$jumlahe',total='$totale' where nip='$nik'";
	db_exec($strmeal,$conn);
}
else
{
$strSQLInsert = "insert into tb_report (nip,nama,dept,ta,total,tahun) values ('$nik','$jeneng','$dept','$jml','$jml','$taon')";
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
