<?php
require_once(getabspath("classes/cipherer.php"));
$tdatatb_sumbangan = array();
	$tdatatb_sumbangan[".NumberOfChars"] = 80; 
	$tdatatb_sumbangan[".ShortName"] = "tb_sumbangan";
	$tdatatb_sumbangan[".OwnerID"] = "";
	$tdatatb_sumbangan[".OriginalTable"] = "tb_sumbangan";

//	field labels
$fieldLabelstb_sumbangan = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstb_sumbangan["English"] = array();
	$fieldToolTipstb_sumbangan["English"] = array();
	$fieldLabelstb_sumbangan["English"]["id"] = "ID";
	$fieldToolTipstb_sumbangan["English"]["id"] = "";
	$fieldLabelstb_sumbangan["English"]["nip"] = "NIP";
	$fieldToolTipstb_sumbangan["English"]["nip"] = "";
	$fieldLabelstb_sumbangan["English"]["nama"] = "NAMA";
	$fieldToolTipstb_sumbangan["English"]["nama"] = "";
	$fieldLabelstb_sumbangan["English"]["dept"] = "DEPARTEMEN";
	$fieldToolTipstb_sumbangan["English"]["dept"] = "";
	$fieldLabelstb_sumbangan["English"]["section"] = "SECTION";
	$fieldToolTipstb_sumbangan["English"]["section"] = "";
	$fieldLabelstb_sumbangan["English"]["posisi"] = "POSISI";
	$fieldToolTipstb_sumbangan["English"]["posisi"] = "";
	$fieldLabelstb_sumbangan["English"]["forpay"] = "UNTUK PEMBAYARAN";
	$fieldToolTipstb_sumbangan["English"]["forpay"] = "";
	$fieldLabelstb_sumbangan["English"]["amount"] = "JUMLAH PEMBAYARAN";
	$fieldToolTipstb_sumbangan["English"]["amount"] = "";
	$fieldLabelstb_sumbangan["English"]["tglpay"] = "TGL PEMBAYARAN";
	$fieldToolTipstb_sumbangan["English"]["tglpay"] = "";
	$fieldLabelstb_sumbangan["English"]["referensi"] = "REFERENSI";
	$fieldToolTipstb_sumbangan["English"]["referensi"] = "";
	if (count($fieldToolTipstb_sumbangan["English"]))
		$tdatatb_sumbangan[".isUseToolTips"] = true;
}
	
	
	$tdatatb_sumbangan[".NCSearch"] = true;



$tdatatb_sumbangan[".shortTableName"] = "tb_sumbangan";
$tdatatb_sumbangan[".nSecOptions"] = 0;
$tdatatb_sumbangan[".recsPerRowList"] = 1;
$tdatatb_sumbangan[".mainTableOwnerID"] = "";
$tdatatb_sumbangan[".moveNext"] = 1;
$tdatatb_sumbangan[".nType"] = 0;

$tdatatb_sumbangan[".strOriginalTableName"] = "tb_sumbangan";




$tdatatb_sumbangan[".showAddInPopup"] = false;

$tdatatb_sumbangan[".showEditInPopup"] = false;

$tdatatb_sumbangan[".showViewInPopup"] = false;

$tdatatb_sumbangan[".fieldsForRegister"] = array();

$tdatatb_sumbangan[".listAjax"] = false;

	$tdatatb_sumbangan[".audit"] = false;

	$tdatatb_sumbangan[".locking"] = false;

$tdatatb_sumbangan[".listIcons"] = true;
$tdatatb_sumbangan[".view"] = true;

$tdatatb_sumbangan[".exportTo"] = true;

$tdatatb_sumbangan[".printFriendly"] = true;

$tdatatb_sumbangan[".delete"] = true;

$tdatatb_sumbangan[".showSimpleSearchOptions"] = false;

$tdatatb_sumbangan[".showSearchPanel"] = true;

if (isMobile())
	$tdatatb_sumbangan[".isUseAjaxSuggest"] = false;
else 
	$tdatatb_sumbangan[".isUseAjaxSuggest"] = true;

$tdatatb_sumbangan[".rowHighlite"] = true;

// button handlers file names

