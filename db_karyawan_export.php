<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");
include("include/dbcommon.php");
include("classes/searchclause.php");
session_cache_limiter("none");

include("include/db_karyawan_variables.php");

CheckPermissionsEvent($strTableName, 'P');

$layout = new TLayout("export","BoldWhite_label","MobileWhite_label");
$layout->blocks["top"] = array();
$layout->containers["export"] = array();

$layout->containers["export"][] = array("name"=>"exportheader","block"=>"","substyle"=>2);


$layout->containers["export"][] = array("name"=>"exprange_header","block"=>"rangeheader_block","substyle"=>3);


$layout->containers["export"][] = array("name"=>"exprange","block"=>"range_block","substyle"=>1);


$layout->containers["export"][] = array("name"=>"expoutput_header","block"=>"","substyle"=>3);


$layout->containers["export"][] = array("name"=>"expoutput","block"=>"","substyle"=>1);


$layout->containers["export"][] = array("name"=>"expbuttons","block"=>"","substyle"=>2);


$layout->skins["export"] = "fields";
$layout->blocks["top"][] = "export";$page_layouts["db_karyawan_export"] = $layout;


// Modify query: remove blob fields from fieldlist.
// Blob fields on an export page are shown using imager.php (for example).
// They don't need to be selected from DB in export.php itself.
//$gQuery->ReplaceFieldsWithDummies(GetBinaryFieldsIndices());

$cipherer = new RunnerCipherer($strTableName);

$strWhereClause = "";
$strHavingClause = "";
$strSearchCriteria = "and";
$selected_recs = array();
$options = "1";

header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 
include('include/xtempl.php');
include('classes/runnerpage.php');
$xt = new Xtempl();
$id = postvalue("id") != "" ? postvalue("id") : 1;

$phpVersion = (int)substr(phpversion(), 0, 1); 
if($phpVersion > 4)
{
	include("include/export_functions.php");
	$xt->assign("groupExcel", true);
}
else
	$xt->assign("excel", true);

//array of params for classes
$params = array("pageType" => PAGE_EXPORT, "id" => $id, "tName" => $strTableName);
$params["xt"] = &$xt;
if(!$eventObj->exists("ListGetRowCount") && !$eventObj->exists("ListQuery"))
	$params["needSearchClauseObj"] = false;
$pageObject = new RunnerPage($params);

//	Before Process event
if($eventObj->exists("BeforeProcessExport"))
	$eventObj->BeforeProcessExport($conn, $pageObject);

if (@$_REQUEST["a"]!="")
{
	$options = "";
	$sWhere = "1=0";	

//	process selection
	$selected_recs = array();
	if (@$_REQUEST["mdelete"])
	{
		foreach(@$_REQUEST["mdelete"] as $ind)
		{
			$keys=array();
			$keys["Id"] = refine($_REQUEST["mdelete1"][mdeleteIndex($ind)]);
			$selected_recs[] = $keys;
		}
	}
	elseif(@$_REQUEST["selection"])
	{
		foreach(@$_REQUEST["selection"] as $keyblock)
		{
			$arr=explode("&",refine($keyblock));
			if(count($arr)<1)
				continue;
			$keys = array();
			$keys["Id"] = urldecode($arr[0]);
			$selected_recs[] = $keys;
		}
	}

	foreach($selected_recs as $keys)
	{
		$sWhere = $sWhere . " or ";
		$sWhere.=KeyWhere($keys);
	}


	$strSQL = $gQuery->gSQLWhere($sWhere);
	$strWhereClause=$sWhere;
	
	$_SESSION[$strTableName."_SelectedSQL"] = $strSQL;
	$_SESSION[$strTableName."_SelectedWhere"] = $sWhere;
	$_SESSION[$strTableName."_SelectedRecords"] = $selected_recs;
}

if ($_SESSION[$strTableName."_SelectedSQL"]!="" && @$_REQUEST["records"]=="") 
{
	$strSQL = $_SESSION[$strTableName."_SelectedSQL"];
	$strWhereClause = @$_SESSION[$strTableName."_SelectedWhere"];
	$selected_recs = $_SESSION[$strTableName."_SelectedRecords"];
}
else
{
	$strWhereClause = @$_SESSION[$strTableName."_where"];
	$strHavingClause = @$_SESSION[$strTableName."_having"];
	$strSearchCriteria = @$_SESSION[$strTableName."_criteria"];
	$strSQL = $gQuery->gSQLWhere($strWhereClause, $strHavingClause, $strSearchCriteria);
}

