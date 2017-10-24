<?php
require_once(getabspath("classes/cipherer.php"));
$tdatatb_meal = array();
	$tdatatb_meal[".NumberOfChars"] = 80; 
	$tdatatb_meal[".ShortName"] = "tb_meal";
	$tdatatb_meal[".OwnerID"] = "";
	$tdatatb_meal[".OriginalTable"] = "tb_meal";

//	field labels
$fieldLabelstb_meal = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstb_meal["English"] = array();
	$fieldToolTipstb_meal["English"] = array();
	$fieldLabelstb_meal["English"]["id"] = "Id";
	$fieldToolTipstb_meal["English"]["id"] = "";
	$fieldLabelstb_meal["English"]["nip"] = "NIP";
	$fieldToolTipstb_meal["English"]["nip"] = "";
	$fieldLabelstb_meal["English"]["nama"] = "NAMA";
	$fieldToolTipstb_meal["English"]["nama"] = "";
	$fieldLabelstb_meal["English"]["dept"] = "DEPARTEMEN";
	$fieldToolTipstb_meal["English"]["dept"] = "";
	$fieldLabelstb_meal["English"]["section"] = "SECTION";
	$fieldToolTipstb_meal["English"]["section"] = "";
	$fieldLabelstb_meal["English"]["posisi"] = "POSISI";
	$fieldToolTipstb_meal["English"]["posisi"] = "";
	$fieldLabelstb_meal["English"]["forpay"] = "UNTUK PEMBAYARAN";
	$fieldToolTipstb_meal["English"]["forpay"] = "";
	$fieldLabelstb_meal["English"]["amount"] = "JUMLAH PEMBAYARAN";
	$fieldToolTipstb_meal["English"]["amount"] = "";
	$fieldLabelstb_meal["English"]["tglpay"] = "TGL PEMBAYARAN";
	$fieldToolTipstb_meal["English"]["tglpay"] = "";
	$fieldLabelstb_meal["English"]["referensi"] = "REFERENSI";
	$fieldToolTipstb_meal["English"]["referensi"] = "";
	if (count($fieldToolTipstb_meal["English"]))
		$tdatatb_meal[".isUseToolTips"] = true;
}
	
	
	$tdatatb_meal[".NCSearch"] = true;



$tdatatb_meal[".shortTableName"] = "tb_meal";
$tdatatb_meal[".nSecOptions"] = 0;
$tdatatb_meal[".recsPerRowList"] = 1;
$tdatatb_meal[".mainTableOwnerID"] = "";
$tdatatb_meal[".moveNext"] = 1;
$tdatatb_meal[".nType"] = 0;

$tdatatb_meal[".strOriginalTableName"] = "tb_meal";




$tdatatb_meal[".showAddInPopup"] = false;

$tdatatb_meal[".showEditInPopup"] = false;

$tdatatb_meal[".showViewInPopup"] = false;

$tdatatb_meal[".fieldsForRegister"] = array();

$tdatatb_meal[".listAjax"] = false;

	$tdatatb_meal[".audit"] = false;

	$tdatatb_meal[".locking"] = false;

$tdatatb_meal[".listIcons"] = true;
$tdatatb_meal[".view"] = true;

$tdatatb_meal[".exportTo"] = true;

$tdatatb_meal[".printFriendly"] = true;

$tdatatb_meal[".delete"] = true;

$tdatatb_meal[".showSimpleSearchOptions"] = false;

$tdatatb_meal[".showSearchPanel"] = true;

if (isMobile())
	$tdatatb_meal[".isUseAjaxSuggest"] = false;
else 
	$tdatatb_meal[".isUseAjaxSuggest"] = true;

$tdatatb_meal[".rowHighlite"] = true;

// button handlers file names

