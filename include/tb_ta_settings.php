<?php
require_once(getabspath("classes/cipherer.php"));
$tdatatb_ta = array();
	$tdatatb_ta[".NumberOfChars"] = 80; 
	$tdatatb_ta[".ShortName"] = "tb_ta";
	$tdatatb_ta[".OwnerID"] = "";
	$tdatatb_ta[".OriginalTable"] = "tb_ta";

//	field labels
$fieldLabelstb_ta = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstb_ta["English"] = array();
	$fieldToolTipstb_ta["English"] = array();
	$fieldLabelstb_ta["English"]["id"] = "Id";
	$fieldToolTipstb_ta["English"]["id"] = "";
	$fieldLabelstb_ta["English"]["nip"] = "NIP";
	$fieldToolTipstb_ta["English"]["nip"] = "";
	$fieldLabelstb_ta["English"]["nama"] = "NAMA";
	$fieldToolTipstb_ta["English"]["nama"] = "";
	$fieldLabelstb_ta["English"]["dept"] = "DEPARTEMEN";
	$fieldToolTipstb_ta["English"]["dept"] = "";
	$fieldLabelstb_ta["English"]["section"] = "SECTION";
	$fieldToolTipstb_ta["English"]["section"] = "";
	$fieldLabelstb_ta["English"]["posisi"] = "POSISI";
	$fieldToolTipstb_ta["English"]["posisi"] = "";
	$fieldLabelstb_ta["English"]["forpay"] = "UNTUK PEMBAYARAN";
	$fieldToolTipstb_ta["English"]["forpay"] = "";
	$fieldLabelstb_ta["English"]["amount"] = "JUMLAH PEMBAYARAN";
	$fieldToolTipstb_ta["English"]["amount"] = "";
	$fieldLabelstb_ta["English"]["tglpay"] = "TGL PEMBAYARAN";
	$fieldToolTipstb_ta["English"]["tglpay"] = "";
	$fieldLabelstb_ta["English"]["referensi"] = "REFERENSI";
	$fieldToolTipstb_ta["English"]["referensi"] = "";
	if (count($fieldToolTipstb_ta["English"]))
		$tdatatb_ta[".isUseToolTips"] = true;
}
	
	
	$tdatatb_ta[".NCSearch"] = true;



$tdatatb_ta[".shortTableName"] = "tb_ta";
$tdatatb_ta[".nSecOptions"] = 0;
$tdatatb_ta[".recsPerRowList"] = 1;
$tdatatb_ta[".mainTableOwnerID"] = "";
$tdatatb_ta[".moveNext"] = 1;
$tdatatb_ta[".nType"] = 0;

$tdatatb_ta[".strOriginalTableName"] = "tb_ta";




$tdatatb_ta[".showAddInPopup"] = false;

$tdatatb_ta[".showEditInPopup"] = false;

$tdatatb_ta[".showViewInPopup"] = false;

$tdatatb_ta[".fieldsForRegister"] = array();

$tdatatb_ta[".listAjax"] = false;

	$tdatatb_ta[".audit"] = false;

	$tdatatb_ta[".locking"] = false;

$tdatatb_ta[".listIcons"] = true;
$tdatatb_ta[".view"] = true;

$tdatatb_ta[".exportTo"] = true;

$tdatatb_ta[".printFriendly"] = true;

$tdatatb_ta[".delete"] = true;

$tdatatb_ta[".showSimpleSearchOptions"] = false;

$tdatatb_ta[".showSearchPanel"] = true;

if (isMobile())
	$tdatatb_ta[".isUseAjaxSuggest"] = false;
else 
	$tdatatb_ta[".isUseAjaxSuggest"] = true;

$tdatatb_ta[".rowHighlite"] = true;

// button handlers file names