$mypage = 1;
if(@$_REQUEST["type"])
{
//	order by
	$strOrderBy = $_SESSION[$strTableName."_order"];
	if(!$strOrderBy)
		$strOrderBy = $gstrOrderBy;
	$strSQL.=" ".trim($strOrderBy);

	$strSQLbak = $strSQL;
	if($eventObj->exists("BeforeQueryExport"))
		$eventObj->BeforeQueryExport($strSQL,$strWhereClause,$strOrderBy, $pageObject);
//	Rebuild SQL if needed
	if($strSQL!=$strSQLbak)
	{
//	changed $strSQL - old style	
		$numrows=GetRowCount($strSQL);
	}
	else
	{
		$strSQL = $gQuery->gSQLWhere($strWhereClause, $strHavingClause, $strSearchCriteria);
		$strSQL.=" ".trim($strOrderBy);
		$rowcount=false;
		if($eventObj->exists("ListGetRowCount"))
		{
			$masterKeysReq=array();
			for($i = 0; $i < count($pageObject->detailKeysByM); $i ++)
				$masterKeysReq[] = $_SESSION[$strTableName."_masterkey".($i + 1)];
			$rowcount = $eventObj->ListGetRowCount($pageObject->searchClauseObj,$_SESSION[$strTableName."_mastertable"],$masterKeysReq,$selected_recs, $pageObject);
		}
		if($rowcount !== false)
			$numrows = $rowcount;
		else
			$numrows = $gQuery->gSQLRowCount($strWhereClause,$strHavingClause,$strSearchCriteria);
	}
	LogInfo($strSQL);

//	 Pagination:

	$nPageSize = 0;
	if(@$_REQUEST["records"]=="page" && $numrows)
	{
		$mypage = (integer)@$_SESSION[$strTableName."_pagenumber"];
		$nPageSize = (integer)@$_SESSION[$strTableName."_pagesize"];
		
		if(!$nPageSize)
			$nPageSize = $gSettings->getInitialPageSize();
				
		if($nPageSize<0)
			$nPageSize = 0;
			
		if($nPageSize>0)
		{
			if($numrows<=($mypage-1)*$nPageSize)
				$mypage = ceil($numrows/$nPageSize);
		
			if(!$mypage)
				$mypage = 1;
			
					$strSQL.=" limit ".(($mypage-1)*$nPageSize).",".$nPageSize;
		}
	}
	$listarray = false;
	if($eventObj->exists("ListQuery"))
	{
		$arrFieldForSort = array();
		$arrHowFieldSort = array();
		require_once getabspath('classes/orderclause.php');
		$fieldList = unserialize($_SESSION[$strTableName."_orderFieldsList"]);
		for($i = 0; $i < count($fieldList); $i++)
		{
			$arrFieldForSort[] = $fieldList[$i]->fieldIndex; 
			$arrHowFieldSort[] = $fieldList[$i]->orderDirection; 
		}
		$listarray = $eventObj->ListQuery($pageObject->searchClauseObj, $arrFieldForSort, $arrHowFieldSort,
			$_SESSION[$strTableName."_mastertable"], $masterKeysReq, $selected_recs, $nPageSize, $mypage, $pageObject);
	}
	if($listarray!==false)
		$rs = $listarray;
	elseif($nPageSize>0)
	{
					$rs = db_query($strSQL,$conn);
	}
	else
		$rs = db_query($strSQL,$conn);

	if(!ini_get("safe_mode"))
		set_time_limit(300);
	
	if(substr(@$_REQUEST["type"],0,5)=="excel")
	{
//	remove grouping
		$locale_info["LOCALE_SGROUPING"]="0";
		$locale_info["LOCALE_SMONGROUPING"]="0";
				if($phpVersion > 4)
			ExportToExcel($cipherer, $pageObject);
		else
			ExportToExcel_old($cipherer);
	}
	else if(@$_REQUEST["type"]=="word")
	{
		ExportToWord($cipherer);
	}
	else if(@$_REQUEST["type"]=="xml")
	{
		ExportToXML($cipherer);
	}
	else if(@$_REQUEST["type"]=="csv")
	{
		$locale_info["LOCALE_SGROUPING"]="0";
		$locale_info["LOCALE_SDECIMAL"]=".";
		$locale_info["LOCALE_SMONGROUPING"]="0";
		$locale_info["LOCALE_SMONDECIMALSEP"]=".";
		ExportToCSV($cipherer);
	}
	db_close($conn);
	return;
}

