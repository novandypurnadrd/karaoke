<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("include/db_karyawan_variables.php");
include('include/xtempl.php');
include('classes/editpage.php');
include("classes/searchclause.php");

add_nocache_headers();

global $globalEvents;

CheckPermissionsEvent($strTableName, 'E');

$layout = new TLayout("edit2","BoldWhite_label","MobileWhite_label");
$layout->blocks["top"] = array();
$layout->containers["edit"] = array();

$layout->containers["edit"][] = array("name"=>"editheader","block"=>"","substyle"=>2);


$layout->containers["edit"][] = array("name"=>"message","block"=>"message_block","substyle"=>1);


$layout->containers["edit"][] = array("name"=>"wrapper","block"=>"","substyle"=>1, "container"=>"fields");


$layout->containers["fields"] = array();

$layout->containers["fields"][] = array("name"=>"editfields","block"=>"","substyle"=>1);


$layout->containers["fields"][] = array("name"=>"legend","block"=>"legend","substyle"=>3);


$layout->containers["fields"][] = array("name"=>"editbuttons","block"=>"","substyle"=>2);


$layout->skins["fields"] = "fields";

$layout->skins["edit"] = "1";
$layout->blocks["top"][] = "edit";
$layout->skins["details"] = "empty";
$layout->blocks["top"][] = "details";$page_layouts["db_karyawan_edit"] = $layout;




if ((sizeof($_POST)==0) && (postvalue('ferror')) && (!postvalue("editid1"))){
	$returnJSON['success'] = false;
	$returnJSON['message'] = "Error occurred";
	$returnJSON['fatalError'] = true;
	echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
	exit();
}
else if ((sizeof($_POST)==0) && (postvalue('ferror')) && (postvalue("editid1"))){
	if (postvalue('fly')){
		echo -1;
		exit();
	}
	else {
		$_SESSION["message_edit"] = "<< "."Error occurred"." >>";
	}
}
/////////////////////////////////////////////////////////////
//init variables
/////////////////////////////////////////////////////////////
if(postvalue("editType")=="inline")
	$inlineedit = EDIT_INLINE;
elseif(postvalue("editType")==EDIT_POPUP)
	$inlineedit = EDIT_POPUP;
else
	$inlineedit = EDIT_SIMPLE;

$id = postvalue("id");
if(intval($id)==0)
	$id = 1;

$flyId = $id+1;
$xt = new Xtempl();

// assign an id
$xt->assign("id",$id);

$templatefile = ($inlineedit == EDIT_INLINE) ? "db_karyawan_inline_edit.htm" : "db_karyawan_edit.htm";

//array of params for classes
$params = array("pageType" => PAGE_EDIT,"id" => $id);


$params['tName'] = $strTableName;
$params['xt'] = &$xt;
$params['mode'] = $inlineedit;
$params['includes_js'] = $includes_js;
$params['includes_jsreq'] = $includes_jsreq;
$params['includes_css'] = $includes_css;
$params['locale_info'] = $locale_info;
$params['templatefile'] = $templatefile;
$params['pageEditLikeInline'] = ($inlineedit == EDIT_INLINE);
//Get array of tabs for edit page
$params['useTabsOnEdit'] = $gSettings->useTabsOnEdit();
if($params['useTabsOnEdit'])
	$params['arrEditTabs'] = $gSettings->getEditTabs();

$pageObject = new EditPage($params);

//	For ajax request 
if($_REQUEST["action"]!="")
{
	if($pageObject->lockingObj)
	{
		$arrkeys = explode("&",refine($_REQUEST["keys"]));
		foreach($arrkeys as $ind=>$val)
			$arrkeys[$ind]=urldecode($val);
		
		if($_REQUEST["action"]=="unlock")
		{
			$pageObject->lockingObj->UnlockRecord($strTableName,$arrkeys,$_REQUEST["sid"]);
			exit();	
		}
		else if($_REQUEST["action"]=="lockadmin" && (IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP))
		{
			$pageObject->lockingObj->UnlockAdmin($strTableName,$arrkeys,$_REQUEST["startEdit"]=="yes");
			if($_REQUEST["startEdit"]=="no")
				echo "unlock";
			else if($_REQUEST["startEdit"]=="yes")
				echo "lock";
			exit();	
		}
		else if($_REQUEST["action"]=="confirm")
		{
			if(!$pageObject->lockingObj->ConfirmLock($strTableName,$arrkeys,$message));
				echo $message;
			exit();	
		}
	}
	else
		exit();
}

$filename = $status = $message = $mesClass = $usermessage = $strWhereClause = $bodyonload = "";
$showValues = $showRawValues = $showFields = $showDetailKeys = $key = $next = $prev = array();
$HaveData = $enableCtrlsForEditing = true;
$error_happened = $readevalues = $IsSaved = false;

$auditObj = GetAuditObject($strTableName);

// SearchClause class stuff
$pageObject->searchClauseObj->parseRequest();
$_SESSION[$strTableName.'_advsearch'] = serialize($pageObject->searchClauseObj);

//Get detail table keys	
$detailKeys = $pageObject->detailKeysByM;


if($pageObject->lockingObj)
{
	$system_attrs = "style='display:none;'";
	$system_message = "";
}

if ($inlineedit!=EDIT_INLINE)
{
	// add button events if exist
	$pageObject->addButtonHandlers();
}

$url_page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1,12);

//	Before Process event
if($eventObj->exists("BeforeProcessEdit"))
	$eventObj->BeforeProcessEdit($conn, $pageObject);

$keys = array();
$skeys = "";
$savedKeys = array();
$keys["Id"] = urldecode(postvalue("editid1"));
$savedKeys["Id"] = urldecode(postvalue("editid1"));
$skeys.= rawurlencode(postvalue("editid1"))."&";

$pageObject->setKeys($keys);

if($skeys!="")
	$skeys = substr($skeys,0,-1);