$tdatatb_sumbangan[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatb_sumbangan[".isUseTimeForSearch"] = false;




$tdatatb_sumbangan[".allSearchFields"] = array();

$tdatatb_sumbangan[".allSearchFields"][] = "nip";
$tdatatb_sumbangan[".allSearchFields"][] = "nama";
$tdatatb_sumbangan[".allSearchFields"][] = "dept";
$tdatatb_sumbangan[".allSearchFields"][] = "section";
$tdatatb_sumbangan[".allSearchFields"][] = "posisi";
$tdatatb_sumbangan[".allSearchFields"][] = "tglpay";
$tdatatb_sumbangan[".allSearchFields"][] = "referensi";

$tdatatb_sumbangan[".googleLikeFields"][] = "id";
$tdatatb_sumbangan[".googleLikeFields"][] = "nip";
$tdatatb_sumbangan[".googleLikeFields"][] = "nama";
$tdatatb_sumbangan[".googleLikeFields"][] = "dept";
$tdatatb_sumbangan[".googleLikeFields"][] = "section";
$tdatatb_sumbangan[".googleLikeFields"][] = "posisi";
$tdatatb_sumbangan[".googleLikeFields"][] = "forpay";
$tdatatb_sumbangan[".googleLikeFields"][] = "amount";
$tdatatb_sumbangan[".googleLikeFields"][] = "tglpay";
$tdatatb_sumbangan[".googleLikeFields"][] = "referensi";


$tdatatb_sumbangan[".advSearchFields"][] = "nip";
$tdatatb_sumbangan[".advSearchFields"][] = "nama";
$tdatatb_sumbangan[".advSearchFields"][] = "dept";
$tdatatb_sumbangan[".advSearchFields"][] = "section";
$tdatatb_sumbangan[".advSearchFields"][] = "posisi";
$tdatatb_sumbangan[".advSearchFields"][] = "tglpay";
$tdatatb_sumbangan[".advSearchFields"][] = "referensi";

$tdatatb_sumbangan[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatatb_sumbangan[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatb_sumbangan[".strOrderBy"] = $tstrOrderBy;

$tdatatb_sumbangan[".orderindexes"] = array();

$tdatatb_sumbangan[".sqlHead"] = "SELECT id,   nip,   nama,   dept,   `section`,   posisi,   forpay,   amount,   tglpay,   referensi";
$tdatatb_sumbangan[".sqlFrom"] = "FROM tb_sumbangan";
$tdatatb_sumbangan[".sqlWhereExpr"] = "";
$tdatatb_sumbangan[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatb_sumbangan[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatb_sumbangan[".arrGroupsPerPage"] = $arrGPP;

$tableKeystb_sumbangan = array();
$tableKeystb_sumbangan[] = "id";
$tdatatb_sumbangan[".Keys"] = $tableKeystb_sumbangan;

$tdatatb_sumbangan[".listFields"] = array();
$tdatatb_sumbangan[".listFields"][] = "nip";
$tdatatb_sumbangan[".listFields"][] = "nama";
$tdatatb_sumbangan[".listFields"][] = "dept";
$tdatatb_sumbangan[".listFields"][] = "section";
$tdatatb_sumbangan[".listFields"][] = "posisi";
$tdatatb_sumbangan[".listFields"][] = "forpay";
$tdatatb_sumbangan[".listFields"][] = "amount";
$tdatatb_sumbangan[".listFields"][] = "tglpay";
$tdatatb_sumbangan[".listFields"][] = "referensi";

$tdatatb_sumbangan[".viewFields"] = array();
$tdatatb_sumbangan[".viewFields"][] = "nip";
$tdatatb_sumbangan[".viewFields"][] = "nama";
$tdatatb_sumbangan[".viewFields"][] = "dept";
$tdatatb_sumbangan[".viewFields"][] = "section";
$tdatatb_sumbangan[".viewFields"][] = "posisi";
$tdatatb_sumbangan[".viewFields"][] = "forpay";
$tdatatb_sumbangan[".viewFields"][] = "amount";
$tdatatb_sumbangan[".viewFields"][] = "tglpay";
$tdatatb_sumbangan[".viewFields"][] = "referensi";

$tdatatb_sumbangan[".addFields"] = array();
$tdatatb_sumbangan[".addFields"][] = "nip";
$tdatatb_sumbangan[".addFields"][] = "nama";
$tdatatb_sumbangan[".addFields"][] = "dept";
$tdatatb_sumbangan[".addFields"][] = "section";
$tdatatb_sumbangan[".addFields"][] = "posisi";
$tdatatb_sumbangan[".addFields"][] = "forpay";
$tdatatb_sumbangan[".addFields"][] = "amount";
$tdatatb_sumbangan[".addFields"][] = "tglpay";
$tdatatb_sumbangan[".addFields"][] = "referensi";

$tdatatb_sumbangan[".inlineAddFields"] = array();

$tdatatb_sumbangan[".editFields"] = array();
$tdatatb_sumbangan[".editFields"][] = "nip";
$tdatatb_sumbangan[".editFields"][] = "nama";
$tdatatb_sumbangan[".editFields"][] = "dept";
$tdatatb_sumbangan[".editFields"][] = "section";
$tdatatb_sumbangan[".editFields"][] = "posisi";
$tdatatb_sumbangan[".editFields"][] = "forpay";
$tdatatb_sumbangan[".editFields"][] = "amount";
$tdatatb_sumbangan[".editFields"][] = "tglpay";
$tdatatb_sumbangan[".editFields"][] = "referensi";

$tdatatb_sumbangan[".inlineEditFields"] = array();

$tdatatb_sumbangan[".exportFields"] = array();
$tdatatb_sumbangan[".exportFields"][] = "nip";
$tdatatb_sumbangan[".exportFields"][] = "nama";
$tdatatb_sumbangan[".exportFields"][] = "dept";
$tdatatb_sumbangan[".exportFields"][] = "section";
$tdatatb_sumbangan[".exportFields"][] = "posisi";
$tdatatb_sumbangan[".exportFields"][] = "forpay";
$tdatatb_sumbangan[".exportFields"][] = "amount";
$tdatatb_sumbangan[".exportFields"][] = "tglpay";
$tdatatb_sumbangan[".exportFields"][] = "referensi";

$tdatatb_sumbangan[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "tb_sumbangan";
	$fdata["Label"] = "ID"; 
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
	
		
		
	$tdatatb_sumbangan["id"] = $fdata;
//	nip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nip";
	$fdata["GoodName"] = "nip";
	$fdata["ownerTable"] = "tb_sumbangan";
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
	
		
		
	$tdatatb_sumbangan["nip"] = $fdata;
//	nama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nama";
	$fdata["GoodName"] = "nama";
	$fdata["ownerTable"] = "tb_sumbangan";
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
	
		$edata["inputStyle"] = " width:230px;";
	$edata["controlWidth"] = 230;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_sumbangan["nama"] = $fdata;
//	dept
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "dept";
	$fdata["GoodName"] = "dept";
	$fdata["ownerTable"] = "tb_sumbangan";
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
	
		$edata["inputStyle"] = " width:235px;";
	$edata["controlWidth"] = 235;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_sumbangan["dept"] = $fdata;
//	section
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "section";
	$fdata["GoodName"] = "section";
	$fdata["ownerTable"] = "tb_sumbangan";
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
	
		$edata["inputStyle"] = " width:237px;";
	$edata["controlWidth"] = 237;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_sumbangan["section"] = $fdata;
//	posisi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "posisi";
	$fdata["GoodName"] = "posisi";
	$fdata["ownerTable"] = "tb_sumbangan";
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
	
		$edata["inputStyle"] = " width:242px;";
	$edata["controlWidth"] = 242;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_sumbangan["posisi"] = $fdata;
//	forpay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "forpay";
	$fdata["GoodName"] = "forpay";
	$fdata["ownerTable"] = "tb_sumbangan";
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
								$edata["LookupType"] = 1;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "pilihan";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "pilihan";
	
		
	$edata["LookupTable"] = "tb_pildukacita";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
		$edata["SimpleAdd"] = true;
			
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_sumbangan["forpay"] = $fdata;
//	amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "amount";
	$fdata["GoodName"] = "amount";
	$fdata["ownerTable"] = "tb_sumbangan";
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
	
		
		
	$tdatatb_sumbangan["amount"] = $fdata;
//	tglpay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "tglpay";
	$fdata["GoodName"] = "tglpay";
	$fdata["ownerTable"] = "tb_sumbangan";
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
	
		
		
	$tdatatb_sumbangan["tglpay"] = $fdata;
//	referensi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "referensi";
	$fdata["GoodName"] = "referensi";
	$fdata["ownerTable"] = "tb_sumbangan";
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
	
		
		
	$tdatatb_sumbangan["referensi"] = $fdata;

	
$tables_data["tb_sumbangan"]=&$tdatatb_sumbangan;
$field_labels["tb_sumbangan"] = &$fieldLabelstb_sumbangan;
$fieldToolTips["tb_sumbangan"] = &$fieldToolTipstb_sumbangan;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tb_sumbangan"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["tb_sumbangan"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_tb_sumbangan()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   nip,   nama,   dept,   `section`,   posisi,   forpay,   amount,   tglpay,   referensi";
$proto0["m_strFrom"] = "FROM tb_sumbangan";
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
	"m_strTable" => "tb_sumbangan"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "nip",
	"m_strTable" => "tb_sumbangan"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "nama",
	"m_strTable" => "tb_sumbangan"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "dept",
	"m_strTable" => "tb_sumbangan"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "section",
	"m_strTable" => "tb_sumbangan"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "posisi",
	"m_strTable" => "tb_sumbangan"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "forpay",
	"m_strTable" => "tb_sumbangan"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "tb_sumbangan"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "tglpay",
	"m_strTable" => "tb_sumbangan"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "referensi",
	"m_strTable" => "tb_sumbangan"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto25=array();
$proto25["m_link"] = "SQLL_MAIN";
			$proto26=array();
$proto26["m_strName"] = "tb_sumbangan";
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
$queryData_tb_sumbangan = createSqlQuery_tb_sumbangan();
										$tdatatb_sumbangan[".sqlquery"] = $queryData_tb_sumbangan;
	
if(isset($tdatatb_sumbangan["field2"])){
	$tdatatb_sumbangan["field2"]["LookupTable"] = "carscars_view";
	$tdatatb_sumbangan["field2"]["LookupOrderBy"] = "name";
	$tdatatb_sumbangan["field2"]["LookupType"] = 4;
	$tdatatb_sumbangan["field2"]["LinkField"] = "email";
	$tdatatb_sumbangan["field2"]["DisplayField"] = "name";
	$tdatatb_sumbangan[".hasCustomViewField"] = true;
}

include_once(getabspath("include/tb_sumbangan_events.php"));
$tableEvents["tb_sumbangan"] = new eventclass_tb_sumbangan;
$tdatatb_sumbangan[".hasEvents"] = true;

$cipherer = new RunnerCipherer("tb_sumbangan");

?>