// add button events if exist
$pageObject->addButtonHandlers();

if($options)
{
	$xt->assign("rangeheader_block",true);
	$xt->assign("range_block",true);
}

$xt->assign("exportlink_attrs", 'id="saveButton'.$pageObject->id.'"');

$pageObject->body["begin"] .="<script type=\"text/javascript\" src=\"include/loadfirst.js\"></script>\r\n";
$pageObject->body["begin"] .= "<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";

$pageObject->fillSetCntrlMaps();
$pageObject->body['end'] .= '<script>';
$pageObject->body['end'] .= "window.controlsMap = ".my_json_encode($pageObject->controlsHTMLMap).";";
$pageObject->body['end'] .= "window.viewControlsMap = ".my_json_encode($pageObject->viewControlsHTMLMap).";";
$pageObject->body['end'] .= "window.settings = ".my_json_encode($pageObject->jsSettings).";";
$pageObject->body['end'] .= '</script>';
$pageObject->body["end"] .= "<script language=\"JavaScript\" src=\"include/runnerJS/RunnerAll.js\"></script>\r\n";
$pageObject->addCommonJs();

$pageObject->body["end"] .= "<script>".$pageObject->PrepareJS()."</script>";
$xt->assignbyref("body",$pageObject->body);

$xt->display("db_karyawan_export.htm");

function ExportToExcel_old($cipherer)
{
	global $cCharset;
	header("Content-Type: application/vnd.ms-excel");
	header("Content-Disposition: attachment;Filename=db_karyawan.xls");

	echo "<html>";
	echo "<html xmlns:o=\"urn:schemas-microsoft-com:office:office\" xmlns:x=\"urn:schemas-microsoft-com:office:excel\" xmlns=\"http://www.w3.org/TR/REC-html40\">";
	
	echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=".$cCharset."\">";
	echo "<body>";
	echo "<table border=1>";

	WriteTableData($cipherer);

	echo "</table>";
	echo "</body>";
	echo "</html>";
}

function ExportToWord($cipherer)
{
	global $cCharset;
	header("Content-Type: application/vnd.ms-word");
	header("Content-Disposition: attachment;Filename=db_karyawan.doc");

	echo "<html>";
	echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=".$cCharset."\">";
	echo "<body>";
	echo "<table border=1>";

	WriteTableData($cipherer);

	echo "</table>";
	echo "</body>";
	echo "</html>";
}

