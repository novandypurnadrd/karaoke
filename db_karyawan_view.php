<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("include/db_karyawan_variables.php");
include('include/xtempl.php');
include('classes/viewpage.php');
include("classes/searchclause.php");

add_nocache_headers();

CheckPermissionsEvent($strTableName, 'S');

$layout = new TLayout("view2","BoldWhite_label","MobileWhite_label");
$layout->blocks["top"] = array();
$layout->skins["pdf"] = "empty";
$layout->blocks["top"][] = "pdf";
$layout->containers["view"] = array();

$layout->containers["view"][] = array("name"=>"viewheader","block"=>"","substyle"=>2);


$layout->containers["view"][] = array("name"=>"wrapper","block"=>"","substyle"=>1, "container"=>"fields");


$layout->containers["fields"] = array();

$layout->containers["fields"][] = array("name"=>"viewfields","block"=>"","substyle"=>1);


$layout->containers["fields"][] = array("name"=>"viewbuttons","block"=>"","substyle"=>2);


$layout->skins["fields"] = "fields";

$layout->skins["view"] = "1";
$layout->blocks["top"][] = "view";
$layout->skins["details"] = "empty";
$layout->blocks["top"][] = "details";$page_layouts["db_karyawan_view"] = $layout;




//$cipherer = new RunnerCipherer($strTableName);
	
$xt = new Xtempl();

$query = $gQuery->Copy();

$filename = "";	
$message = "";
$key = array();
$next = array();
$prev = array();
$all = postvalue("all");
$pdf = postvalue("pdf");
$mypage = 1;

//Show view page as popUp or not
$inlineview = (postvalue("onFly") ? true : false);

//If show view as popUp, get parent Id
if($inlineview)
	$parId = postvalue("parId");
else
	$parId = 0;

//Set page id	
if(postvalue("id"))
	$id = postvalue("id");
else
	$id = 1;

//$isNeedSettings = true;//($inlineview && postvalue("isNeedSettings") == 'true') || (!$inlineview);	
	
// assign an id
$xt->assign("id",$id);

//array of params for classes
$params = array("pageType" => PAGE_VIEW, "id" => $id, "tName" => $strTableName);
$params["xt"] = &$xt;
$params["all"] = $all;

//Get array of tabs for edit page
$params['useTabsOnView'] = $gSettings->useTabsOnView();
if($params['useTabsOnView'])
	$params['arrViewTabs'] = $gSettings->getViewTabs();
$pageObject = new ViewPage($params);

// SearchClause class stuff
$pageObject->searchClauseObj->parseRequest();
$_SESSION[$strTableName.'_advsearch'] = serialize($pageObject->searchClauseObj);

// proccess big google maps

// add button events if exist
$pageObject->addButtonHandlers();

//For show detail tables on master page view
$dpParams = array();
if($pageObject->isShowDetailTables && !isMobile())
{
	$ids = $id;
	$pageObject->jsSettings['tableSettings'][$strTableName]['dpParams'] = array();
}

//	Before Process event
if($eventObj->exists("BeforeProcessView"))
	$eventObj->BeforeProcessView($conn, $pageObject);
	
//	read current values from the database
$data = $pageObject->getCurrentRecordInternal();

if (!sizeof($data)) {
	header("Location: db_karyawan_list.php?a=return");
	exit();
}

$out = "";
$first = true;
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

$mainTableOwnerID = $pageObject->pSet->getTableOwnerIdField();
$ownerIdValue="";

$pageObject->setGoogleMapsParams($fieldsArr);

while($data)
{
	$xt->assign("show_key1", htmlspecialchars($pageObject->showDBValue("Id", $data)));

	$keylink="";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["Id"]));

////////////////////////////////////////////
//Id - 
	
	$value = $pageObject->showDBValue("Id", $data, $keylink);
	if($mainTableOwnerID=="Id")
		$ownerIdValue=$value;
	$xt->assign("Id_value",$value);
	if(!$pageObject->isAppearOnTabs("Id"))
		$xt->assign("Id_fieldblock",true);
	else
		$xt->assign("Id_tabfieldblock",true);
