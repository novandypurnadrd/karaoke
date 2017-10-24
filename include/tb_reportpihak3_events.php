<?php 
class eventclass_tb_reportpihak3  extends eventsBase
{ 
	function eventclass_tb_reportpihak3()
	{
	// fill list of events
		$this->events["BeforeQueryList"]=true;

		$this->events["BeforeMoveNextList"]=true;


//	onscreen events
		$this->events["tb_reportpihak3_snippet1"] = true;


	}
// Captchas functions	

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: Before SQL query
function BeforeQueryList(&$strSQL,&$strWhereClause,&$strOrderBy,&$pageObject)
{

		if (isset($_GET['taon'])) {
$strWhereClause="tahun='".$_GET['taon']."'";
}
else {
	$strWhereClause="tahun='".date("Y")."'";
}
$_SESSION["counterpihak3"]=1;
$_SESSION['wherepihak3']=$strWhereClause;
$rs = CustomQuery("select count(*) as c from tb_reportpihak3 where $strWhereClause");
$data = db_fetch_array($rs); 
$count = $data["c"];
$_SESSION["jmldatapihak3"]=$count;
$a=$_SESSION["tb_reportpihak3_orderby"];
if ($a=="") $strOrderBy="ORDER BY namainstansi";
// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeQueryList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: After record processed
function BeforeMoveNextList(&$data,&$row,&$record,&$pageObject)
{

		if ($_SESSION["counterpihak3"]==$_SESSION["jmldatapihak3"])
{
$row["singngisor"]=true;
$strwhere=$_SESSION['wherepihak3'];
$rs = CustomQuery("select sum(jumlahe) as jml from tb_reportpihak3 where $strwhere");
$data = db_fetch_array($rs); 
$row["jumlahtotal"]=number_format($data['jml'],0,',','.');
}
$_SESSION["counterpihak3"]++;

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeMoveNextList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events
function tb_reportpihak3_snippet1(&$params)
{
//create dropdown box
$str = "";
$str.= "<select onchange=\"window.location.href=this.options[this.".
  "selectedIndex].value;\"><option value=\"\">Please select</option>";
//select values from database
global $conn;
$strSQL = "select distinct(tahun) from tb_reportpihak3";
$rs = db_query($strSQL,$conn);
while ($data = db_fetch_array($rs))
  $str.="<option value=\"tb_reportpihak3_list.php?taon=".$data["tahun"]."\">".
    $data["tahun"]."</option>";
$str.="</select>";

echo $str;


;
}

} 
?>
