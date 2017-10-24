<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("classes/searchclause.php");

add_nocache_headers();

include("include/db_karyawan_variables.php");

CheckPermissionsEvent($strTableName, 'P');

$layout = new TLayout("print","BoldWhite_label","MobileWhite_label");
$layout->blocks["center"] = array();
$layout->containers["grid"] = array();

$layout->containers["grid"][] = array("name"=>"printgrid","block"=>"grid_block","substyle"=>1);


$layout->skins["grid"] = "empty";
$layout->blocks["center"][] = "grid";$layout->blocks["top"] = array();
$layout->skins["master"] = "empty";
$layout->blocks["top"][] = "master";
$layout->skins["pdf"] = "empty";
$layout->blocks["top"][] = "pdf";$page_layouts["db_karyawan_print"] = $layout;


include('include/xtempl.php');
include('classes/runnerpage.php');

$cipherer = new RunnerCipherer($strTableName);

$xt = new Xtempl();
$id = postvalue("id") != "" ? postvalue("id") : 1;
$all = postvalue("all");
$pageName = "print.php";

//array of params for classes
$params = array("id" => $id,
				"tName" => $strTableName,
				"pageType" => PAGE_PRINT);
$params["xt"] = &$xt;
			
$pageObject = new RunnerPage($params);

// add button events if exist
$pageObject->addButtonHandlers();

// Modify query: remove blob fields from fieldlist.
// Blob fields on a print page are shown using imager.php (for example).
// They don't need to be selected from DB in print.php itself.
$noBlobReplace = false;
if(!postvalue("pdf") && !$noBlobReplace)
	$gQuery->ReplaceFieldsWithDummies($pageObject->pSet->getBinaryFieldsIndices());

//	Before Process event
if($eventObj->exists("BeforeProcessPrint"))
	$eventObj->BeforeProcessPrint($conn, $pageObject);

$strWhereClause="";
$strHavingClause="";
$strSearchCriteria="and";

$selected_recs=array();
if (@$_REQUEST["a"]!="") 
{
	$sWhere = "1=0";	
	
//	process selection
	if (@$_REQUEST["mdelete"])
	{
		foreach(@$_REQUEST["mdelete"] as $ind)
		{
			$keys=array();
			$keys["Id"]=refine($_REQUEST["mdelete1"][mdeleteIndex($ind)]);
			$selected_recs[]=$keys;
		}
	}
	elseif(@$_REQUEST["selection"])
	{
		foreach(@$_REQUEST["selection"] as $keyblock)
		{
			$arr=explode("&",refine($keyblock));
			if(count($arr)<1)
				continue;
			$keys=array();
			$keys["Id"]=urldecode($arr[0]);
			$selected_recs[]=$keys;
		}
	}

	foreach($selected_recs as $keys)
	{
		$sWhere = $sWhere . " or ";
		$sWhere.=KeyWhere($keys);
	}
	$strSQL = $gQuery->gSQLWhere($sWhere);
	$strWhereClause=$sWhere;
}
else
{
	$strWhereClause=@$_SESSION[$strTableName."_where"];
	$strHavingClause=@$_SESSION[$strTableName."_having"];
	$strSearchCriteria=@$_SESSION[$strTableName."_criteria"];
	$strSQL = $gQuery->gSQLWhere($strWhereClause, $strHavingClause, $strSearchCriteria);
}
if(postvalue("pdf"))
	$strWhereClause = @$_SESSION[$strTableName."_pdfwhere"];

$_SESSION[$strTableName."_pdfwhere"] = $strWhereClause;


$strOrderBy = $_SESSION[$strTableName."_order"];
if(!$strOrderBy)
	$strOrderBy=$gstrOrderBy;
$strSQL.=" ".trim($strOrderBy);

$strSQLbak = $strSQL;
if($eventObj->exists("BeforeQueryPrint"))
	$eventObj->BeforeQueryPrint($strSQL,$strWhereClause,$strOrderBy, $pageObject);

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
			$masterKeysReq[]=$_SESSION[$strTableName."_masterkey".($i + 1)];
			$rowcount=$eventObj->ListGetRowCount($pageObject->searchClauseObj,$_SESSION[$strTableName."_mastertable"],$masterKeysReq,$selected_recs, $pageObject);
	}
	if($rowcount!==false)
		$numrows=$rowcount;
	else
	{
		$numrows = $gQuery->gSQLRowCount($strWhereClause, $strHavingClause, $strSearchCriteria);
	}
}