////////////////////////////////////////////
//NIK - 
	
	$value = $pageObject->showDBValue("NIK", $data, $keylink);
	if($mainTableOwnerID=="NIK")
		$ownerIdValue=$value;
	$xt->assign("NIK_value",$value);
	if(!$pageObject->isAppearOnTabs("NIK"))
		$xt->assign("NIK_fieldblock",true);
	else
		$xt->assign("NIK_tabfieldblock",true);
////////////////////////////////////////////
//Nama_Karyawan - 
	
	$value = $pageObject->showDBValue("Nama_Karyawan", $data, $keylink);
	if($mainTableOwnerID=="Nama_Karyawan")
		$ownerIdValue=$value;
	$xt->assign("Nama_Karyawan_value",$value);
	if(!$pageObject->isAppearOnTabs("Nama_Karyawan"))
		$xt->assign("Nama_Karyawan_fieldblock",true);
	else
		$xt->assign("Nama_Karyawan_tabfieldblock",true);
////////////////////////////////////////////
//Sex - 
	
	$value = $pageObject->showDBValue("Sex", $data, $keylink);
	if($mainTableOwnerID=="Sex")
		$ownerIdValue=$value;
	$xt->assign("Sex_value",$value);
	if(!$pageObject->isAppearOnTabs("Sex"))
		$xt->assign("Sex_fieldblock",true);
	else
		$xt->assign("Sex_tabfieldblock",true);
////////////////////////////////////////////
//POB - 
	
	$value = $pageObject->showDBValue("POB", $data, $keylink);
	if($mainTableOwnerID=="POB")
		$ownerIdValue=$value;
	$xt->assign("POB_value",$value);
	if(!$pageObject->isAppearOnTabs("POB"))
		$xt->assign("POB_fieldblock",true);
	else
		$xt->assign("POB_tabfieldblock",true);
////////////////////////////////////////////
//DOB - Short Date
	
	$value = $pageObject->showDBValue("DOB", $data, $keylink);
	if($mainTableOwnerID=="DOB")
		$ownerIdValue=$value;
	$xt->assign("DOB_value",$value);
	if(!$pageObject->isAppearOnTabs("DOB"))
		$xt->assign("DOB_fieldblock",true);
	else
		$xt->assign("DOB_tabfieldblock",true);
////////////////////////////////////////////
//Tax_Status - 
	
	$value = $pageObject->showDBValue("Tax_Status", $data, $keylink);
	if($mainTableOwnerID=="Tax_Status")
		$ownerIdValue=$value;
	$xt->assign("Tax_Status_value",$value);
	if(!$pageObject->isAppearOnTabs("Tax_Status"))
		$xt->assign("Tax_Status_fieldblock",true);
	else
		$xt->assign("Tax_Status_tabfieldblock",true);
////////////////////////////////////////////
//Address_Nama_Jalan - 
	
	$value = $pageObject->showDBValue("Address_Nama_Jalan", $data, $keylink);
	if($mainTableOwnerID=="Address_Nama_Jalan")
		$ownerIdValue=$value;
	$xt->assign("Address_Nama_Jalan_value",$value);
	if(!$pageObject->isAppearOnTabs("Address_Nama_Jalan"))
		$xt->assign("Address_Nama_Jalan_fieldblock",true);
	else
		$xt->assign("Address_Nama_Jalan_tabfieldblock",true);
////////////////////////////////////////////
//Address_Nama_Desa - 
	
	$value = $pageObject->showDBValue("Address_Nama_Desa", $data, $keylink);
	if($mainTableOwnerID=="Address_Nama_Desa")
		$ownerIdValue=$value;
	$xt->assign("Address_Nama_Desa_value",$value);
	if(!$pageObject->isAppearOnTabs("Address_Nama_Desa"))
		$xt->assign("Address_Nama_Desa_fieldblock",true);
	else
		$xt->assign("Address_Nama_Desa_tabfieldblock",true);
