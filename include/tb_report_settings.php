<?php
require_once(getabspath("classes/cipherer.php"));
$tdatatb_report = array();
	$tdatatb_report[".NumberOfChars"] = 80; 
	$tdatatb_report[".ShortName"] = "tb_report";
	$tdatatb_report[".OwnerID"] = "";
	$tdatatb_report[".OriginalTable"] = "tb_report";

//	field labels
$fieldLabelstb_report = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstb_report["English"] = array();
	$fieldToolTipstb_report["English"] = array();
	$fieldLabelstb_report["English"]["nip"] = "NIP";
	$fieldToolTipstb_report["English"]["nip"] = "";
	$fieldLabelstb_report["English"]["nama"] = "NAMA";
	$fieldToolTipstb_report["English"]["nama"] = "";
	$fieldLabelstb_report["English"]["dept"] = "DEPARTEMEN";
	$fieldToolTipstb_report["English"]["dept"] = "";
	$fieldLabelstb_report["English"]["ta"] = "TRAVEL ALLOWANCE";
	$fieldToolTipstb_report["English"]["ta"] = "";
	$fieldLabelstb_report["English"]["medical"] = "MEDICAL";
	$fieldToolTipstb_report["English"]["medical"] = "";
	$fieldLabelstb_report["English"]["tugas"] = "TUGAS";
	$fieldToolTipstb_report["English"]["tugas"] = "";
	$fieldLabelstb_report["English"]["meal"] = "MEAL";
	$fieldToolTipstb_report["English"]["meal"] = "";
	$fieldLabelstb_report["English"]["sumbangan"] = "SUMBANGAN";
	$fieldToolTipstb_report["English"]["sumbangan"] = "";
	$fieldLabelstb_report["English"]["total"] = "TOTAL";
	$fieldToolTipstb_report["English"]["total"] = "";
	$fieldLabelstb_report["English"]["nomer"] = "NO";
	$fieldToolTipstb_report["English"]["nomer"] = "";
	if (count($fieldToolTipstb_report["English"]))
		$tdatatb_report[".isUseToolTips"] = true;
}
	
	
	$tdatatb_report[".NCSearch"] = true;



$tdatatb_report[".shortTableName"] = "tb_report";
$tdatatb_report[".nSecOptions"] = 0;
$tdatatb_report[".recsPerRowList"] = 1;
$tdatatb_report[".mainTableOwnerID"] = "";
$tdatatb_report[".moveNext"] = 1;
$tdatatb_report[".nType"] = 0;

$tdatatb_report[".strOriginalTableName"] = "tb_report";




$tdatatb_report[".showAddInPopup"] = false;

$tdatatb_report[".showEditInPopup"] = false;

$tdatatb_report[".showViewInPopup"] = false;

$tdatatb_report[".fieldsForRegister"] = array();

$tdatatb_report[".listAjax"] = false;

	$tdatatb_report[".audit"] = false;

	$tdatatb_report[".locking"] = false;

$tdatatb_report[".listIcons"] = true;

$tdatatb_report[".exportTo"] = true;

$tdatatb_report[".printFriendly"] = true;


$tdatatb_report[".showSimpleSearchOptions"] = false;

$tdatatb_report[".showSearchPanel"] = true;

if (isMobile())
	$tdatatb_report[".isUseAjaxSuggest"] = false;
else 
	$tdatatb_report[".isUseAjaxSuggest"] = true;

$tdatatb_report[".rowHighlite"] = true;

// button handlers file names