LogInfo($strSQL);

$mypage=(integer)$_SESSION[$strTableName."_pagenumber"];
if(!$mypage)
	$mypage=1;

//	page size
$PageSize=(integer)$_SESSION[$strTableName."_pagesize"];
if(!$PageSize)
	$PageSize = $pageObject->pSet->getInitialPageSize();

if($PageSize<0)
	$all = 1;	
	
$recno = 1;
$records = 0;	
$maxpages = 1;
$pageindex = 1;
$pageno=1;

// build arrays for sort (to support old code in user-defined events)
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
}

if(!$all)
{	
	if($numrows)
	{
		$maxRecords = $numrows;
		$maxpages = ceil($maxRecords/$PageSize);
					
		if($mypage > $maxpages)
			$mypage = $maxpages;
		
		if($mypage < 1) 
			$mypage = 1;
		
		$maxrecs = $PageSize;
	}
	$listarray = false;
	if($eventObj->exists("ListQuery"))
		$listarray = $eventObj->ListQuery($pageObject->searchClauseObj, $arrFieldForSort, $arrHowFieldSort, 
			$_SESSION[$strTableName."_mastertable"], $masterKeysReq, $selected_recs, $PageSize, $mypage, $pageObject);
	if($listarray!==false)
		$rs = $listarray;
	else
	{
			if($numrows)
		{
			$strSQL.=" limit ".(($mypage-1)*$PageSize).",".$PageSize;
		}
		$rs = db_query($strSQL,$conn);
	}
	
	//	hide colunm headers if needed
	$recordsonpage = $numrows-($mypage-1)*$PageSize;
	if($recordsonpage>$PageSize)
		$recordsonpage = $PageSize;
		
	$xt->assign("page_number",true);
	$xt->assign("maxpages",$maxpages);
	$xt->assign("pageno",$mypage);
}
else
{
	$listarray = false;
	if($eventObj->exists("ListQuery"))
		$listarray=$eventObj->ListQuery($pageObject->searchClauseObj, $arrFieldForSort, $arrHowFieldSort,
			$_SESSION[$strTableName."_mastertable"], $masterKeysReq, $selected_recs, $PageSize, $mypage, $pageObject);
	if($listarray!==false)
		$rs = $listarray;
	else
		$rs = db_query($strSQL,$conn);
	$recordsonpage = $numrows;
	$maxpages = ceil($recordsonpage/30);
	$xt->assign("page_number",true);
	$xt->assign("maxpages",$maxpages);
}


$fieldsArr = array();
$arr = array();
$arr['fName'] = "Id";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Id");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "NIK";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("NIK");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Nama_Karyawan";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Nama_Karyawan");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Sex";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Sex");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "POB";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("POB");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "DOB";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("DOB");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Tax_Status";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Tax_Status");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Address_Nama_Jalan";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Address_Nama_Jalan");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Address_Nama_Desa";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Address_Nama_Desa");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Address_Nama_Kec";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Address_Nama_Kec");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Address_Nama_Kab";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Address_Nama_Kab");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Address_Nama_Prov";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Address_Nama_Prov");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Telp";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Telp");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Position";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Position");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Classification";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Classification");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Section";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Section");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Department";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Department");
$fieldsArr[] = $arr;
$pageObject->setGoogleMapsParams($fieldsArr);

$colsonpage=1;
if($colsonpage>$recordsonpage)
	$colsonpage=$recordsonpage;
if($colsonpage<1)
	$colsonpage=1;