////////////////////////////////////////////
//Address_Nama_Kec - 
	
	$value = $pageObject->showDBValue("Address_Nama_Kec", $data, $keylink);
	if($mainTableOwnerID=="Address_Nama_Kec")
		$ownerIdValue=$value;
	$xt->assign("Address_Nama_Kec_value",$value);
	if(!$pageObject->isAppearOnTabs("Address_Nama_Kec"))
		$xt->assign("Address_Nama_Kec_fieldblock",true);
	else
		$xt->assign("Address_Nama_Kec_tabfieldblock",true);
////////////////////////////////////////////
//Address_Nama_Kab - 
	
	$value = $pageObject->showDBValue("Address_Nama_Kab", $data, $keylink);
	if($mainTableOwnerID=="Address_Nama_Kab")
		$ownerIdValue=$value;
	$xt->assign("Address_Nama_Kab_value",$value);
	if(!$pageObject->isAppearOnTabs("Address_Nama_Kab"))
		$xt->assign("Address_Nama_Kab_fieldblock",true);
	else
		$xt->assign("Address_Nama_Kab_tabfieldblock",true);
////////////////////////////////////////////
//Address_Nama_Prov - 
	
	$value = $pageObject->showDBValue("Address_Nama_Prov", $data, $keylink);
	if($mainTableOwnerID=="Address_Nama_Prov")
		$ownerIdValue=$value;
	$xt->assign("Address_Nama_Prov_value",$value);
	if(!$pageObject->isAppearOnTabs("Address_Nama_Prov"))
		$xt->assign("Address_Nama_Prov_fieldblock",true);
	else
		$xt->assign("Address_Nama_Prov_tabfieldblock",true);
////////////////////////////////////////////
//Telp - 
	
	$value = $pageObject->showDBValue("Telp", $data, $keylink);
	if($mainTableOwnerID=="Telp")
		$ownerIdValue=$value;
	$xt->assign("Telp_value",$value);
	if(!$pageObject->isAppearOnTabs("Telp"))
		$xt->assign("Telp_fieldblock",true);
	else
		$xt->assign("Telp_tabfieldblock",true);
////////////////////////////////////////////
//Position - 
	
	$value = $pageObject->showDBValue("Position", $data, $keylink);
	if($mainTableOwnerID=="Position")
		$ownerIdValue=$value;
	$xt->assign("Position_value",$value);
	if(!$pageObject->isAppearOnTabs("Position"))
		$xt->assign("Position_fieldblock",true);
	else
		$xt->assign("Position_tabfieldblock",true);
////////////////////////////////////////////
//Classification - 
	
	$value = $pageObject->showDBValue("Classification", $data, $keylink);
	if($mainTableOwnerID=="Classification")
		$ownerIdValue=$value;
	$xt->assign("Classification_value",$value);
	if(!$pageObject->isAppearOnTabs("Classification"))
		$xt->assign("Classification_fieldblock",true);
	else
		$xt->assign("Classification_tabfieldblock",true);
////////////////////////////////////////////
//Section - 
	
	$value = $pageObject->showDBValue("Section", $data, $keylink);
	if($mainTableOwnerID=="Section")
		$ownerIdValue=$value;
	$xt->assign("Section_value",$value);
	if(!$pageObject->isAppearOnTabs("Section"))
		$xt->assign("Section_fieldblock",true);
	else
		$xt->assign("Section_tabfieldblock",true);
////////////////////////////////////////////
//Department - 
	
	$value = $pageObject->showDBValue("Department", $data, $keylink);
	if($mainTableOwnerID=="Department")
		$ownerIdValue=$value;
	$xt->assign("Department_value",$value);
	if(!$pageObject->isAppearOnTabs("Department"))
		$xt->assign("Department_fieldblock",true);
	else
		$xt->assign("Department_tabfieldblock",true);