$tdatatb_ta[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatb_ta[".isUseTimeForSearch"] = false;




$tdatatb_ta[".allSearchFields"] = array();

$tdatatb_ta[".allSearchFields"][] = "nip";
$tdatatb_ta[".allSearchFields"][] = "nama";
$tdatatb_ta[".allSearchFields"][] = "dept";
$tdatatb_ta[".allSearchFields"][] = "section";
$tdatatb_ta[".allSearchFields"][] = "posisi";
$tdatatb_ta[".allSearchFields"][] = "tglpay";
$tdatatb_ta[".allSearchFields"][] = "referensi";

$tdatatb_ta[".googleLikeFields"][] = "id";
$tdatatb_ta[".googleLikeFields"][] = "nip";
$tdatatb_ta[".googleLikeFields"][] = "nama";
$tdatatb_ta[".googleLikeFields"][] = "dept";
$tdatatb_ta[".googleLikeFields"][] = "section";
$tdatatb_ta[".googleLikeFields"][] = "posisi";
$tdatatb_ta[".googleLikeFields"][] = "forpay";
$tdatatb_ta[".googleLikeFields"][] = "amount";
$tdatatb_ta[".googleLikeFields"][] = "tglpay";
$tdatatb_ta[".googleLikeFields"][] = "referensi";


$tdatatb_ta[".advSearchFields"][] = "nip";
$tdatatb_ta[".advSearchFields"][] = "nama";
$tdatatb_ta[".advSearchFields"][] = "dept";
$tdatatb_ta[".advSearchFields"][] = "section";
$tdatatb_ta[".advSearchFields"][] = "posisi";
$tdatatb_ta[".advSearchFields"][] = "tglpay";
$tdatatb_ta[".advSearchFields"][] = "referensi";

$tdatatb_ta[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatatb_ta[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatb_ta[".strOrderBy"] = $tstrOrderBy;

$tdatatb_ta[".orderindexes"] = array();

$tdatatb_ta[".sqlHead"] = "SELECT id,   nip,   nama,   dept,   `section`,   posisi,   forpay,   amount,   tglpay,   referensi";
$tdatatb_ta[".sqlFrom"] = "FROM tb_ta";
$tdatatb_ta[".sqlWhereExpr"] = "";
$tdatatb_ta[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatb_ta[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatb_ta[".arrGroupsPerPage"] = $arrGPP;

$tableKeystb_ta = array();
$tableKeystb_ta[] = "id";
$tdatatb_ta[".Keys"] = $tableKeystb_ta;

$tdatatb_ta[".listFields"] = array();
$tdatatb_ta[".listFields"][] = "nip";
$tdatatb_ta[".listFields"][] = "nama";
$tdatatb_ta[".listFields"][] = "dept";
$tdatatb_ta[".listFields"][] = "section";
$tdatatb_ta[".listFields"][] = "posisi";
$tdatatb_ta[".listFields"][] = "forpay";
$tdatatb_ta[".listFields"][] = "amount";
$tdatatb_ta[".listFields"][] = "tglpay";
$tdatatb_ta[".listFields"][] = "referensi";

$tdatatb_ta[".viewFields"] = array();
$tdatatb_ta[".viewFields"][] = "nip";
$tdatatb_ta[".viewFields"][] = "nama";
$tdatatb_ta[".viewFields"][] = "dept";
$tdatatb_ta[".viewFields"][] = "section";
$tdatatb_ta[".viewFields"][] = "posisi";
$tdatatb_ta[".viewFields"][] = "forpay";
$tdatatb_ta[".viewFields"][] = "amount";
$tdatatb_ta[".viewFields"][] = "tglpay";
$tdatatb_ta[".viewFields"][] = "referensi";

$tdatatb_ta[".addFields"] = array();
$tdatatb_ta[".addFields"][] = "nip";
$tdatatb_ta[".addFields"][] = "nama";
$tdatatb_ta[".addFields"][] = "dept";
$tdatatb_ta[".addFields"][] = "section";
$tdatatb_ta[".addFields"][] = "posisi";
$tdatatb_ta[".addFields"][] = "forpay";
$tdatatb_ta[".addFields"][] = "amount";
$tdatatb_ta[".addFields"][] = "tglpay";
$tdatatb_ta[".addFields"][] = "referensi";

$tdatatb_ta[".inlineAddFields"] = array();

$tdatatb_ta[".editFields"] = array();
$tdatatb_ta[".editFields"][] = "nip";
$tdatatb_ta[".editFields"][] = "nama";
$tdatatb_ta[".editFields"][] = "dept";
$tdatatb_ta[".editFields"][] = "section";
$tdatatb_ta[".editFields"][] = "posisi";
$tdatatb_ta[".editFields"][] = "forpay";
$tdatatb_ta[".editFields"][] = "amount";
$tdatatb_ta[".editFields"][] = "tglpay";
$tdatatb_ta[".editFields"][] = "referensi";

$tdatatb_ta[".inlineEditFields"] = array();

$tdatatb_ta[".exportFields"] = array();
$tdatatb_ta[".exportFields"][] = "nip";
$tdatatb_ta[".exportFields"][] = "nama";
$tdatatb_ta[".exportFields"][] = "dept";
$tdatatb_ta[".exportFields"][] = "section";
$tdatatb_ta[".exportFields"][] = "posisi";
$tdatatb_ta[".exportFields"][] = "forpay";
$tdatatb_ta[".exportFields"][] = "amount";
$tdatatb_ta[".exportFields"][] = "tglpay";
$tdatatb_ta[".exportFields"][] = "referensi";

$tdatatb_ta[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "tb_ta";
	$fdata["Label"] = "Id"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "id";
	
		
		
				
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

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_ta["id"] = $fdata;
//	nip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nip";
	$fdata["GoodName"] = "nip";
	$fdata["ownerTable"] = "tb_ta";
	$fdata["Label"] = "NIP"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
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

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10";
	
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_ta["nip"] = $fdata;
//	nama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nama";
	$fdata["GoodName"] = "nama";
	$fdata["ownerTable"] = "tb_ta";
	$fdata["Label"] = "NAMA"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
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
			$edata["EditParams"].= " maxlength=30";
	
		$edata["inputStyle"] = " width:243px;";
	$edata["controlWidth"] = 243;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_ta["nama"] = $fdata;
//	dept
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "dept";
	$fdata["GoodName"] = "dept";
	$fdata["ownerTable"] = "tb_ta";
	$fdata["Label"] = "DEPARTEMEN"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
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
			$edata["EditParams"].= " maxlength=3";
	
		$edata["inputStyle"] = " width:248px;";
	$edata["controlWidth"] = 248;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_ta["dept"] = $fdata;
//	section
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "section";
	$fdata["GoodName"] = "section";
	$fdata["ownerTable"] = "tb_ta";
	$fdata["Label"] = "SECTION"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "section"; 
		$fdata["FullName"] = "`section`";
	
		
		
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
			$edata["EditParams"].= " maxlength=3";
	
		$edata["inputStyle"] = " width:251px;";
	$edata["controlWidth"] = 251;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_ta["section"] = $fdata;
//	posisi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "posisi";
	$fdata["GoodName"] = "posisi";
	$fdata["ownerTable"] = "tb_ta";
	$fdata["Label"] = "POSISI"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "posisi"; 
		$fdata["FullName"] = "posisi";
	
		
		
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
	
		$edata["inputStyle"] = " width:256px;";
	$edata["controlWidth"] = 256;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_ta["posisi"] = $fdata;
//	forpay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "forpay";
	$fdata["GoodName"] = "forpay";
	$fdata["ownerTable"] = "tb_ta";
	$fdata["Label"] = "UNTUK PEMBAYARAN"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "forpay"; 
		$fdata["FullName"] = "forpay";
	
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			$edata["LookupUnique"] = true;
	
	$edata["LinkField"] = "tujuan";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "tujuan";
	
		
	$edata["LookupTable"] = "tb_nilaita";
	$edata["LookupOrderBy"] = "tujuan";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_ta["forpay"] = $fdata;
//	amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "amount";
	$fdata["GoodName"] = "amount";
	$fdata["ownerTable"] = "tb_ta";
	$fdata["Label"] = "JUMLAH PEMBAYARAN"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "amount"; 
		$fdata["FullName"] = "amount";
	
		
		
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
	
		
		
	$tdatatb_ta["amount"] = $fdata;
//	tglpay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "tglpay";
	$fdata["GoodName"] = "tglpay";
	$fdata["ownerTable"] = "tb_ta";
	$fdata["Label"] = "TGL PEMBAYARAN"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "tglpay"; 
		$fdata["FullName"] = "tglpay";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 1; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_ta["tglpay"] = $fdata;
//	referensi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "referensi";
	$fdata["GoodName"] = "referensi";
	$fdata["ownerTable"] = "tb_ta";
	$fdata["Label"] = "REFERENSI"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "referensi"; 
		$fdata["FullName"] = "referensi";
	
		
		
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

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10";
	
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_ta["referensi"] = $fdata;

	
$tables_data["tb_ta"]=&$tdatatb_ta;
$field_labels["tb_ta"] = &$fieldLabelstb_ta;
$fieldToolTips["tb_ta"] = &$fieldToolTipstb_ta;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tb_ta"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["tb_ta"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_tb_ta()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   nip,   nama,   dept,   `section`,   posisi,   forpay,   amount,   tglpay,   referensi";
$proto0["m_strFrom"] = "FROM tb_ta";
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
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "tb_ta"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "nip",
	"m_strTable" => "tb_ta"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "nama",
	"m_strTable" => "tb_ta"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "dept",
	"m_strTable" => "tb_ta"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "section",
	"m_strTable" => "tb_ta"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "posisi",
	"m_strTable" => "tb_ta"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "forpay",
	"m_strTable" => "tb_ta"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "tb_ta"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "tglpay",
	"m_strTable" => "tb_ta"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "referensi",
	"m_strTable" => "tb_ta"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto25=array();
$proto25["m_link"] = "SQLL_MAIN";
			$proto26=array();
$proto26["m_strName"] = "tb_ta";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "id";
$proto26["m_columns"][] = "nip";
$proto26["m_columns"][] = "nama";
$proto26["m_columns"][] = "dept";
$proto26["m_columns"][] = "section";
$proto26["m_columns"][] = "posisi";
$proto26["m_columns"][] = "forpay";
$proto26["m_columns"][] = "amount";
$proto26["m_columns"][] = "tglpay";
$proto26["m_columns"][] = "referensi";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tb_ta = createSqlQuery_tb_ta();
										$tdatatb_ta[".sqlquery"] = $queryData_tb_ta;
	
if(isset($tdatatb_ta["field2"])){
	$tdatatb_ta["field2"]["LookupTable"] = "carscars_view";
	$tdatatb_ta["field2"]["LookupOrderBy"] = "name";
	$tdatatb_ta["field2"]["LookupType"] = 4;
	$tdatatb_ta["field2"]["LinkField"] = "email";
	$tdatatb_ta["field2"]["DisplayField"] = "name";
	$tdatatb_ta[".hasCustomViewField"] = true;
}

include_once(getabspath("include/tb_ta_events.php"));
$tableEvents["tb_ta"] = new eventclass_tb_ta;
$tdatatb_ta[".hasEvents"] = true;

$cipherer = new RunnerCipherer("tb_ta");

?>