//	fill $rowinfo array
	$pages = array();
	$rowinfo = array();
	$rowinfo["data"] = array();
	if($eventObj->exists("ListFetchArray"))
		$data = $eventObj->ListFetchArray($rs, $pageObject);
	else
		$data = $cipherer->DecryptFetchedArray($rs);

	while($data)
	{
		if($eventObj->exists("BeforeProcessRowPrint"))
		{
			if(!$eventObj->BeforeProcessRowPrint($data, $pageObject))
			{
				if($eventObj->exists("ListFetchArray"))
					$data = $eventObj->ListFetchArray($rs, $pageObject);
				else
					$data = $cipherer->DecryptFetchedArray($rs);
				continue;
			}
		}
		break;
	}
	
	while($data && ($all || $recno<=$PageSize))
	{
		$row = array();
		$row["grid_record"] = array();
		$row["grid_record"]["data"] = array();
		for($col=1;$data && ($all || $recno<=$PageSize) && $col<=1;$col++)
		{
			$record = array();
			$recno++;
			$records++;
			$keylink="";
			$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["Id"]));

//	Id - 
			$record["Id_value"] = $pageObject->showDBValue("Id", $data, $keylink);
			$record["Id_class"] = $pageObject->fieldClass("Id");
//	NIK - 
			$record["NIK_value"] = $pageObject->showDBValue("NIK", $data, $keylink);
			$record["NIK_class"] = $pageObject->fieldClass("NIK");
//	Nama_Karyawan - 
			$record["Nama_Karyawan_value"] = $pageObject->showDBValue("Nama_Karyawan", $data, $keylink);
			$record["Nama_Karyawan_class"] = $pageObject->fieldClass("Nama_Karyawan");
//	Sex - 
			$record["Sex_value"] = $pageObject->showDBValue("Sex", $data, $keylink);
			$record["Sex_class"] = $pageObject->fieldClass("Sex");
//	POB - 
			$record["POB_value"] = $pageObject->showDBValue("POB", $data, $keylink);
			$record["POB_class"] = $pageObject->fieldClass("POB");
//	DOB - Short Date
			$record["DOB_value"] = $pageObject->showDBValue("DOB", $data, $keylink);
			$record["DOB_class"] = $pageObject->fieldClass("DOB");
//	Tax_Status - 
			$record["Tax_Status_value"] = $pageObject->showDBValue("Tax_Status", $data, $keylink);
			$record["Tax_Status_class"] = $pageObject->fieldClass("Tax_Status");
//	Address_Nama_Jalan - 
			$record["Address_Nama_Jalan_value"] = $pageObject->showDBValue("Address_Nama_Jalan", $data, $keylink);
			$record["Address_Nama_Jalan_class"] = $pageObject->fieldClass("Address_Nama_Jalan");
//	Address_Nama_Desa - 
			$record["Address_Nama_Desa_value"] = $pageObject->showDBValue("Address_Nama_Desa", $data, $keylink);
			$record["Address_Nama_Desa_class"] = $pageObject->fieldClass("Address_Nama_Desa");
//	Address_Nama_Kec - 
			$record["Address_Nama_Kec_value"] = $pageObject->showDBValue("Address_Nama_Kec", $data, $keylink);
			$record["Address_Nama_Kec_class"] = $pageObject->fieldClass("Address_Nama_Kec");
//	Address_Nama_Kab - 
			$record["Address_Nama_Kab_value"] = $pageObject->showDBValue("Address_Nama_Kab", $data, $keylink);
			$record["Address_Nama_Kab_class"] = $pageObject->fieldClass("Address_Nama_Kab");
//	Address_Nama_Prov - 
			$record["Address_Nama_Prov_value"] = $pageObject->showDBValue("Address_Nama_Prov", $data, $keylink);
			$record["Address_Nama_Prov_class"] = $pageObject->fieldClass("Address_Nama_Prov");
//	Telp - 
			$record["Telp_value"] = $pageObject->showDBValue("Telp", $data, $keylink);
			$record["Telp_class"] = $pageObject->fieldClass("Telp");
//	Position - 
			$record["Position_value"] = $pageObject->showDBValue("Position", $data, $keylink);
			$record["Position_class"] = $pageObject->fieldClass("Position");
//	Classification - 
			$record["Classification_value"] = $pageObject->showDBValue("Classification", $data, $keylink);
			$record["Classification_class"] = $pageObject->fieldClass("Classification");
//	Section - 
			$record["Section_value"] = $pageObject->showDBValue("Section", $data, $keylink);
			$record["Section_class"] = $pageObject->fieldClass("Section");