/////////////////////////////////////////////////////////////
if($pageObject->isShowDetailTables && !isMobile())
{
	if(count($dpParams['ids']))
	{
		$xt->assign("detail_tables",true);
		include('classes/listpage.php');
		include('classes/listpage_embed.php');
		include('classes/listpage_dpinline.php');
	}
	
	$dControlsMap = array();
	$dViewControlsMap = array();
	
	for($d=0;$d<count($dpParams['ids']);$d++)
	{
		$options = array();
		//array of params for classes
		$options["mode"] = LIST_DETAILS;
		$options["pageType"] = PAGE_LIST;
		$options["masterPageType"] = PAGE_VIEW;
		$options["mainMasterPageType"] = PAGE_VIEW;
		$options['masterTable'] = "db_karyawan";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
		include_once("include/".GetTableURL($strTableName)."_settings.php");
		if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
		{
			$strTableName = "db_karyawan";
			continue;
		}
		
		$layout = GetPageLayout(GoodFieldName($strTableName), PAGE_LIST);
		if($layout)
		{
			$rtl = $xt->getReadingOrder() == 'RTL' ? 'RTL' : '';
			$xt->cssFiles[] = array("stylepath" => "styles/".$layout->style.'/style'.$rtl.".css"
				, "pagestylepath" => "pagestyles/".$layout->name.$rtl.".css");
			$xt->IEcssFiles[] = array("stylepathIE" => "styles/".$layout->style.'/styleIE'.".css");
		}
		
		$options['xt'] = new Xtempl();
		$options['id'] = $dpParams['ids'][$d];
		$options['flyId'] = $pageObject->genId()+1;
		$mkr = 1;
		foreach($mKeys[$strTableName] as $mk)
			$options['masterKeysReq'][$mkr++] = $data[$mk];

		$listPageObject = ListPage::createListPage($strTableName, $options);
		
		// prepare code
		$listPageObject->prepareForBuildPage();
		
		// show page
		if($listPageObject->permis[$strTableName]['search'] && $listPageObject->rowsFound)
		{
			//set page events
			foreach($listPageObject->eventsObject->events as $event => $name)
				$listPageObject->xt->assign_event($event, $listPageObject->eventsObject, $event, array());
			
			//add detail settings to master settings
			$listPageObject->addControlsJSAndCSS();
			$listPageObject->fillSetCntrlMaps();
			$pageObject->jsSettings['tableSettings'][$strTableName]	= $listPageObject->jsSettings['tableSettings'][$strTableName];
			$dControlsMap[$strTableName] = $listPageObject->controlsMap;
			$dViewControlsMap[$strTableName] = $listPageObject->viewControlsMap;
			foreach($listPageObject->jsSettings['global']['shortTNames'] as $keySet=>$val)
			{
				if(!array_key_exists($keySet,$pageObject->settingsMap["globalSettings"]['shortTNames']))
					$pageObject->settingsMap["globalSettings"]['shortTNames'][$keySet] = $val;
			}
			
			//Add detail's js files to master's files
			$pageObject->copyAllJSFiles($listPageObject->grabAllJSFiles());
			
			//Add detail's css files to master's files
			$pageObject->copyAllCSSFiles($listPageObject->grabAllCSSFiles());
		
			$xtParams = array("method"=>'showPage', "params"=> false);
			$xtParams['object'] = $listPageObject;
			$xt->assign("displayDetailTable_".GoodFieldName($listPageObject->tName), $xtParams);
		
			$pageObject->controlsMap['dpTablesParams'][] = array('tName'=>$strTableName, 'id'=>$options['id']);
		}
	}
	$pageObject->controlsMap['dControlsMap'] = $dControlsMap;
	$pageObject->viewControlsMap['dViewControlsMap'] = $dViewControlsMap; 
	$strTableName = "db_karyawan";
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Begin prepare for Next Prev button
if(!@$_SESSION[$strTableName."_noNextPrev"] && !$inlineview && !$pdf)
{
	$pageObject->getNextPrevRecordKeys($data,"Search",$next,$prev);
}
//End prepare for Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


if ($pageObject->googleMapCfg['isUseGoogleMap'])
{
	$pageObject->initGmaps();
}

$pageObject->addCommonJs();

//fill tab groups name and sections name to controls
$pageObject->fillCntrlTabGroups();

if(!$inlineview)
{
	$pageObject->body["begin"].="<script type=\"text/javascript\" src=\"include/loadfirst.js\"></script>\r\n";
		$pageObject->body["begin"].= "<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";		
	
	$pageObject->jsSettings['tableSettings'][$strTableName]["keys"] = $pageObject->jsKeys;
	$pageObject->jsSettings['tableSettings'][$strTableName]['keyFields'] = $pageObject->keyFields;
	$pageObject->jsSettings['tableSettings'][$strTableName]["prevKeys"] = $prev;
	$pageObject->jsSettings['tableSettings'][$strTableName]["nextKeys"] = $next; 
	
	// assign body end
	$pageObject->body['end'] = array();
	$pageObject->body['end']["method"] = "assignBodyEnd";
	$pageObject->body['end']["object"] = &$pageObject;
	
	$xt->assign("body",$pageObject->body);
	$xt->assign("flybody",true);
}
else
{
	$xt->assign("footer",false);
	$xt->assign("header",false);
	$xt->assign("flybody",$pageObject->body);
	$xt->assign("body",true);
	$xt->assign("pdflink_block",false);
	
	$pageObject->fillSetCntrlMaps();
	
	$returnJSON['controlsMap'] = $pageObject->controlsHTMLMap;
	$returnJSON['viewControlsMap'] = $pageObject->viewControlsHTMLMap;
	$returnJSON['settings'] = $pageObject->jsSettings;
}
$xt->assign("style_block",true);
$xt->assign("stylefiles_block",true);

$editlink="";
$editkeys=array();
	$editkeys["editid1"]=postvalue("editid1");
foreach($editkeys as $key=>$val)
{
	if($editlink)
		$editlink.="&";
	$editlink.=$key."=".$val;
}
$xt->assign("editlink_attrs","id=\"editLink".$id."\" name=\"editLink".$id."\" onclick=\"window.location.href='db_karyawan_edit.php?".$editlink."'\"");

$strPerm = GetUserPermissions($strTableName);
if(CheckSecurity($ownerIdValue,"Edit") && !$inlineview && strpos($strPerm, "E")!==false)
	$xt->assign("edit_button",true);
else
	$xt->assign("edit_button",false);

if(!$pdf && !$all && !$inlineview)
{
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Begin show Next Prev button
	$nextlink=$prevlink="";
	if(count($next))
	{
		$xt->assign("next_button",true);
	 		$nextlink .="editid1=".htmlspecialchars(rawurlencode($next[1-1]));
		$xt->assign("nextbutton_attrs","id=\"nextButton".$id."\"");
	}
	else 
		$xt->assign("next_button",false);
	if(count($prev))
	{
		$xt->assign("prev_button",true);
			$prevlink .="editid1=".htmlspecialchars(rawurlencode($prev[1-1]));
		$xt->assign("prevbutton_attrs","id=\"prevButton".$id."\"");
	}
	else 
		$xt->assign("prev_button",false);
//End show Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	$xt->assign("back_button",true);
	$xt->assign("backbutton_attrs","id=\"backButton".$id."\"");
}

$oldtemplatefile = $pageObject->templatefile;

if(!$all)
{
	if($eventObj->exists("BeforeShowView"))
	{
		$templatefile = $pageObject->templatefile;
		$eventObj->BeforeShowView($xt,$templatefile,$data, $pageObject);
		$pageObject->templatefile = $templatefile;
	}
	if(!$pdf)
	{
		if(!$inlineview)
			$xt->display($pageObject->templatefile);
		else{
				$xt->load_template($pageObject->templatefile);
				$returnJSON['html'] = $xt->fetch_loaded('style_block').$xt->fetch_loaded('body');
				if(count($pageObject->includes_css))
					$returnJSON['CSSFiles'] = array_unique($pageObject->includes_css);
				if(count($pageObject->includes_cssIE))
					$returnJSON['CSSFilesIE'] = array_unique($pageObject->includes_cssIE);				
				$returnJSON['idStartFrom'] = $id+1;
				$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
				echo (my_json_encode($returnJSON)); 
			}
	}
	break;
}
}


?>