$tdatatb_report[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatb_report[".isUseTimeForSearch"] = false;




$tdatatb_report[".allSearchFields"] = array();

$tdatatb_report[".allSearchFields"][] = "nip";
$tdatatb_report[".allSearchFields"][] = "nama";
$tdatatb_report[".allSearchFields"][] = "dept";

$tdatatb_report[".googleLikeFields"][] = "nomer";
$tdatatb_report[".googleLikeFields"][] = "nip";
$tdatatb_report[".googleLikeFields"][] = "nama";
$tdatatb_report[".googleLikeFields"][] = "dept";
$tdatatb_report[".googleLikeFields"][] = "ta";
$tdatatb_report[".googleLikeFields"][] = "medical";
$tdatatb_report[".googleLikeFields"][] = "tugas";
$tdatatb_report[".googleLikeFields"][] = "meal";
$tdatatb_report[".googleLikeFields"][] = "sumbangan";
$tdatatb_report[".googleLikeFields"][] = "total";


$tdatatb_report[".advSearchFields"][] = "nip";
$tdatatb_report[".advSearchFields"][] = "nama";
$tdatatb_report[".advSearchFields"][] = "dept";

$tdatatb_report[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatatb_report[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatb_report[".strOrderBy"] = $tstrOrderBy;

$tdatatb_report[".orderindexes"] = array();

$tdatatb_report[".sqlHead"] = "SELECT (@row:=@row+1) AS nomer,  nip,  nama,  dept,  ta,  medical,  tugas,  meal,  sumbangan,  total";
$tdatatb_report[".sqlFrom"] = "FROM tb_report,(SELECT @row:=0) AS row_count";
$tdatatb_report[".sqlWhereExpr"] = "";
$tdatatb_report[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatb_report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatb_report[".arrGroupsPerPage"] = $arrGPP;

$tableKeystb_report = array();
$tdatatb_report[".Keys"] = $tableKeystb_report;

$tdatatb_report[".listFields"] = array();
$tdatatb_report[".listFields"][] = "nomer";
$tdatatb_report[".listFields"][] = "nip";
$tdatatb_report[".listFields"][] = "nama";
$tdatatb_report[".listFields"][] = "dept";
$tdatatb_report[".listFields"][] = "ta";
$tdatatb_report[".listFields"][] = "medical";
$tdatatb_report[".listFields"][] = "tugas";
$tdatatb_report[".listFields"][] = "meal";
$tdatatb_report[".listFields"][] = "sumbangan";
$tdatatb_report[".listFields"][] = "total";

$tdatatb_report[".viewFields"] = array();

$tdatatb_report[".addFields"] = array();

$tdatatb_report[".inlineAddFields"] = array();

$tdatatb_report[".editFields"] = array();

$tdatatb_report[".inlineEditFields"] = array();

$tdatatb_report[".exportFields"] = array();
$tdatatb_report[".exportFields"][] = "nomer";
$tdatatb_report[".exportFields"][] = "nip";
$tdatatb_report[".exportFields"][] = "nama";
$tdatatb_report[".exportFields"][] = "dept";
$tdatatb_report[".exportFields"][] = "ta";
$tdatatb_report[".exportFields"][] = "medical";
$tdatatb_report[".exportFields"][] = "tugas";
$tdatatb_report[".exportFields"][] = "meal";
$tdatatb_report[".exportFields"][] = "sumbangan";
$tdatatb_report[".exportFields"][] = "total";

$tdatatb_report[".printFields"] = array();
$tdatatb_report[".printFields"][] = "nomer";

//	nomer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "nomer";
	$fdata["GoodName"] = "nomer";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "NO"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "nomer"; 
		$fdata["FullName"] = "(@row:=@row+1)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_report["nomer"] = $fdata;
//	nip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nip";
	$fdata["GoodName"] = "nip";
	$fdata["ownerTable"] = "tb_report";
	$fdata["Label"] = "NIP"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "nip"; 
		$fdata["FullName"] = "nip";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_report["nip"] = $fdata;
//	nama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nama";
	$fdata["GoodName"] = "nama";
	$fdata["ownerTable"] = "tb_report";
	$fdata["Label"] = "NAMA"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "nama"; 
		$fdata["FullName"] = "nama";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=40";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_report["nama"] = $fdata;
//	dept
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "dept";
	$fdata["GoodName"] = "dept";
	$fdata["ownerTable"] = "tb_report";
	$fdata["Label"] = "DEPARTEMEN"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "dept"; 
		$fdata["FullName"] = "dept";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_report["dept"] = $fdata;
//	ta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ta";
	$fdata["GoodName"] = "ta";
	$fdata["ownerTable"] = "tb_report";
	$fdata["Label"] = "TRAVEL ALLOWANCE"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ta"; 
		$fdata["FullName"] = "ta";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 0;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_report["ta"] = $fdata;
//	medical
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "medical";
	$fdata["GoodName"] = "medical";
	$fdata["ownerTable"] = "tb_report";
	$fdata["Label"] = "MEDICAL"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "medical"; 
		$fdata["FullName"] = "medical";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 0;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_report["medical"] = $fdata;
//	tugas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "tugas";
	$fdata["GoodName"] = "tugas";
	$fdata["ownerTable"] = "tb_report";
	$fdata["Label"] = "TUGAS"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "tugas"; 
		$fdata["FullName"] = "tugas";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 0;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_report["tugas"] = $fdata;
//	meal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "meal";
	$fdata["GoodName"] = "meal";
	$fdata["ownerTable"] = "tb_report";
	$fdata["Label"] = "MEAL"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "meal"; 
		$fdata["FullName"] = "meal";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 0;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_report["meal"] = $fdata;
//	sumbangan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "sumbangan";
	$fdata["GoodName"] = "sumbangan";
	$fdata["ownerTable"] = "tb_report";
	$fdata["Label"] = "SUMBANGAN"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "sumbangan"; 
		$fdata["FullName"] = "sumbangan";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 0;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_report["sumbangan"] = $fdata;
//	total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "total";
	$fdata["GoodName"] = "total";
	$fdata["ownerTable"] = "tb_report";
	$fdata["Label"] = "TOTAL"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "total"; 
		$fdata["FullName"] = "total";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 0;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_report["total"] = $fdata;

	
$tables_data["tb_report"]=&$tdatatb_report;
$field_labels["tb_report"] = &$fieldLabelstb_report;
$fieldToolTips["tb_report"] = &$fieldToolTipstb_report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tb_report"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["tb_report"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_tb_report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "(@row:=@row+1) AS nomer,  nip,  nama,  dept,  ta,  medical,  tugas,  meal,  sumbangan,  total";
$proto0["m_strFrom"] = "FROM tb_report,(SELECT @row:=0) AS row_count";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = "0";
$proto1["m_inBrackets"] = "0";
$proto1["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = "0";
$proto3["m_inBrackets"] = "0";
$proto3["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(@row:=@row+1)"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "nomer";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "nip",
	"m_strTable" => "tb_report"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "nama",
	"m_strTable" => "tb_report"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "dept",
	"m_strTable" => "tb_report"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "ta",
	"m_strTable" => "tb_report"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "medical",
	"m_strTable" => "tb_report"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "tugas",
	"m_strTable" => "tb_report"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "meal",
	"m_strTable" => "tb_report"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "sumbangan",
	"m_strTable" => "tb_report"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "total",
	"m_strTable" => "tb_report"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto25=array();
$proto25["m_link"] = "SQLL_MAIN";
			$proto26=array();
$proto26["m_strName"] = "tb_report";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "id";
$proto26["m_columns"][] = "nip";
$proto26["m_columns"][] = "nama";
$proto26["m_columns"][] = "dept";
$proto26["m_columns"][] = "ta";
$proto26["m_columns"][] = "medical";
$proto26["m_columns"][] = "tugas";
$proto26["m_columns"][] = "meal";
$proto26["m_columns"][] = "sumbangan";
$proto26["m_columns"][] = "total";
$proto26["m_columns"][] = "tahun";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_alias"] = "";
$proto27=array();
$proto27["m_sql"] = "";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "";
$proto27["m_havingmode"] = "0";
$proto27["m_inBrackets"] = "0";
$proto27["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto27);

$proto25["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto25);

$proto0["m_fromlist"][]=$obj;
												$proto29=array();
$proto29["m_link"] = "SQLL_CROSSJOIN";
			$proto30=array();
$proto30["m_strHead"] = "SELECT";
$proto30["m_strFieldList"] = "@row:=0";
$proto30["m_strFrom"] = "";
$proto30["m_strWhere"] = "";
$proto30["m_strOrderBy"] = "";
$proto30["m_strTail"] = "";
$proto30["cipherer"] = null;
$proto31=array();
$proto31["m_sql"] = "";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "";
$proto31["m_havingmode"] = "0";
$proto31["m_inBrackets"] = "0";
$proto31["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto31);

$proto30["m_where"] = $obj;
$proto33=array();
$proto33["m_sql"] = "";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "";
$proto33["m_havingmode"] = "0";
$proto33["m_inBrackets"] = "0";
$proto33["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto33);

$proto30["m_having"] = $obj;
$proto30["m_fieldlist"] = array();
						$proto35=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "@row:=0"
));

$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto30["m_fieldlist"][]=$obj;
$proto30["m_fromlist"] = array();
$proto30["m_groupby"] = array();
$proto30["m_orderby"] = array();
$obj = new SQLQuery($proto30);

$proto29["m_table"] = $obj;
$proto29["m_alias"] = "row_count";
$proto37=array();
$proto37["m_sql"] = "";
$proto37["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto37["m_column"]=$obj;
$proto37["m_contained"] = array();
$proto37["m_strCase"] = "";
$proto37["m_havingmode"] = "0";
$proto37["m_inBrackets"] = "0";
$proto37["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto37);

$proto29["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto29);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tb_report = createSqlQuery_tb_report();
										$tdatatb_report[".sqlquery"] = $queryData_tb_report;
	
if(isset($tdatatb_report["field2"])){
	$tdatatb_report["field2"]["LookupTable"] = "carscars_view";
	$tdatatb_report["field2"]["LookupOrderBy"] = "name";
	$tdatatb_report["field2"]["LookupType"] = 4;
	$tdatatb_report["field2"]["LinkField"] = "email";
	$tdatatb_report["field2"]["DisplayField"] = "name";
	$tdatatb_report[".hasCustomViewField"] = true;
}

include_once(getabspath("include/tb_report_events.php"));
$tableEvents["tb_report"] = new eventclass_tb_report;
$tdatatb_report[".hasEvents"] = true;

$cipherer = new RunnerCipherer("tb_report");

?>