function ExportToXML($cipherer)
{
	global $nPageSize,$rs,$strTableName,$conn,$eventObj, $pageObject;
	header("Content-Type: text/xml");
	header("Content-Disposition: attachment;Filename=db_karyawan.xml");
	if($eventObj->exists("ListFetchArray"))
		$row = $eventObj->ListFetchArray($rs, $pageObject);
	else
		$row = $cipherer->DecryptFetchedArray($rs);	
	//if(!$row)
	//	return;
		
	global $cCharset;
	
	echo "<?xml version=\"1.0\" encoding=\"".$cCharset."\" standalone=\"yes\"?>\r\n";
	echo "<table>\r\n";
	$i = 0;
	$pageObject->viewControls->forExport = "xml";
	while((!$nPageSize || $i<$nPageSize) && $row)
	{
		$values = array();
			$values["Id"] = $pageObject->showDBValue("Id", $row);
			$values["NIK"] = $pageObject->showDBValue("NIK", $row);
			$values["Nama_Karyawan"] = $pageObject->showDBValue("Nama_Karyawan", $row);
			$values["Sex"] = $pageObject->showDBValue("Sex", $row);
			$values["POB"] = $pageObject->showDBValue("POB", $row);
			$values["DOB"] = $pageObject->showDBValue("DOB", $row);
			$values["Tax_Status"] = $pageObject->showDBValue("Tax_Status", $row);
			$values["Address_Nama_Jalan"] = $pageObject->showDBValue("Address_Nama_Jalan", $row);
			$values["Address_Nama_Desa"] = $pageObject->showDBValue("Address_Nama_Desa", $row);
			$values["Address_Nama_Kec"] = $pageObject->showDBValue("Address_Nama_Kec", $row);
			$values["Address_Nama_Kab"] = $pageObject->showDBValue("Address_Nama_Kab", $row);
			$values["Address_Nama_Prov"] = $pageObject->showDBValue("Address_Nama_Prov", $row);
			$values["Telp"] = $pageObject->showDBValue("Telp", $row);
			$values["Position"] = $pageObject->showDBValue("Position", $row);
			$values["Classification"] = $pageObject->showDBValue("Classification", $row);
			$values["Section"] = $pageObject->showDBValue("Section", $row);
			$values["Department"] = $pageObject->showDBValue("Department", $row);
		
		$eventRes = true;
		if ($eventObj->exists('BeforeOut'))
			$eventRes = $eventObj->BeforeOut($row, $values, $pageObject);
		
		if ($eventRes)
		{
			$i++;
			echo "<row>\r\n";
			foreach ($values as $fName => $val)
			{
				$field = htmlspecialchars(XMLNameEncode($fName));
				echo "<".$field.">";
				echo $values[$fName];
				echo "</".$field.">\r\n";
			}
			echo "</row>\r\n";
		}
		
		
		if($eventObj->exists("ListFetchArray"))
			$row = $eventObj->ListFetchArray($rs, $pageObject);
		else
			$row = $cipherer->DecryptFetchedArray($rs);
	}
	echo "</table>\r\n";
}

function ExportToCSV($cipherer)
{
	global $rs,$nPageSize,$strTableName,$conn,$eventObj, $pageObject;
	header("Content-Type: application/csv");
	header("Content-Disposition: attachment;Filename=db_karyawan.csv");
	
	if($eventObj->exists("ListFetchArray"))
		$row = $eventObj->ListFetchArray($rs, $pageObject);
	else
		$row = $cipherer->DecryptFetchedArray($rs);

// write header
	$outstr = "";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Id\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"NIK\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Nama_Karyawan\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Sex\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"POB\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"DOB\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Tax_Status\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Address_Nama_Jalan\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Address_Nama_Desa\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Address_Nama_Kec\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Address_Nama_Kab\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Address_Nama_Prov\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Telp\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Position\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Classification\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Section\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Department\"";
	echo $outstr;
	echo "\r\n";

// write data rows
	$iNumberOfRows = 0;
	$pageObject->viewControls->forExport = "csv";
	while((!$nPageSize || $iNumberOfRows < $nPageSize) && $row)
	{
		$values = array();
			$values["Id"] = $pageObject->getViewControl("Id")->showDBValue($row, "");
			$values["NIK"] = $pageObject->getViewControl("NIK")->showDBValue($row, "");
			$values["Nama_Karyawan"] = $pageObject->getViewControl("Nama_Karyawan")->showDBValue($row, "");
			$values["Sex"] = $pageObject->getViewControl("Sex")->showDBValue($row, "");
			$values["POB"] = $pageObject->getViewControl("POB")->showDBValue($row, "");
			$values["DOB"] = $pageObject->getViewControl("DOB")->showDBValue($row, "");
			$values["Tax_Status"] = $pageObject->getViewControl("Tax_Status")->showDBValue($row, "");
			$values["Address_Nama_Jalan"] = $pageObject->getViewControl("Address_Nama_Jalan")->showDBValue($row, "");
			$values["Address_Nama_Desa"] = $pageObject->getViewControl("Address_Nama_Desa")->showDBValue($row, "");
			$values["Address_Nama_Kec"] = $pageObject->getViewControl("Address_Nama_Kec")->showDBValue($row, "");
			$values["Address_Nama_Kab"] = $pageObject->getViewControl("Address_Nama_Kab")->showDBValue($row, "");
			$values["Address_Nama_Prov"] = $pageObject->getViewControl("Address_Nama_Prov")->showDBValue($row, "");
			$values["Telp"] = $pageObject->getViewControl("Telp")->showDBValue($row, "");
			$values["Position"] = $pageObject->getViewControl("Position")->showDBValue($row, "");
			$values["Classification"] = $pageObject->getViewControl("Classification")->showDBValue($row, "");
			$values["Section"] = $pageObject->getViewControl("Section")->showDBValue($row, "");
			$values["Department"] = $pageObject->getViewControl("Department")->showDBValue($row, "");

		$eventRes = true;
		if ($eventObj->exists('BeforeOut'))
		{
			$eventRes = $eventObj->BeforeOut($row,$values, $pageObject);
		}
		if ($eventRes)
		{
			$outstr="";
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Id"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["NIK"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Nama_Karyawan"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Sex"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["POB"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["DOB"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Tax_Status"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Address_Nama_Jalan"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Address_Nama_Desa"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Address_Nama_Kec"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Address_Nama_Kab"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Address_Nama_Prov"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Telp"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Position"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Classification"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Section"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Department"]).'"';
			echo $outstr;
		}
		
		$iNumberOfRows++;
		if($eventObj->exists("ListFetchArray"))
			$row = $eventObj->ListFetchArray($rs, $pageObject);
		else
			$row = $cipherer->DecryptFetchedArray($rs);
			
		if(((!$nPageSize || $iNumberOfRows<$nPageSize) && $row) && $eventRes)
			echo "\r\n";
	}
}