//For show detail tables on master page edit
if($inlineedit!=EDIT_INLINE)
{
	$dpParams = array();
	if($pageObject->isShowDetailTables && !isMobile())
	{
		$ids = $id;
		$pageObject->jsSettings['tableSettings'][$strTableName]['dpParams'] = array('tableNames'=>$dpParams['strTableNames'], 'ids'=>$dpParams['ids']);
	}
}
/////////////////////////////////////////////////////////////
//	process entered data, read and save
/////////////////////////////////////////////////////////////

// proccess captcha
if ($inlineedit!=EDIT_INLINE)
	if($pageObject->captchaExists())
		$pageObject->doCaptchaCode();

if(@$_POST["a"] == "edited")
{
	$strWhereClause = whereAdd($strWhereClause,KeyWhere($keys));
		$oldValuesRead = false;	
	if($eventObj->exists("AfterEdit") || $eventObj->exists("BeforeEdit") || $auditObj || isTableGeoUpdatable($pageObject->cipherer->pSet)
		|| $globalEvents->exists("IsRecordEditable", $strTableName))
	{
		//	read old values
		$rsold = db_query($gQuery->gSQLWhere($strWhereClause), $conn);
		$dataold = $pageObject->cipherer->DecryptFetchedArray($rsold);
		$oldValuesRead = true;
	}
	if($globalEvents->exists("IsRecordEditable", $strTableName))
	{
		if(!$globalEvents->IsRecordEditable($dataold, true, $strTableName))
			return SecurityRedirect($inlineedit);
	}
	$evalues = $efilename_values = $blobfields = array();
	

//	processing NIK - begin
	$condition = 1;

	if($condition)
	{
		$control_NIK = $pageObject->getControl("NIK", $id);
		$control_NIK->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing NIK - end
//	processing Nama_Karyawan - begin
	$condition = 1;

	if($condition)
	{
		$control_Nama_Karyawan = $pageObject->getControl("Nama_Karyawan", $id);
		$control_Nama_Karyawan->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Nama_Karyawan - end
//	processing Sex - begin
	$condition = 1;

	if($condition)
	{
		$control_Sex = $pageObject->getControl("Sex", $id);
		$control_Sex->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Sex - end
//	processing POB - begin
	$condition = 1;

	if($condition)
	{
		$control_POB = $pageObject->getControl("POB", $id);
		$control_POB->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing POB - end
//	processing DOB - begin
	$condition = 1;

	if($condition)
	{
		$control_DOB = $pageObject->getControl("DOB", $id);
		$control_DOB->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing DOB - end
//	processing Tax_Status - begin
	$condition = 1;

	if($condition)
	{
		$control_Tax_Status = $pageObject->getControl("Tax_Status", $id);
		$control_Tax_Status->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Tax_Status - end
//	processing Address_Nama_Jalan - begin
	$condition = 1;

	if($condition)
	{
		$control_Address_Nama_Jalan = $pageObject->getControl("Address_Nama_Jalan", $id);
		$control_Address_Nama_Jalan->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Address_Nama_Jalan - end
//	processing Address_Nama_Desa - begin
	$condition = 1;

	if($condition)
	{
		$control_Address_Nama_Desa = $pageObject->getControl("Address_Nama_Desa", $id);
		$control_Address_Nama_Desa->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Address_Nama_Desa - end
//	processing Address_Nama_Kec - begin
	$condition = 1;

	if($condition)
	{
		$control_Address_Nama_Kec = $pageObject->getControl("Address_Nama_Kec", $id);
		$control_Address_Nama_Kec->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Address_Nama_Kec - end
//	processing Address_Nama_Kab - begin
	$condition = 1;

	if($condition)
	{
		$control_Address_Nama_Kab = $pageObject->getControl("Address_Nama_Kab", $id);
		$control_Address_Nama_Kab->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Address_Nama_Kab - end
//	processing Address_Nama_Prov - begin
	$condition = 1;

	if($condition)
	{
		$control_Address_Nama_Prov = $pageObject->getControl("Address_Nama_Prov", $id);
		$control_Address_Nama_Prov->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Address_Nama_Prov - end
//	processing Telp - begin
	$condition = 1;

	if($condition)
	{
		$control_Telp = $pageObject->getControl("Telp", $id);
		$control_Telp->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Telp - end
//	processing Position - begin
	$condition = 1;

	if($condition)
	{
		$control_Position = $pageObject->getControl("Position", $id);
		$control_Position->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Position - end
//	processing Classification - begin
	$condition = 1;

	if($condition)
	{
		$control_Classification = $pageObject->getControl("Classification", $id);
		$control_Classification->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Classification - end
//	processing Section - begin
	$condition = 1;

	if($condition)
	{
		$control_Section = $pageObject->getControl("Section", $id);
		$control_Section->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Section - end
//	processing Department - begin
	$condition = 1;

	if($condition)
	{
		$control_Department = $pageObject->getControl("Department", $id);
		$control_Department->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Department - end

	foreach($efilename_values as $ekey=>$value)
		$evalues[$ekey] = $value;
		
	if($pageObject->lockingObj)
	{
		$lockmessage = "";
		if(!$pageObject->lockingObj->ConfirmLock($strTableName,$savedKeys,$lockmessage))
		{
			$enableCtrlsForEditing = false;
			$system_attrs = "style='display:block;'";
			if($inlineedit == EDIT_INLINE)
			{
				if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
					$lockmessage = $pageObject->lockingObj->GetLockInfo($strTableName,$savedKeys,false,$id);
				
				$returnJSON['success'] = false;
				$returnJSON['message'] = $lockmessage;
				$returnJSON['enableCtrls'] = $enableCtrlsForEditing;
				$returnJSON['confirmTime'] = $pageObject->lockingObj->ConfirmTime;
				echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
				exit();
			}
			else
			{
				if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
					$system_message = $pageObject->lockingObj->GetLockInfo($strTableName,$savedKeys,true,$id);
				else
					$system_message = $lockmessage;
			}
			$status = "DECLINED";
			$readevalues = true;
		}
	}
	
	if($readevalues==false)
	{
	//	do event
		$retval = true;
		if($eventObj->exists("BeforeEdit"))
			$retval=$eventObj->BeforeEdit($evalues,$strWhereClause,$dataold,$keys,$usermessage,(bool)$inlineedit, $pageObject);
	
		if($retval && $pageObject->isCaptchaOk)
		{		
			if($inlineedit!=EDIT_INLINE)
				$_SESSION[$strTableName."_count_captcha"] = $_SESSION[$strTableName."_count_captcha"]+1;
		
			//set updated lat-lng values for all map fileds with 'UpdateLatLng' ticked	
            if(isTableGeoUpdatable($pageObject->cipherer->pSet)) {			
				setUpdatedLatLng($evalues, $pageObject->cipherer->pSet, $dataold);
			}	
			
			if(DoUpdateRecord($strOriginalTableName,$evalues,$blobfields,$strWhereClause,$id,$pageObject, $pageObject->cipherer))
			{
				$IsSaved = true;

			// Give possibility to all edit controls to clean their data				
			//	processing NIK - begin
							$condition = 1;
			
				if($condition)
				{
					$control_NIK->afterSuccessfulSave();
				}
	//	processing NIK - end
			//	processing Nama_Karyawan - begin
							$condition = 1;
			
				if($condition)
				{
					$control_Nama_Karyawan->afterSuccessfulSave();
				}
	//	processing Nama_Karyawan - end
			//	processing Sex - begin
							$condition = 1;
			
				if($condition)
				{
					$control_Sex->afterSuccessfulSave();
				}
	//	processing Sex - end
			//	processing POB - begin
							$condition = 1;
			
				if($condition)
				{
					$control_POB->afterSuccessfulSave();
				}
	//	processing POB - end
			//	processing DOB - begin
							$condition = 1;
			
				if($condition)
				{
					$control_DOB->afterSuccessfulSave();
				}
	//	processing DOB - end
			//	processing Tax_Status - begin
							$condition = 1;
			
				if($condition)
				{
					$control_Tax_Status->afterSuccessfulSave();
				}
	//	processing Tax_Status - end
			//	processing Address_Nama_Jalan - begin
							$condition = 1;
			
				if($condition)
				{
					$control_Address_Nama_Jalan->afterSuccessfulSave();
				}
	//	processing Address_Nama_Jalan - end
			//	processing Address_Nama_Desa - begin
							$condition = 1;
			
				if($condition)
				{
					$control_Address_Nama_Desa->afterSuccessfulSave();
				}
	//	processing Address_Nama_Desa - end
			//	processing Address_Nama_Kec - begin
							$condition = 1;
			
				if($condition)
				{
					$control_Address_Nama_Kec->afterSuccessfulSave();
				}
	//	processing Address_Nama_Kec - end
			//	processing Address_Nama_Kab - begin
							$condition = 1;
			
				if($condition)
				{
					$control_Address_Nama_Kab->afterSuccessfulSave();
				}
	//	processing Address_Nama_Kab - end
			//	processing Address_Nama_Prov - begin
							$condition = 1;
			
				if($condition)
				{
					$control_Address_Nama_Prov->afterSuccessfulSave();
				}
	//	processing Address_Nama_Prov - end
			//	processing Telp - begin
							$condition = 1;
			
				if($condition)
				{
					$control_Telp->afterSuccessfulSave();
				}
	//	processing Telp - end
			//	processing Position - begin
							$condition = 1;
			
				if($condition)
				{
					$control_Position->afterSuccessfulSave();
				}
	//	processing Position - end
			//	processing Classification - begin
							$condition = 1;
			
				if($condition)
				{
					$control_Classification->afterSuccessfulSave();
				}
	//	processing Classification - end
			//	processing Section - begin
							$condition = 1;
			
				if($condition)
				{
					$control_Section->afterSuccessfulSave();
				}
	//	processing Section - end
			//	processing Department - begin
							$condition = 1;
			
				if($condition)
				{
					$control_Department->afterSuccessfulSave();
				}
	//	processing Department - end
				
				//	after edit event
				if($pageObject->lockingObj && $inlineedit == EDIT_INLINE)
					$pageObject->lockingObj->UnlockRecord($strTableName,$savedKeys,"");
				if($auditObj || $eventObj->exists("AfterEdit"))
				{
					foreach($dataold as $idx=>$val)
					{
						if(!array_key_exists($idx,$evalues))
							$evalues[$idx] = $val;
					}
				}

				if($auditObj)
					$auditObj->LogEdit($strTableName,$evalues,$dataold,$keys);
				if($eventObj->exists("AfterEdit"))
					$eventObj->AfterEdit($evalues,KeyWhere($keys),$dataold,$keys,(bool)$inlineedit, $pageObject);
							
				$mesClass = "mes_ok";
			}
			elseif($inlineedit!=EDIT_INLINE)
				$mesClass = "mes_not";	
		}
		else
		{
			$message = $usermessage;
			$readevalues = true;
			$status = "DECLINED";
		}
	}
	if($readevalues)
		$keys = $savedKeys;
}
//else
{
	/////////////////////////
	//Locking recors
	/////////////////////////

	if($pageObject->lockingObj)
	{
		$enableCtrlsForEditing = $pageObject->lockingObj->LockRecord($strTableName,$keys);
		if(!$enableCtrlsForEditing)
		{
			if($inlineedit == EDIT_INLINE)
			{
				if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
					$lockmessage = $pageObject->lockingObj->GetLockInfo($strTableName,$keys,false,$id);
				else
					$lockmessage = $pageObject->lockingObj->LockUser;
				$returnJSON['success'] = false;
				$returnJSON['message'] = $lockmessage;
				$returnJSON['enableCtrls'] = $enableCtrlsForEditing;
				$returnJSON['confirmTime'] = $pageObject->lockingObj->ConfirmTime;
				echo my_json_encode($returnJSON);
				exit();
			}
			
			$system_attrs = "style='display:block;'";
			$system_message = $pageObject->lockingObj->LockUser;
			
			if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
			{
				$rb = $pageObject->lockingObj->GetLockInfo($strTableName,$keys,true,$id);
				if($rb!="")
					$system_message = $rb;
			}
		}
	}
}

if($pageObject->lockingObj && $inlineedit!=EDIT_INLINE)
	$pageObject->body["begin"] .='<div class="runner-locking" '.$system_attrs.'>'.$system_message.'</div>';

if($message)
	$message = "<div class='message ".$mesClass."'>".$message."</div>";

// PRG rule, to avoid POSTDATA resend
if ($IsSaved && no_output_done() && $inlineedit == EDIT_SIMPLE)
{
	// saving message
	$_SESSION["message_edit"] = ($message ? $message : "");
	// key get query
	$keyGetQ = "";
		$keyGetQ.="editid1=".rawurldecode($keys["Id"])."&";
	// cut last &
	$keyGetQ = substr($keyGetQ, 0, strlen($keyGetQ)-1);	
	// redirect
	header("Location: db_karyawan_".$pageObject->getPageType().".php?".$keyGetQ);
	// turned on output buffering, so we need to stop script
	exit();
}
// for PRG rule, to avoid POSTDATA resend. Saving mess in session
if ($inlineedit == EDIT_SIMPLE && isset($_SESSION["message_edit"]))
{
	$message = $_SESSION["message_edit"];
	unset($_SESSION["message_edit"]);
}


$pageObject->setKeys($keys);
$pageObject->readEditValues = $readevalues;
if($readevalues)
	$pageObject->editValues = $evalues;

//	read current values from the database
$data = $pageObject->getCurrentRecordInternal();
if(!$data)
{
	if($inlineedit == EDIT_SIMPLE)
	{
		header("Location: db_karyawan_list.php?a=return");
		exit();
	}
	else
		$data = array();
}

if($globalEvents->exists("IsRecordEditable", $strTableName))
{
	if(!$globalEvents->IsRecordEditable($data, true, $strTableName) && $inlineedit != EDIT_INLINE)
	{
		return SecurityRedirect($inlineedit);
	}
}


//global variable use in BuildEditControl function
//	show readonly fields

if($readevalues)
{
	$data["NIK"] = $evalues["NIK"];
	$data["Nama_Karyawan"] = $evalues["Nama_Karyawan"];
	$data["Sex"] = $evalues["Sex"];
	$data["POB"] = $evalues["POB"];
	$data["DOB"] = $evalues["DOB"];
	$data["Tax_Status"] = $evalues["Tax_Status"];
	$data["Address_Nama_Jalan"] = $evalues["Address_Nama_Jalan"];
	$data["Address_Nama_Desa"] = $evalues["Address_Nama_Desa"];
	$data["Address_Nama_Kec"] = $evalues["Address_Nama_Kec"];
	$data["Address_Nama_Kab"] = $evalues["Address_Nama_Kab"];
	$data["Address_Nama_Prov"] = $evalues["Address_Nama_Prov"];
	$data["Telp"] = $evalues["Telp"];
	$data["Position"] = $evalues["Position"];
	$data["Classification"] = $evalues["Classification"];
	$data["Section"] = $evalues["Section"];
	$data["Department"] = $evalues["Department"];
}

/////////////////////////////////////////////////////////////
//	assign values to $xt class, prepare page for displaying
/////////////////////////////////////////////////////////////
//Basic includes js files
$includes = "";
//javascript code
	
if($inlineedit != EDIT_INLINE)
{
	if($inlineedit == EDIT_SIMPLE)
	{
		$includes.= "<script language=\"JavaScript\" src=\"include/loadfirst.js\"></script>\r\n";
				$includes.="<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";
		
		if (!isMobile())
			$includes.= "<div id=\"search_suggest".$id."\"></div>\r\n";
			
		$pageObject->body["begin"].= $includes;
	}	

	if(!$pageObject->isAppearOnTabs("NIK"))
		$xt->assign("NIK_fieldblock",true);
	else
		$xt->assign("NIK_tabfieldblock",true);
	$xt->assign("NIK_label",true);
	if(isEnableSection508())
		$xt->assign_section("NIK_label","<label for=\"".GetInputElementId("NIK", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Nama_Karyawan"))
		$xt->assign("Nama_Karyawan_fieldblock",true);
	else
		$xt->assign("Nama_Karyawan_tabfieldblock",true);
	$xt->assign("Nama_Karyawan_label",true);
	if(isEnableSection508())
		$xt->assign_section("Nama_Karyawan_label","<label for=\"".GetInputElementId("Nama_Karyawan", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Sex"))
		$xt->assign("Sex_fieldblock",true);
	else
		$xt->assign("Sex_tabfieldblock",true);
	$xt->assign("Sex_label",true);
	if(isEnableSection508())
		$xt->assign_section("Sex_label","<label for=\"".GetInputElementId("Sex", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("POB"))
		$xt->assign("POB_fieldblock",true);
	else
		$xt->assign("POB_tabfieldblock",true);
	$xt->assign("POB_label",true);
	if(isEnableSection508())
		$xt->assign_section("POB_label","<label for=\"".GetInputElementId("POB", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("DOB"))
		$xt->assign("DOB_fieldblock",true);
	else
		$xt->assign("DOB_tabfieldblock",true);
	$xt->assign("DOB_label",true);
	if(isEnableSection508())
		$xt->assign_section("DOB_label","<label for=\"".GetInputElementId("DOB", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Tax_Status"))
		$xt->assign("Tax_Status_fieldblock",true);
	else
		$xt->assign("Tax_Status_tabfieldblock",true);
	$xt->assign("Tax_Status_label",true);
	if(isEnableSection508())
		$xt->assign_section("Tax_Status_label","<label for=\"".GetInputElementId("Tax_Status", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Address_Nama_Jalan"))
		$xt->assign("Address_Nama_Jalan_fieldblock",true);
	else
		$xt->assign("Address_Nama_Jalan_tabfieldblock",true);
	$xt->assign("Address_Nama_Jalan_label",true);
	if(isEnableSection508())
		$xt->assign_section("Address_Nama_Jalan_label","<label for=\"".GetInputElementId("Address_Nama_Jalan", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Address_Nama_Desa"))
		$xt->assign("Address_Nama_Desa_fieldblock",true);
	else
		$xt->assign("Address_Nama_Desa_tabfieldblock",true);
	$xt->assign("Address_Nama_Desa_label",true);
	if(isEnableSection508())
		$xt->assign_section("Address_Nama_Desa_label","<label for=\"".GetInputElementId("Address_Nama_Desa", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Address_Nama_Kec"))
		$xt->assign("Address_Nama_Kec_fieldblock",true);
	else
		$xt->assign("Address_Nama_Kec_tabfieldblock",true);
	$xt->assign("Address_Nama_Kec_label",true);
	if(isEnableSection508())
		$xt->assign_section("Address_Nama_Kec_label","<label for=\"".GetInputElementId("Address_Nama_Kec", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Address_Nama_Kab"))
		$xt->assign("Address_Nama_Kab_fieldblock",true);
	else
		$xt->assign("Address_Nama_Kab_tabfieldblock",true);
	$xt->assign("Address_Nama_Kab_label",true);
	if(isEnableSection508())
		$xt->assign_section("Address_Nama_Kab_label","<label for=\"".GetInputElementId("Address_Nama_Kab", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Address_Nama_Prov"))
		$xt->assign("Address_Nama_Prov_fieldblock",true);
	else
		$xt->assign("Address_Nama_Prov_tabfieldblock",true);
	$xt->assign("Address_Nama_Prov_label",true);
	if(isEnableSection508())
		$xt->assign_section("Address_Nama_Prov_label","<label for=\"".GetInputElementId("Address_Nama_Prov", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Telp"))
		$xt->assign("Telp_fieldblock",true);
	else
		$xt->assign("Telp_tabfieldblock",true);
	$xt->assign("Telp_label",true);
	if(isEnableSection508())
		$xt->assign_section("Telp_label","<label for=\"".GetInputElementId("Telp", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Position"))
		$xt->assign("Position_fieldblock",true);
	else
		$xt->assign("Position_tabfieldblock",true);
	$xt->assign("Position_label",true);
	if(isEnableSection508())
		$xt->assign_section("Position_label","<label for=\"".GetInputElementId("Position", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Classification"))
		$xt->assign("Classification_fieldblock",true);
	else
		$xt->assign("Classification_tabfieldblock",true);
	$xt->assign("Classification_label",true);
	if(isEnableSection508())
		$xt->assign_section("Classification_label","<label for=\"".GetInputElementId("Classification", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Section"))
		$xt->assign("Section_fieldblock",true);
	else
		$xt->assign("Section_tabfieldblock",true);
	$xt->assign("Section_label",true);
	if(isEnableSection508())
		$xt->assign_section("Section_label","<label for=\"".GetInputElementId("Section", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Department"))
		$xt->assign("Department_fieldblock",true);
	else
		$xt->assign("Department_tabfieldblock",true);
	$xt->assign("Department_label",true);
	if(isEnableSection508())
		$xt->assign_section("Department_label","<label for=\"".GetInputElementId("Department", $id, PAGE_EDIT)."\">","</label>");
		

	$xt->assign("show_key1", htmlspecialchars($pageObject->showDBValue("Id", $data)));
	//$xt->assign('editForm',true);
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Begin Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
	if(!@$_SESSION[$strTableName."_noNextPrev"] && $inlineedit == EDIT_SIMPLE)
	{
		$next = array();
		$prev = array();
		$pageObject->getNextPrevRecordKeys($data,"Edit",$next,$prev);
	}
	$nextlink = $prevlink = "";
	if(count($next))
	{
		$xt->assign("next_button",true);
				$nextlink.= "editid1=".htmlspecialchars(rawurlencode($next[1-1]));
		$xt->assign("nextbutton_attrs","id=\"nextButton".$id."\" align=\"absmiddle\"");
	}
	else 
		$xt->assign("next_button",false);
	if(count($prev))
	{
		$xt->assign("prev_button",true);
				$prevlink.= "editid1=".htmlspecialchars(rawurlencode($prev[1-1]));
		$xt->assign("prevbutton_attrs","id=\"prevButton".$id."\" align=\"absmiddle\"");
	}
	else 
		$xt->assign("prev_button",false);
	$xt->assign("resetbutton_attrs",'id="resetButton'.$id.'"');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//End Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
	if($inlineedit == EDIT_SIMPLE)
	{
		$xt->assign("back_button",true);
		$xt->assign("backbutton_attrs","id=\"backButton".$id."\"");
	}
	// onmouseover event, for changing focus. Needed to proper submit form
	//$onmouseover = "this.focus();";
	//$onmouseover = 'onmouseover="'.$onmouseover.'"';
	
	$xt->assign("save_button",true);
	if(!$enableCtrlsForEditing)
		$xt->assign("savebutton_attrs", "id=\"saveButton".$id."\" type=\"disabled\" ");
	else
		$xt->assign("savebutton_attrs", "id=\"saveButton".$id."\"");
		
	$xt->assign("reset_button",true);

}

$xt->assign("message_block",true);
$xt->assign("message",$message);
if(!strlen($message))
{
	$xt->displayBrickHidden("message");
}
/////////////////////////////////////////////////////////////
//process readonly and auto-update fields
/////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////
//	return new data to the List page or report an error
/////////////////////////////////////////////////////////////
if (postvalue("a")=="edited" && ($inlineedit == EDIT_INLINE || $inlineedit == EDIT_POPUP))
{
	if(!$data)
	{
		$data = $evalues;
		$HaveData = false;
	}
	//Preparation   view values

//	detail tables

	$keylink = "";
	$keylink.= "&key1=".htmlspecialchars(rawurlencode(@$data["Id"]));


//	Id - 
	$value = $pageObject->showDBValue("Id", $data, $keylink);
	$showValues["Id"] = $value;
	$showFields[] = "Id";
		$showRawValues["Id"] = substr($data["Id"],0,100);

//	NIK - 
	$value = $pageObject->showDBValue("NIK", $data, $keylink);
	$showValues["NIK"] = $value;
	$showFields[] = "NIK";
		$showRawValues["NIK"] = substr($data["NIK"],0,100);

//	Nama_Karyawan - 
	$value = $pageObject->showDBValue("Nama_Karyawan", $data, $keylink);
	$showValues["Nama_Karyawan"] = $value;
	$showFields[] = "Nama_Karyawan";
		$showRawValues["Nama_Karyawan"] = substr($data["Nama_Karyawan"],0,100);

//	Sex - 
	$value = $pageObject->showDBValue("Sex", $data, $keylink);
	$showValues["Sex"] = $value;
	$showFields[] = "Sex";
		$showRawValues["Sex"] = substr($data["Sex"],0,100);

//	POB - 
	$value = $pageObject->showDBValue("POB", $data, $keylink);
	$showValues["POB"] = $value;
	$showFields[] = "POB";
		$showRawValues["POB"] = substr($data["POB"],0,100);

//	DOB - Short Date
	$value = $pageObject->showDBValue("DOB", $data, $keylink);
	$showValues["DOB"] = $value;
	$showFields[] = "DOB";
		$showRawValues["DOB"] = substr($data["DOB"],0,100);

//	Tax_Status - 
	$value = $pageObject->showDBValue("Tax_Status", $data, $keylink);
	$showValues["Tax_Status"] = $value;
	$showFields[] = "Tax_Status";
		$showRawValues["Tax_Status"] = substr($data["Tax_Status"],0,100);

//	Address_Nama_Jalan - 
	$value = $pageObject->showDBValue("Address_Nama_Jalan", $data, $keylink);
	$showValues["Address_Nama_Jalan"] = $value;
	$showFields[] = "Address_Nama_Jalan";
		$showRawValues["Address_Nama_Jalan"] = substr($data["Address_Nama_Jalan"],0,100);

//	Address_Nama_Desa - 
	$value = $pageObject->showDBValue("Address_Nama_Desa", $data, $keylink);
	$showValues["Address_Nama_Desa"] = $value;
	$showFields[] = "Address_Nama_Desa";
		$showRawValues["Address_Nama_Desa"] = substr($data["Address_Nama_Desa"],0,100);

//	Address_Nama_Kec - 
	$value = $pageObject->showDBValue("Address_Nama_Kec", $data, $keylink);
	$showValues["Address_Nama_Kec"] = $value;
	$showFields[] = "Address_Nama_Kec";
		$showRawValues["Address_Nama_Kec"] = substr($data["Address_Nama_Kec"],0,100);

//	Address_Nama_Kab - 
	$value = $pageObject->showDBValue("Address_Nama_Kab", $data, $keylink);
	$showValues["Address_Nama_Kab"] = $value;
	$showFields[] = "Address_Nama_Kab";
		$showRawValues["Address_Nama_Kab"] = substr($data["Address_Nama_Kab"],0,100);

//	Address_Nama_Prov - 
	$value = $pageObject->showDBValue("Address_Nama_Prov", $data, $keylink);
	$showValues["Address_Nama_Prov"] = $value;
	$showFields[] = "Address_Nama_Prov";
		$showRawValues["Address_Nama_Prov"] = substr($data["Address_Nama_Prov"],0,100);

//	Telp - 
	$value = $pageObject->showDBValue("Telp", $data, $keylink);
	$showValues["Telp"] = $value;
	$showFields[] = "Telp";
		$showRawValues["Telp"] = substr($data["Telp"],0,100);

//	Position - 
	$value = $pageObject->showDBValue("Position", $data, $keylink);
	$showValues["Position"] = $value;
	$showFields[] = "Position";
		$showRawValues["Position"] = substr($data["Position"],0,100);

//	Classification - 
	$value = $pageObject->showDBValue("Classification", $data, $keylink);
	$showValues["Classification"] = $value;
	$showFields[] = "Classification";
		$showRawValues["Classification"] = substr($data["Classification"],0,100);

//	Section - 
	$value = $pageObject->showDBValue("Section", $data, $keylink);
	$showValues["Section"] = $value;
	$showFields[] = "Section";
		$showRawValues["Section"] = substr($data["Section"],0,100);

//	Department - 
	$value = $pageObject->showDBValue("Department", $data, $keylink);
	$showValues["Department"] = $value;
	$showFields[] = "Department";
		$showRawValues["Department"] = substr($data["Department"],0,100);
/////////////////////////////////////////////////////////////
//	start inline output
/////////////////////////////////////////////////////////////
	
	if($IsSaved)
	{
		if($pageObject->lockingObj)
			$pageObject->lockingObj->UnlockRecord($strTableName,$keys,"");
		
		$returnJSON['success'] = true;
		$returnJSON['keys'] = $pageObject->jsKeys;
		$returnJSON['keyFields'] = $pageObject->keyFields;
		$returnJSON['vals'] = $showValues;
		$returnJSON['fields'] = $showFields;
		$returnJSON['rawVals'] = $showRawValues;
		$returnJSON['detKeys'] = $showDetailKeys;
		$returnJSON['userMess'] = $usermessage;
		$returnJSON['hrefs'] = $pageObject->buildDetailGridLinks($showDetailKeys);
		
		if($inlineedit==EDIT_POPUP && isset($_SESSION[$strTableName."_count_captcha"]) || $_SESSION[$strTableName."_count_captcha"]>0 || $_SESSION[$strTableName."_count_captcha"]<5)
			$returnJSON['hideCaptcha'] = true;
			
		if($globalEvents->exists("IsRecordEditable", $strTableName))
		{
			if(!$globalEvents->IsRecordEditable($showRawValues, true, $strTableName))
				$returnJSON['nonEditable'] = true;
		}
	}
	else
	{
		$returnJSON['success'] = false;
		$returnJSON['message'] = $message;
		
		if($pageObject->lockingObj)
			$returnJSON['lockMessage'] = $system_message;
		
		if($inlineedit == EDIT_POPUP && !$pageObject->isCaptchaOk)
			$returnJSON['captcha'] = false;
	}
	echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
	exit();
} 
/////////////////////////////////////////////////////////////
//	prepare Edit Controls
/////////////////////////////////////////////////////////////
//	validation stuff
$regex = '';
$regexmessage = '';
$regextype = '';
$control = array();

foreach($pageObject->editFields as $fName)
{
	$gfName = GoodFieldName($fName);
	$controls = array('controls'=>array());
	if (!$detailKeys || !in_array($fName, $detailKeys))
	{
		$control[$gfName] = array();
		$control[$gfName]["func"]="xt_buildeditcontrol";
		$control[$gfName]["params"] = array();
		$control[$gfName]["params"]["id"] = $id;
		$control[$gfName]["params"]["ptype"] = PAGE_EDIT;
		$control[$gfName]["params"]["field"] = $fName;
		if(!IsNumberType($pageObject->pSet->getFieldType($fName)) || is_null(@$data[$fName]))
			$control[$gfName]["params"]["value"] = @$data[$fName];
		else
		{
			$control[$gfName]["params"]["value"] = str_replace(".",$locale_info["LOCALE_SDECIMAL"],@$data[$fName]);
		}
		$control[$gfName]["params"]["pageObj"] = $pageObject;
		
		//	Begin Add validation
		$arrValidate = $pageObject->pSet->getValidation($fName);
		$control[$gfName]["params"]["validate"] = $arrValidate;
		//	End Add validation	
		$additionalCtrlParams = array();
		$additionalCtrlParams["disabled"] = !$enableCtrlsForEditing;
		$control[$gfName]["params"]["additionalCtrlParams"] = $additionalCtrlParams;
	}
	$controls["controls"]['ctrlInd'] = 0;
	$controls["controls"]['id'] = $id;
	$controls["controls"]['fieldName'] = $fName;
	
	if($inlineedit == EDIT_INLINE)
	{
		if(!$detailKeys || !in_array($fName, $detailKeys))
			$control[$gfName]["params"]["mode"]="inline_edit";
		$controls["controls"]['mode'] = "inline_edit";
	}
	else{
			if (!$detailKeys || !in_array($fName, $detailKeys))
				$control[$gfName]["params"]["mode"] = "edit";
			$controls["controls"]['mode'] = "edit";
		}
																	
	if(!$detailKeys || !in_array($fName, $detailKeys))
		$xt->assignbyref($gfName."_editcontrol",$control[$gfName]);
	elseif($detailKeys && in_array($fName, $detailKeys))
		$controls["controls"]['value'] = @$data[$fName];
		
	// category control field
	$strCategoryControl = $pageObject->isDependOnField($fName);
	
	if($strCategoryControl!==false && in_array($strCategoryControl, $pageObject->editFields))
		$vals = array($fName => @$data[$fName],$strCategoryControl => @$data[$strCategoryControl]);
	else
		$vals = array($fName => @$data[$fName]);
		
	$preload = $pageObject->fillPreload($fName, $vals);
	if($preload!==false)
		$controls["controls"]['preloadData'] = $preload;
	
	$pageObject->fillControlsMap($controls);
	
	//fill field tool tips
	$pageObject->fillFieldToolTips($fName);
	
	// fill special settings for timepicker
	if($pageObject->pSet->getEditFormat($fName) == 'Time')	
		$pageObject->fillTimePickSettings($fName, $data[$fName]);
	
	if($pageObject->pSet->getViewFormat($fName) == FORMAT_MAP)	
		$pageObject->googleMapCfg['isUseGoogleMap'] = true;
		
	if($detailKeys && in_array($fName, $detailKeys) && array_key_exists($fName, $data))
	{
		$value = $pageObject->showDBValue($fName, $data);
		
		$xt->assign($gfName."_editcontrol",$value);
	}
}
//fill tab groups name and sections name to controls
$pageObject->fillCntrlTabGroups();

$pageObject->jsSettings['tableSettings'][$strTableName]["keys"] = $pageObject->jsKeys;
$pageObject->jsSettings['tableSettings'][$strTableName]['keyFields'] = $pageObject->keyFields;
$pageObject->jsSettings['tableSettings'][$strTableName]["prevKeys"] = $prev;
$pageObject->jsSettings['tableSettings'][$strTableName]["nextKeys"] = $next; 
if($pageObject->lockingObj)
{
	$pageObject->jsSettings['tableSettings'][$strTableName]["sKeys"] = $skeys;
	$pageObject->jsSettings['tableSettings'][$strTableName]["enableCtrls"] = $enableCtrlsForEditing;
	$pageObject->jsSettings['tableSettings'][$strTableName]["confirmTime"] = $pageObject->lockingObj->ConfirmTime;
}

/////////////////////////////////////////////////////////////
if($pageObject->isShowDetailTables && $inlineedit!=EDIT_INLINE && !isMobile())
{
	if(count($dpParams['ids']))
	{
		include('classes/listpage.php');
		include('classes/listpage_embed.php');
		include('classes/listpage_dpinline.php');
		$xt->assign("detail_tables",true);	
	}
	
	$dControlsMap = array();
	$dViewControlsMap = array();
	$flyId = $ids+1;
	
	for($d=0;$d<count($dpParams['ids']);$d++)
	{
		$options = array();
		//array of params for classes
		$options["mode"] = LIST_DETAILS;
		$options["pageType"] = PAGE_LIST;
		$options["masterPageType"] = PAGE_EDIT;
		$options["mainMasterPageType"] = PAGE_EDIT;
		$options['masterTable'] = "db_karyawan";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
		
		if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search")){
			$strTableName = "db_karyawan";
			continue;
		}
		
		include_once("include/".GetTableURL($strTableName)."_settings.php");
		
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
		$options['flyId'] = $flyId++;
		$masterKeys = array();
		$mkr = 1;
		
		foreach($mKeys[$strTableName] as $mk){
			$options['masterKeysReq'][$mkr] = $data[$mk];
			$masterKeys['masterKey'.$mkr] = $data[$mk];
			$mkr++;
		}
		
		$listPageObject = ListPage::createListPage($strTableName, $options);
		
		// prepare code
		$listPageObject->prepareForBuildPage();
		
		// show page
		if($listPageObject->isDispGrid())
		{
			//set page events
			foreach($listPageObject->eventsObject->events as $event => $name)
				$listPageObject->xt->assign_event($event, $listPageObject->eventsObject, $event, array());
			
			//add detail settings to master settings
			$listPageObject->addControlsJSAndCSS();
			$listPageObject->fillSetCntrlMaps();
			
			$pageObject->jsSettings['tableSettings'][$strTableName]	= $listPageObject->jsSettings['tableSettings'][$strTableName];
			
			foreach($listPageObject->jsSettings["global"]["shortTNames"] as $tName => $shortTName){
				$pageObject->settingsMap["globalSettings"]["shortTNames"][$tName] = $shortTName;
			}
			
			$dControlsMap[$strTableName] = $listPageObject->controlsMap;
			$dControlsMap[$strTableName]['masterKeys'] = $masterKeys;
			$dViewControlsMap[$strTableName] = $listPageObject->viewControlsMap;
			
			//Add detail's js files to master's files
			$pageObject->copyAllJSFiles($listPageObject->grabAllJSFiles());
			
			//Add detail's css files to master's files
			$pageObject->copyAllCSSFiles($listPageObject->grabAllCSSFiles());
			
			$xtParams = array("method"=>'showPage', "params"=> false);
			$xtParams['object'] = $listPageObject;
			$xt->assign("displayDetailTable_".GoodFieldName($listPageObject->tName), $xtParams);
			
			$pageObject->controlsMap['dpTablesParams'][] = array('tName'=>$strTableName, 'id'=>$options['id']);
		}
		$flyId = $listPageObject->recId+1;
	}
	$pageObject->controlsMap['dControlsMap'] = $dControlsMap;
	$pageObject->viewControlsMap['dViewControlsMap'] = $dViewControlsMap; 
	$strTableName = "db_karyawan";
}
/////////////////////////////////////////////////////////////
//fill jsSettings and ControlsHTMLMap
$pageObject->flyId = $flyId;
$pageObject->fillSetCntrlMaps();

$pageObject->addCommonJs();

//For mobile version in apple device

if($inlineedit == EDIT_SIMPLE)
{
	// assign body end
	$pageObject->body['end'] = array();
	$pageObject->body['end']["method"] = "assignBodyEnd";
	$pageObject->body['end']["object"] = &$pageObject;
	$xt->assign("body", $pageObject->body);
	$xt->assign("flybody",true);
}

if($inlineedit == EDIT_POPUP){
	$xt->assign("footer",false);
	$xt->assign("header",false);
	$xt->assign("body",$pageObject->body);
}

$xt->assign("style_block",true);

$pageObject->xt->assign("legend", true);

$viewlink = "";
$viewkeys = array();
	$viewkeys["editid1"] = postvalue("editid1");
foreach($viewkeys as $key => $val)
{
	if($viewlink)
		$viewlink.="&";
	$viewlink.=$key."=".$val;
}
$xt->assign("viewlink_attrs","id=\"viewButton".$id."\" name=\"viewButton".$id."\" onclick=\"window.location.href='db_karyawan_view.php?".$viewlink."'\"");
if(CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search") && $inlineedit == EDIT_SIMPLE)
	$xt->assign("view_button",true);
else
	$xt->assign("view_button",false);

/////////////////////////////////////////////////////////////
//display the page
/////////////////////////////////////////////////////////////
if($eventObj->exists("BeforeShowEdit"))
	$eventObj->BeforeShowEdit($xt,$templatefile,$data, $pageObject);

if($inlineedit != EDIT_SIMPLE)
{
	$returnJSON['controlsMap'] = $pageObject->controlsHTMLMap;
	$returnJSON['viewControlsMap'] = $pageObject->viewControlsHTMLMap;
	$returnJSON['settings'] = $pageObject->jsSettings;	
}
	
if($inlineedit == EDIT_POPUP || $inlineedit == EDIT_INLINE)
{
	if($globalEvents->exists("IsRecordEditable", $strTableName))
	{
		if(!$globalEvents->IsRecordEditable($data, true, $strTableName))
			return SecurityRedirect($inlineedit);
	}
}
if($inlineedit == EDIT_POPUP)
{
	$xt->load_template($templatefile);
	$returnJSON['html'] = $xt->fetch_loaded('style_block').$xt->fetch_loaded('body');
	if(count($pageObject->includes_css))
		$returnJSON['CSSFiles'] = array_unique($pageObject->includes_css);
	if(count($pageObject->includes_cssIE))
		$returnJSON['CSSFilesIE'] = array_unique($pageObject->includes_cssIE);
	$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
	$returnJSON['idStartFrom'] = $flyId + 1;
	echo (my_json_encode($returnJSON)); 
}
elseif($inlineedit == EDIT_INLINE)
{
	$xt->load_template($templatefile);
	$returnJSON["html"] = array();
	foreach($pageObject->editFields as $fName)
	{
		if($detailKeys && in_array($fName, $detailKeys))
			continue;
		$returnJSON["html"][$fName] = $xt->fetchVar(GoodFieldName($fName)."_editcontrol");
	}
	$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
	$returnJSON["additionalCSS"] = $pageObject->grabAllCSSFiles();
	echo (my_json_encode($returnJSON)); 
}
else
	$xt->display($templatefile);
	
function SecurityRedirect($inlineedit)
{
	if($inlineedit == EDIT_INLINE)
	{
		echo my_json_encode(array("success" => false, "message" => "The record is not editable"));
		return;
	}
	
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: menu.php?message=expired");	
}
?>