//	Department - 
			$record["Department_value"] = $pageObject->showDBValue("Department", $data, $keylink);
			$record["Department_class"] = $pageObject->fieldClass("Department");
			if($col<$colsonpage)
				$record["endrecord_block"] = true;
			$record["grid_recordheader"] = true;
			$record["grid_vrecord"] = true;
			
			if($eventObj->exists("BeforeMoveNextPrint"))
				$eventObj->BeforeMoveNextPrint($data,$row,$record, $pageObject);
				
			$row["grid_record"]["data"][] = $record;
			
			if($eventObj->exists("ListFetchArray"))
				$data = $eventObj->ListFetchArray($rs, $pageObject);
			else
				$data = $cipherer->DecryptFetchedArray($rs);
				
			while($data)
			{
				if($eventObj->exists("BeforeProcessRowPrint"))
				{
					if(!$eventObj->BeforeProcessRowPrint($data, $pageObject))
					{
						if($eventObj->exists("ListFetchArray"))
							$data = $eventObj->ListFetchArray($rs, $pageObject);
						else
							$data = $cipherer->DecryptFetchedArray($rs);
						continue;
					}
				}
				break;
			}
		}
		if($col <= $colsonpage)
		{
			$row["grid_record"]["data"][count($row["grid_record"]["data"])-1]["endrecord_block"] = false;
		}
		$row["grid_rowspace"]=true;
		$row["grid_recordspace"] = array("data"=>array());
		for($i=0;$i<$colsonpage*2-1;$i++)
			$row["grid_recordspace"]["data"][]=true;
		
		$rowinfo["data"][]=$row;
		
		if($all && $records>=30)
		{
			$page=array("grid_row" =>$rowinfo);
			$page["pageno"]=$pageindex;
			$pageindex++;
			$pages[] = $page;
			$records=0;
			$rowinfo=array();
		}
		
	}
	if(count($rowinfo))
	{
		$page=array("grid_row" =>$rowinfo);
		if($all)
			$page["pageno"]=$pageindex;
		$pages[] = $page;
	}
	
	for($i=0;$i<count($pages);$i++)
	{
	 	if($i<count($pages)-1)
			$pages[$i]["begin"]="<div name=page class=printpage>";
		else
		    $pages[$i]["begin"]="<div name=page>";
			
		$pages[$i]["end"]="</div>";
	}

	$page = array();
	$page["data"] = &$pages;
	$xt->assignbyref("page",$page);

	

$strSQL = $_SESSION[$strTableName."_sql"];

$isPdfView = false;
$hasEvents = false;
if ($pageObject->pSet->isUsebuttonHandlers() || $isPdfView || $hasEvents)
{
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
}


if ($pageObject->pSet->isUsebuttonHandlers() || $isPdfView || $hasEvents)
	$pageObject->body["end"] .= "<script>".$pageObject->PrepareJS()."</script>";

$xt->assignbyref("body",$pageObject->body);
$xt->assign("grid_block",true);

