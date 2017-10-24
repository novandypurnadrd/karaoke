<?php 
class eventclass_tb_pihakketiga  extends eventsBase
{ 
	function eventclass_tb_pihakketiga()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;

		$this->events["BeforeAdd"]=true;

		$this->events["AfterEdit"]=true;

		$this->events["BeforeEdit"]=true;

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
$nminstansi=$values['namainstansi'];
$jml=$values['amount'];
$taon=substr($values['tglbayar'], 0, 4);
$jenisbayar=$values['jeniskeluar'];
$wheredmn="namainstansi='$nminstansi' AND jenisbayar='$jenisbayar'";
$strSQLExists = "select jumlahe from tb_reportpihak3 where $wheredmn";
$rsExists = db_query($strSQLExists,$conn);
$data=db_fetch_array($rsExists);
if($data)
{
	$jumlahe=$data['jumlahe']+$jml;
	$strmeal = "update tb_reportpihak3 set jumlahe='$jumlahe' where $wheredmn";
	db_exec($strmeal,$conn);
}
else
{
$strSQLInsert = "insert into tb_reportpihak3 (namainstansi, jenisbayar,jumlahe,tahun) values ('$nminstansi','$jenisbayar','$jml','$taon')";
db_exec($strSQLInsert,$conn);
}

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values,&$message,$inline,&$pageObject)
{

		$values['namainstansi']=strtoupper($values['namainstansi']);
// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values,$where,&$oldvalues,&$keys,$inline,&$pageObject)
{

		global $conn;
$nminstansi=$values['namainstansi'];
$jml=$values['amount'];
$taon=date("Y",$values['tglbayar']);
$jenisbayar=$values['jeniskeluar'];
$wheredmn="namainstansi='$nminstansi' AND jenisbayar='$jenisbayar'";
$strSQLExists = "select jumlahe from tb_reportpihak3 where $wheredmn";
$rsExists = db_query($strSQLExists,$conn);
$data=db_fetch_array($rsExists);
if($data)
{
	$jumlahe=$data["jumlahe"]+$jml-$oldvalues['amount'];
	$strmeal = "update tb_reportpihak3 set jumlahe='$jumlahe' where $wheredmn";
	db_exec($strmeal,$conn);
}
// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values,$where,&$oldvalues,&$keys,&$message,$inline,&$pageObject)
{

		$values['namainstansi']=strtoupper($values['namainstansi']);

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record deleted
function AfterDelete($where,&$deleted_values,&$message,&$pageObject)
{

		global $conn;
$nminstansi=$deleted_values['namainstansi'];
$jenisbayar=$deleted_values['jeniskeluar'];
$jml=$deleted_values['amount'];
$wheredmn="namainstansi='$nminstansi' AND jenisbayar='$jenisbayar'";
$strSQLExists = "select jumlahe from tb_reportpihak3 where $wheredmn";
$rsExists = db_query($strSQLExists,$conn);
$data=db_fetch_array($rsExists);
if($data)
{
	$jumlahe=$data['jumlahe']-$jml;
	if ($jumlahe>0) $strmeal = "update tb_reportpihak3 set jumlahe='$jumlahe' where $wheredmn";
	else $strmeal = "delete from tb_reportpihak3 where $wheredmn";
	db_exec($strmeal,$conn);
}

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterDelete

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before Insert Record
function BeforeInsert(&$rawvalues,&$values,&$pageObject)
{

		global $conn;
$nminstansi=$rawvalues['namainstansi'];
$jml=$rawvalues['amount'];
$taon=substr($rawvalues['tglbayar'], 0, 4);
$jenisbayar=$rawvalues['jeniskeluar'];
$wheredmn="namainstansi='$nminstansi' AND jenisbayar='$jenisbayar'";
$strSQLExists = "select jumlahe from tb_reportpihak3 where $wheredmn";
$rsExists = db_query($strSQLExists,$conn);
$data=db_fetch_array($rsExists);
if($data)
{
	$jumlahe=$data['jumlahe']+$jml;
	$strmeal = "update tb_reportpihak3 set jumlahe='$jumlahe' where $wheredmn";
	db_exec($strmeal,$conn);
}
else
{
$strSQLInsert = "insert into tb_reportpihak3 (namainstansi, jenisbayar,jumlahe,tahun) values ('$nminstansi','$jenisbayar','$jml','$taon')";
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