function WriteTableData($cipherer)
{
	global $rs,$nPageSize,$strTableName,$conn,$eventObj, $pageObject;
	
	if($eventObj->exists("ListFetchArray"))
		$row = $eventObj->ListFetchArray($rs, $pageObject);
	else
		$row = $cipherer->DecryptFetchedArray($rs);
//	if(!$row)
//		return;
// write header
	echo "<tr>";
	if($_REQUEST["type"]=="excel")
	{
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Id").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("NIK").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Nama Karyawan").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Sex").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("POB").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("DOB").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Tax Status").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Address Nama Jalan").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Address Nama Desa").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Address Nama Kec").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Address Nama Kab").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Address Nama Prov").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Telp").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Position").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Classification").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Section").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Department").'</td>';	
	}
	else
	{
		echo "<td>"."Id"."</td>";
		echo "<td>"."NIK"."</td>";
		echo "<td>"."Nama Karyawan"."</td>";
		echo "<td>"."Sex"."</td>";
		echo "<td>"."POB"."</td>";
		echo "<td>"."DOB"."</td>";
		echo "<td>"."Tax Status"."</td>";
		echo "<td>"."Address Nama Jalan"."</td>";
		echo "<td>"."Address Nama Desa"."</td>";
		echo "<td>"."Address Nama Kec"."</td>";
		echo "<td>"."Address Nama Kab"."</td>";
		echo "<td>"."Address Nama Prov"."</td>";
		echo "<td>"."Telp"."</td>";
		echo "<td>"."Position"."</td>";
		echo "<td>"."Classification"."</td>";
		echo "<td>"."Section"."</td>";
		echo "<td>"."Department"."</td>";
	}
	echo "</tr>";
	