$tdatatb_meal[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatb_meal[".isUseTimeForSearch"] = false;




$tdatatb_meal[".allSearchFields"] = array();

$tdatatb_meal[".allSearchFields"][] = "nip";
$tdatatb_meal[".allSearchFields"][] = "nama";
$tdatatb_meal[".allSearchFields"][] = "dept";
$tdatatb_meal[".allSearchFields"][] = "section";
$tdatatb_meal[".allSearchFields"][] = "posisi";
$tdatatb_meal[".allSearchFields"][] = "tglpay";
$tdatatb_meal[".allSearchFields"][] = "referensi";

$tdatatb_meal[".googleLikeFields"][] = "id";
$tdatatb_meal[".googleLikeFields"][] = "nip";
$tdatatb_meal[".googleLikeFields"][] = "nama";
$tdatatb_meal[".googleLikeFields"][] = "dept";
$tdatatb_meal[".googleLikeFields"][] = "section";
$tdatatb_meal[".googleLikeFields"][] = "posisi";
$tdatatb_meal[".googleLikeFields"][] = "forpay";
$tdatatb_meal[".googleLikeFields"][] = "amount";
$tdatatb_meal[".googleLikeFields"][] = "tglpay";
$tdatatb_meal[".googleLikeFields"][] = "referensi";


$tdatatb_meal[".advSearchFields"][] = "nip";
$tdatatb_meal[".advSearchFields"][] = "nama";
$tdatatb_meal[".advSearchFields"][] = "dept";
$tdatatb_meal[".advSearchFields"][] = "section";
$tdatatb_meal[".advSearchFields"][] = "posisi";
$tdatatb_meal[".advSearchFields"][] = "tglpay";
$tdatatb_meal[".advSearchFields"][] = "referensi";

$tdatatb_meal[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatatb_meal[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatb_meal[".strOrderBy"] = $tstrOrderBy;

$tdatatb_meal[".orderindexes"] = array();

$tdatatb_meal[".sqlHead"] = "SELECT id,   nip,   nama,   dept,   `section`,   posisi,   forpay,   amount,   tglpay,   referensi";
$tdatatb_meal[".sqlFrom"] = "FROM tb_meal";
$tdatatb_meal[".sqlWhereExpr"] = "";
$tdatatb_meal[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatb_meal[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatb_meal[".arrGroupsPerPage"] = $arrGPP;

$tableKeystb_meal = array();
$tableKeystb_meal[] = "id";
$tdatatb_meal[".Keys"] = $tableKeystb_meal;

$tdatatb_meal[".listFields"] = array();
$tdatatb_meal[".listFields"][] = "nip";
$tdatatb_meal[".listFields"][] = "nama";
$tdatatb_meal[".listFields"][] = "dept";
$tdatatb_meal[".listFields"][] = "section";
$tdatatb_meal[".listFields"][] = "posisi";
$tdatatb_meal[".listFields"][] = "forpay";
$tdatatb_meal[".listFields"][] = "amount";
$tdatatb_meal[".listFields"][] = "tglpay";
$tdatatb_meal[".listFields"][] = "referensi";

$tdatatb_meal[".viewFields"] = array();
$tdatatb_meal[".viewFields"][] = "nip";
$tdatatb_meal[".viewFields"][] = "nama";
$tdatatb_meal[".viewFields"][] = "dept";
$tdatatb_meal[".viewFields"][] = "section";
$tdatatb_meal[".viewFields"][] = "posisi";
$tdatatb_meal[".viewFields"][] = "forpay";
$tdatatb_meal[".viewFields"][] = "amount";
$tdatatb_meal[".viewFields"][] = "tglpay";
$tdatatb_meal[".viewFields"][] = "referensi";

$tdatatb_meal[".addFields"] = array();
$tdatatb_meal[".addFields"][] = "nip";
$tdatatb_meal[".addFields"][] = "nama";
$tdatatb_meal[".addFields"][] = "dept";
$tdatatb_meal[".addFields"][] = "section";
$tdatatb_meal[".addFields"][] = "posisi";
$tdatatb_meal[".addFields"][] = "forpay";
$tdatatb_meal[".addFields"][] = "amount";
$tdatatb_meal[".addFields"][] = "tglpay";
$tdatatb_meal[".addFields"][] = "referensi";

$tdatatb_meal[".inlineAddFields"] = array();

$tdatatb_meal[".editFields"] = array();

$tdatatb_meal[".inlineEditFields"] = array();

$tdatatb_meal[".exportFields"] = array();
$tdatatb_meal[".exportFields"][] = "nip";
$tdatatb_meal[".exportFields"][] = "nama";
$tdatatb_meal[".exportFields"][] = "dept";
$tdatatb_meal[".exportFields"][] = "section";
$tdatatb_meal[".exportFields"][] = "posisi";
$tdatatb_meal[".exportFields"][] = "forpay";
$tdatatb_meal[".exportFields"][] = "amount";
$tdatatb_meal[".exportFields"][] = "tglpay";
$tdatatb_meal[".exportFields"][] = "referensi";

$tdatatb_meal[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "tb_meal";
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
	
		
		
	$tdatatb_meal["id"] = $fdata;
//	nip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nip";
	$fdata["GoodName"] = "nip";
	$fdata["ownerTable"] = "tb_meal";
	$fdata["Label"] = "NIP"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		
		
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
	
		
		
	$tdatatb_meal["nip"] = $fdata;
//	nama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nama";
	$fdata["GoodName"] = "nama";
	$fdata["ownerTable"] = "tb_meal";
	$fdata["Label"] = "NAMA"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		
		
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
	
		
		
	$tdatatb_meal["nama"] = $fdata;
//	dept
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "dept";
	$fdata["GoodName"] = "dept";
	$fdata["ownerTable"] = "tb_meal";
	$fdata["Label"] = "DEPARTEMEN"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		
		
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
			$edata["EditParams"].= " maxlength=30";
	
		$edata["inputStyle"] = " width:247px;";
	$edata["controlWidth"] = 247;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_meal["dept"] = $fdata;
//	section
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "section";
	$fdata["GoodName"] = "section";
	$fdata["ownerTable"] = "tb_meal";
	$fdata["Label"] = "SECTION"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		
		
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
			$edata["EditParams"].= " maxlength=30";
	
		$edata["inputStyle"] = " width:248px;";
	$edata["controlWidth"] = 248;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_meal["section"] = $fdata;
//	posisi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "posisi";
	$fdata["GoodName"] = "posisi";
	$fdata["ownerTable"] = "tb_meal";
	$fdata["Label"] = "POSISI"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		
		
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
	
		$edata["inputStyle"] = " width:249px;";
	$edata["controlWidth"] = 249;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_meal["posisi"] = $fdata;
//	forpay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "forpay";
	$fdata["GoodName"] = "forpay";
	$fdata["ownerTable"] = "tb_meal";
	$fdata["Label"] = "UNTUK PEMBAYARAN"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		
		
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
	
		
	$edata["LookupTable"] = "tb_area";
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
	
		
		
	$tdatatb_meal["forpay"] = $fdata;
//	amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "amount";
	$fdata["GoodName"] = "amount";
	$fdata["ownerTable"] = "tb_meal";
	$fdata["Label"] = "JUMLAH PEMBAYARAN"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		
		
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
	
		
		
	$tdatatb_meal["amount"] = $fdata;
//	tglpay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "tglpay";
	$fdata["GoodName"] = "tglpay";
	$fdata["ownerTable"] = "tb_meal";
	$fdata["Label"] = "TGL PEMBAYARAN"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		
		
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
	
		
		
	$tdatatb_meal["tglpay"] = $fdata;
//	referensi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "referensi";
	$fdata["GoodName"] = "referensi";
	$fdata["ownerTable"] = "tb_meal";
	$fdata["Label"] = "REFERENSI"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		
		
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
	
		
		
	$tdatatb_meal["referensi"] = $fdata;

	
$tables_data["tb_meal"]=&$tdatatb_meal;
$field_labels["tb_meal"] = &$fieldLabelstb_meal;
$fieldToolTips["tb_meal"] = &$fieldToolTipstb_meal;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tb_meal"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["tb_meal"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_tb_meal()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   nip,   nama,   dept,   `section`,   posisi,   forpay,   amount,   tglpay,   referensi";
$proto0["m_strFrom"] = "FROM tb_meal";
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
	"m_strTable" => "tb_meal"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "nip",
	"m_strTable" => "tb_meal"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "nama",
	"m_strTable" => "tb_meal"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "dept",
	"m_strTable" => "tb_meal"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "section",
	"m_strTable" => "tb_meal"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "posisi",
	"m_strTable" => "tb_meal"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "forpay",
	"m_strTable" => "tb_meal"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "tb_meal"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "tglpay",
	"m_strTable" => "tb_meal"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "referensi",
	"m_strTable" => "tb_meal"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto25=array();
$proto25["m_link"] = "SQLL_MAIN";
			$proto26=array();
$proto26["m_strName"] = "tb_meal";
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
$queryData_tb_meal = createSqlQuery_tb_meal();
										$tdatatb_meal[".sqlquery"] = $queryData_tb_meal;
	
if(isset($tdatatb_meal["field2"])){
	$tdatatb_meal["field2"]["LookupTable"] = "carscars_view";
	$tdatatb_meal["field2"]["LookupOrderBy"] = "name";
	$tdatatb_meal["field2"]["LookupType"] = 4;
	$tdatatb_meal["field2"]["LinkField"] = "email";
	$tdatatb_meal["field2"]["DisplayField"] = "name";
	$tdatatb_meal[".hasCustomViewField"] = true;
}

include_once(getabspath("include/tb_meal_events.php"));
$tableEvents["tb_meal"] = new eventclass_tb_meal;
$tdatatb_meal[".hasEvents"] = true;

$cipherer = new RunnerCipherer("tb_meal");

?>