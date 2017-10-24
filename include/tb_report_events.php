<?php 
class eventclass_tb_report  extends eventsBase
{ 
	function eventclass_tb_report()
	{
	// fill list of events
		$this->events["BeforeQueryList"]=true;

		$this->events["BeforeMoveNextList"]=true;


//	onscreen events


	}
// Captchas functions	

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: Before SQL query
function BeforeQueryList(&$strSQL,&$strWhereClause,&$strOrderBy,&$pageObject)
{

		$_SESSION["rec_count"]=1;
$rs = CustomQuery("select count(*) as c from tb_report");
$data = db_fetch_array($rs); 
$count = $data["c"];
$_SESSION["jmldata"]=$count;
$a=$_SESSION["tb_report_orderby"];
if ($a=="") $strOrderBy="ORDER BY nip";
// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeQueryList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: After record processed
function BeforeMoveNextList(&$data,&$row,&$record,&$pageObject)
{

		if ($_SESSION["rec_count"]==($_SESSION["jmldata"]))
{
$row["singngisor"]=true;
$rs = CustomQuery("select sum(ta) as ta1,sum(medical) as med1,sum(tugas) as tugas1,sum(meal) as meal1,sum(sumbangan) as sumbang1,sum(total) as total1 from  tb_report");
$data = db_fetch_array($rs); 
$row["tatotal"]=number_format($data['ta1'],0,',','.');
$row["medtotal"]=number_format($data['med1'],0,',','.');
$row["tugastotal"]=number_format($data['tugas1'],0,',','.');
$row["mealtotal"]=number_format($data['meal1'],0,',','.');
$row["sumbangantotal"]=number_format($data['sumbang1'],0,',','.');
$row["totaltotal"]=number_format($data['total1'],0,',','.');
}
$_SESSION["rec_count"]++;

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeMoveNextList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

} 
?>