// write data rows
	$iNumberOfRows = 0;
	$pageObject->viewControls->forExport = "export";
	while((!$nPageSize || $iNumberOfRows<$nPageSize) && $row)
	{
		countTotals($totals, $totalsFields, $row);
		
		$values = array();
	
					$values["Id"] = $pageObject->getViewControl("Id")->showDBValue($row, "");
					$values["NIK"] = $pageObject->getViewControl("NIK")->showDBValue($row, "");
					$values["Nama_Karyawan"] = $pageObject->getViewControl("Nama_Karyawan")->showDBValue($row, "");
					$values["Sex"] = $pageObject->getViewControl("Sex")->showDBValue($row, "");
					$values["POB"] = $pageObject->getViewControl("POB")->showDBValue($row, "");
					$values["DOB"] = $pageObject->getViewControl("DOB")->showDBValue($row, "");
					$values["Tax_Status"] = $pageObject->getViewControl("Tax_Status")->showDBValue($row, "");
					$values["Address_Nama_Jalan"] = $pageObject->getViewControl("Address_Nama_Jalan")->showDBValue($row, "");
					$values["Address_Nama_Desa"] = $pageObject->getViewControl("Address_Nama_Desa")->showDBValue($row, "");
					$values["Address_Nama_Kec"] = $pageObject->getViewControl("Address_Nama_Kec")->showDBValue($row, "");
					$values["Address_Nama_Kab"] = $pageObject->getViewControl("Address_Nama_Kab")->showDBValue($row, "");
					$values["Address_Nama_Prov"] = $pageObject->getViewControl("Address_Nama_Prov")->showDBValue($row, "");
					$values["Telp"] = $pageObject->getViewControl("Telp")->showDBValue($row, "");
					$values["Position"] = $pageObject->getViewControl("Position")->showDBValue($row, "");
					$values["Classification"] = $pageObject->getViewControl("Classification")->showDBValue($row, "");
					$values["Section"] = $pageObject->getViewControl("Section")->showDBValue($row, "");
					$values["Department"] = $pageObject->getViewControl("Department")->showDBValue($row, "");
		
		$eventRes = true;
		if ($eventObj->exists('BeforeOut'))
		{
			$eventRes = $eventObj->BeforeOut($row, $values, $pageObject);
		}
		if ($eventRes)
		{
			$iNumberOfRows++;
			echo "<tr>";
		
							echo '<td>';
			
									echo $values["Id"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["NIK"]);
					else
						echo $values["NIK"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Nama_Karyawan"]);
					else
						echo $values["Nama_Karyawan"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Sex"]);
					else
						echo $values["Sex"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["POB"]);
					else
						echo $values["POB"];
			echo '</td>';
							echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["DOB"]);
					else
						echo $values["DOB"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Tax_Status"]);
					else
						echo $values["Tax_Status"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Address_Nama_Jalan"]);
					else
						echo $values["Address_Nama_Jalan"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Address_Nama_Desa"]);
					else
						echo $values["Address_Nama_Desa"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Address_Nama_Kec"]);
					else
						echo $values["Address_Nama_Kec"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Address_Nama_Kab"]);
					else
						echo $values["Address_Nama_Kab"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Address_Nama_Prov"]);
					else
						echo $values["Address_Nama_Prov"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Telp"]);
					else
						echo $values["Telp"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Position"]);
					else
						echo $values["Position"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Classification"]);
					else
						echo $values["Classification"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Section"]);
					else
						echo $values["Section"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Department"]);
					else
						echo $values["Department"];
			echo '</td>';
			echo "</tr>";
		}
		
		
		if($eventObj->exists("ListFetchArray"))
			$row = $eventObj->ListFetchArray($rs, $pageObject);
		else
			$row = $cipherer->DecryptFetchedArray($rs);
	}
	
}

function XMLNameEncode($strValue)
{
	$search = array(" ","#","'","/","\\","(",")",",","[");
	$ret = str_replace($search,"",$strValue);
	$search = array("]","+","\"","-","_","|","}","{","=");
	$ret = str_replace($search,"",$ret);
	return $ret;
}

function PrepareForExcel($ret)
{
	//$ret = htmlspecialchars($str); commented for bug #6823
	if (substr($ret,0,1)== "=") 
		$ret = "&#61;".substr($ret,1);
	return $ret;

}

function countTotals(&$totals, $totalsFields, $data)
{
	for($i = 0; $i < count($totalsFields); $i ++) 
	{
		if($totalsFields[$i]['totalsType'] == 'COUNT') 
			$totals[$totalsFields[$i]['fName']]["value"] += ($data[$totalsFields[$i]['fName']]!= "");
		else if($totalsFields[$i]['viewFormat'] == "Time") 
		{
			$time = GetTotalsForTime($data[$totalsFields[$i]['fName']]);
			$totals[$totalsFields[$i]['fName']]["value"] += $time[2]+$time[1]*60 + $time[0]*3600;
		} 
		else 
			$totals[$totalsFields[$i]['fName']]["value"] += ($data[$totalsFields[$i]['fName']]+ 0);
		
		if($totalsFields[$i]['totalsType'] == 'AVERAGE')
		{
			if(!is_null($data[$totalsFields[$i]['fName']]) && $data[$totalsFields[$i]['fName']]!=="")
				$totals[$totalsFields[$i]['fName']]['numRows']++;
		}
	}
}
?>