$xt->assign("Id_fieldheadercolumn",true);
$xt->assign("Id_fieldheader",true);
$xt->assign("Id_fieldcolumn",true);
$xt->assign("Id_fieldfootercolumn",true);
$xt->assign("NIK_fieldheadercolumn",true);
$xt->assign("NIK_fieldheader",true);
$xt->assign("NIK_fieldcolumn",true);
$xt->assign("NIK_fieldfootercolumn",true);
$xt->assign("Nama_Karyawan_fieldheadercolumn",true);
$xt->assign("Nama_Karyawan_fieldheader",true);
$xt->assign("Nama_Karyawan_fieldcolumn",true);
$xt->assign("Nama_Karyawan_fieldfootercolumn",true);
$xt->assign("Sex_fieldheadercolumn",true);
$xt->assign("Sex_fieldheader",true);
$xt->assign("Sex_fieldcolumn",true);
$xt->assign("Sex_fieldfootercolumn",true);
$xt->assign("POB_fieldheadercolumn",true);
$xt->assign("POB_fieldheader",true);
$xt->assign("POB_fieldcolumn",true);
$xt->assign("POB_fieldfootercolumn",true);
$xt->assign("DOB_fieldheadercolumn",true);
$xt->assign("DOB_fieldheader",true);
$xt->assign("DOB_fieldcolumn",true);
$xt->assign("DOB_fieldfootercolumn",true);
$xt->assign("Tax_Status_fieldheadercolumn",true);
$xt->assign("Tax_Status_fieldheader",true);
$xt->assign("Tax_Status_fieldcolumn",true);
$xt->assign("Tax_Status_fieldfootercolumn",true);
$xt->assign("Address_Nama_Jalan_fieldheadercolumn",true);
$xt->assign("Address_Nama_Jalan_fieldheader",true);
$xt->assign("Address_Nama_Jalan_fieldcolumn",true);
$xt->assign("Address_Nama_Jalan_fieldfootercolumn",true);
$xt->assign("Address_Nama_Desa_fieldheadercolumn",true);
$xt->assign("Address_Nama_Desa_fieldheader",true);
$xt->assign("Address_Nama_Desa_fieldcolumn",true);
$xt->assign("Address_Nama_Desa_fieldfootercolumn",true);
$xt->assign("Address_Nama_Kec_fieldheadercolumn",true);
$xt->assign("Address_Nama_Kec_fieldheader",true);
$xt->assign("Address_Nama_Kec_fieldcolumn",true);
$xt->assign("Address_Nama_Kec_fieldfootercolumn",true);
$xt->assign("Address_Nama_Kab_fieldheadercolumn",true);
$xt->assign("Address_Nama_Kab_fieldheader",true);
$xt->assign("Address_Nama_Kab_fieldcolumn",true);
$xt->assign("Address_Nama_Kab_fieldfootercolumn",true);
$xt->assign("Address_Nama_Prov_fieldheadercolumn",true);
$xt->assign("Address_Nama_Prov_fieldheader",true);
$xt->assign("Address_Nama_Prov_fieldcolumn",true);
$xt->assign("Address_Nama_Prov_fieldfootercolumn",true);
$xt->assign("Telp_fieldheadercolumn",true);
$xt->assign("Telp_fieldheader",true);
$xt->assign("Telp_fieldcolumn",true);
$xt->assign("Telp_fieldfootercolumn",true);
$xt->assign("Position_fieldheadercolumn",true);
$xt->assign("Position_fieldheader",true);
$xt->assign("Position_fieldcolumn",true);
$xt->assign("Position_fieldfootercolumn",true);
$xt->assign("Classification_fieldheadercolumn",true);
$xt->assign("Classification_fieldheader",true);
$xt->assign("Classification_fieldcolumn",true);
$xt->assign("Classification_fieldfootercolumn",true);
$xt->assign("Section_fieldheadercolumn",true);
$xt->assign("Section_fieldheader",true);
$xt->assign("Section_fieldcolumn",true);
$xt->assign("Section_fieldfootercolumn",true);
$xt->assign("Department_fieldheadercolumn",true);
$xt->assign("Department_fieldheader",true);
$xt->assign("Department_fieldcolumn",true);
$xt->assign("Department_fieldfootercolumn",true);

	$record_header=array("data"=>array());
	$record_footer=array("data"=>array());
	for($i=0;$i<$colsonpage;$i++)
	{
		$rheader=array();
		$rfooter=array();
		if($i<$colsonpage-1)
		{
			$rheader["endrecordheader_block"]=true;
			$rfooter["endrecordheader_block"]=true;
		}
		$record_header["data"][]=$rheader;
		$record_footer["data"][]=$rfooter;
	}
	$xt->assignbyref("record_header",$record_header);
	$xt->assignbyref("record_footer",$record_footer);
	$xt->assign("grid_header",true);
	$xt->assign("grid_footer",true);

if($eventObj->exists("BeforeShowPrint"))
	$eventObj->BeforeShowPrint($xt,$pageObject->templatefile, $pageObject);

if(!postvalue("pdf"))
	$xt->display($pageObject->templatefile);
else
{
	$xt->load_template($pageObject->templatefile);
	$page = $xt->fetch_loaded();
	$pagewidth=postvalue("width")*1.05;
	$pageheight=postvalue("height")*1.05;
	$landscape=false;
		if($pagewidth>$pageheight)
		{
			$landscape=true;
			if($pagewidth/$pageheight<297/210)
				$pagewidth = 297/210*$pageheight;
		}
		else
		{
			if($pagewidth/$pageheight<210/297)
				$pagewidth = 210/297*$pageheight;
		}
}
?>
