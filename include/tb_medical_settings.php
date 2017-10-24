<?php
require_once(getabspath("classes/cipherer.php"));
$tdatatb_medical = array();
	$tdatatb_medical[".NumberOfChars"] = 80; 
	$tdatatb_medical[".ShortName"] = "tb_medical";
	$tdatatb_medical[".OwnerID"] = "";
	$tdatatb_medical[".OriginalTable"] = "tb_medical";

//	field labels
$fieldLabelstb_medical = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstb_medical["English"] = array();
	$fieldToolTipstb_medical["English"] = array();
	$fieldLabelstb_medical["English"]["id"] = "Id";
	$fieldToolTipstb_medical["English"]["id"] = "";
	$fieldLabelstb_medical["English"]["nip"] = "NIP";
	$fieldToolTipstb_medical["English"]["nip"] = "";
	$fieldLabelstb_medical["English"]["dept"] = "DEPARTEMEN";
	$fieldToolTipstb_medical["English"]["dept"] = "";
	$fieldLabelstb_medical["English"]["section"] = "SECTION";
	$fieldToolTipstb_medical["English"]["section"] = "";
	$fieldLabelstb_medical["English"]["posisi"] = "POSISI";
	$fieldToolTipstb_medical["English"]["posisi"] = "";
	$fieldLabelstb_medical["English"]["payfor"] = "UNTUK PEMBAYARAN";
	$fieldToolTipstb_medical["English"]["payfor"] = "";
	$fieldLabelstb_medical["English"]["amount"] = "JUMLAH PEMBAYARAN";
	$fieldToolTipstb_medical["English"]["amount"] = "";
	$fieldLabelstb_medical["English"]["tglbayar"] = "TGL PEMBAYARAN";
	$fieldToolTipstb_medical["English"]["tglbayar"] = "";
	$fieldLabelstb_medical["English"]["referensi"] = "REFERENSI";
	$fieldToolTipstb_medical["English"]["referensi"] = "";
	$fieldLabelstb_medical["English"]["nama"] = "NAMA";
	$fieldToolTipstb_medical["English"]["nama"] = "";
	$fieldLabelstb_medical["English"]["namapayfor"] = "NAMA CLAIM";
	$fieldToolTipstb_medical["English"]["namapayfor"] = "";
	if (count($fieldToolTipstb_medical["English"]))
		$tdatatb_medical[".isUseToolTips"] = true;
}
	
	
	$tdatatb_medical[".NCSearch"] = true;



$tdatatb_medical[".shortTableName"] = "tb_medical";
$tdatatb_medical[".nSecOptions"] = 0;
$tdatatb_medical[".recsPerRowList"] = 1;
$tdatatb_medical[".mainTableOwnerID"] = "";
$tdatatb_medical[".moveNext"] = 1;
$tdatatb_medical[".nType"] = 0;

$tdatatb_medical[".strOriginalTableName"] = "tb_medical";




$tdatatb_medical[".showAddInPopup"] = false;

$tdatatb_medical[".showEditInPopup"] = false;

$tdatatb_medical[".showViewInPopup"] = false;

$tdatatb_medical[".fieldsForRegister"] = array();

$tdatatb_medical[".listAjax"] = false;

	$tdatatb_medical[".audit"] = false;

	$tdatatb_medical[".locking"] = false;

$tdatatb_medical[".listIcons"] = true;
$tdatatb_medical[".view"] = true;

$tdatatb_medical[".exportTo"] = true;

$tdatatb_medical[".printFriendly"] = true;

$tdatatb_medical[".delete"] = true;

$tdatatb_medical[".showSimpleSearchOptions"] = false;

$tdatatb_medical[".showSearchPanel"] = true;

if (isMobile())
	$tdatatb_medical[".isUseAjaxSuggest"] = false;
else 
	$tdatatb_medical[".isUseAjaxSuggest"] = true;

$tdatatb_medical[".rowHighlite"] = true;

// button handlers file names

$tdatatb_medical[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatb_medical[".isUseTimeForSearch"] = false;




$tdatatb_medical[".allSearchFields"] = array();

$tdatatb_medical[".allSearchFields"][] = "nip";
$tdatatb_medical[".allSearchFields"][] = "nama";
$tdatatb_medical[".allSearchFields"][] = "dept";
$tdatatb_medical[".allSearchFields"][] = "section";
$tdatatb_medical[".allSearchFields"][] = "posisi";
$tdatatb_medical[".allSearchFields"][] = "tglbayar";
$tdatatb_medical[".allSearchFields"][] = "referensi";

$tdatatb_medical[".googleLikeFields"][] = "id";
$tdatatb_medical[".googleLikeFields"][] = "nip";
$tdatatb_medical[".googleLikeFields"][] = "dept";
$tdatatb_medical[".googleLikeFields"][] = "section";
$tdatatb_medical[".googleLikeFields"][] = "posisi";
$tdatatb_medical[".googleLikeFields"][] = "payfor";
$tdatatb_medical[".googleLikeFields"][] = "amount";
$tdatatb_medical[".googleLikeFields"][] = "tglbayar";
$tdatatb_medical[".googleLikeFields"][] = "referensi";
$tdatatb_medical[".googleLikeFields"][] = "nama";
$tdatatb_medical[".googleLikeFields"][] = "namapayfor";


$tdatatb_medical[".advSearchFields"][] = "nip";
$tdatatb_medical[".advSearchFields"][] = "nama";
$tdatatb_medical[".advSearchFields"][] = "dept";
$tdatatb_medical[".advSearchFields"][] = "section";
$tdatatb_medical[".advSearchFields"][] = "posisi";
$tdatatb_medical[".advSearchFields"][] = "tglbayar";
$tdatatb_medical[".advSearchFields"][] = "referensi";

$tdatatb_medical[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatatb_medical[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatb_medical[".strOrderBy"] = $tstrOrderBy;

$tdatatb_medical[".orderindexes"] = array();

$tdatatb_medical[".sqlHead"] = "SELECT id,   nip,   dept,   `section`,   posisi,   payfor,   amount,   tglbayar,   referensi,   nama,   namapayfor";
$tdatatb_medical[".sqlFrom"] = "FROM tb_medical";
$tdatatb_medical[".sqlWhereExpr"] = "";
$tdatatb_medical[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatb_medical[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatb_medical[".arrGroupsPerPage"] = $arrGPP;

$tableKeystb_medical = array();
$tableKeystb_medical[] = "id";
$tdatatb_medical[".Keys"] = $tableKeystb_medical;

$tdatatb_medical[".listFields"] = array();
$tdatatb_medical[".listFields"][] = "nip";
$tdatatb_medical[".listFields"][] = "nama";
$tdatatb_medical[".listFields"][] = "dept";
$tdatatb_medical[".listFields"][] = "section";
$tdatatb_medical[".listFields"][] = "posisi";
$tdatatb_medical[".listFields"][] = "payfor";
$tdatatb_medical[".listFields"][] = "namapayfor";
$tdatatb_medical[".listFields"][] = "amount";
$tdatatb_medical[".listFields"][] = "tglbayar";
$tdatatb_medical[".listFields"][] = "referensi";

$tdatatb_medical[".viewFields"] = array();
$tdatatb_medical[".viewFields"][] = "nip";
$tdatatb_medical[".viewFields"][] = "nama";
$tdatatb_medical[".viewFields"][] = "dept";
$tdatatb_medical[".viewFields"][] = "section";
$tdatatb_medical[".viewFields"][] = "posisi";
$tdatatb_medical[".viewFields"][] = "payfor";
$tdatatb_medical[".viewFields"][] = "namapayfor";
$tdatatb_medical[".viewFields"][] = "amount";
$tdatatb_medical[".viewFields"][] = "tglbayar";
$tdatatb_medical[".viewFields"][] = "referensi";

$tdatatb_medical[".addFields"] = array();
$tdatatb_medical[".addFields"][] = "nip";
$tdatatb_medical[".addFields"][] = "nama";
$tdatatb_medical[".addFields"][] = "dept";
$tdatatb_medical[".addFields"][] = "section";
$tdatatb_medical[".addFields"][] = "posisi";
$tdatatb_medical[".addFields"][] = "payfor";
$tdatatb_medical[".addFields"][] = "namapayfor";
$tdatatb_medical[".addFields"][] = "amount";
$tdatatb_medical[".addFields"][] = "tglbayar";
$tdatatb_medical[".addFields"][] = "referensi";

$tdatatb_medical[".inlineAddFields"] = array();

$tdatatb_medical[".editFields"] = array();
$tdatatb_medical[".editFields"][] = "nip";
$tdatatb_medical[".editFields"][] = "nama";
$tdatatb_medical[".editFields"][] = "dept";
$tdatatb_medical[".editFields"][] = "section";
$tdatatb_medical[".editFields"][] = "posisi";
$tdatatb_medical[".editFields"][] = "payfor";
$tdatatb_medical[".editFields"][] = "namapayfor";
$tdatatb_medical[".editFields"][] = "amount";
$tdatatb_medical[".editFields"][] = "tglbayar";
$tdatatb_medical[".editFields"][] = "referensi";

$tdatatb_medical[".inlineEditFields"] = array();

$tdatatb_medical[".exportFields"] = array();
$tdatatb_medical[".exportFields"][] = "nip";
$tdatatb_medical[".exportFields"][] = "nama";
$tdatatb_medical[".exportFields"][] = "dept";
$tdatatb_medical[".exportFields"][] = "section";
$tdatatb_medical[".exportFields"][] = "posisi";
$tdatatb_medical[".exportFields"][] = "payfor";
$tdatatb_medical[".exportFields"][] = "namapayfor";
$tdatatb_medical[".exportFields"][] = "amount";
$tdatatb_medical[".exportFields"][] = "tglbayar";
$tdatatb_medical[".exportFields"][] = "referensi";

$tdatatb_medical[".printFields"] = array();
$tdatatb_medical[".printFields"][] = "id";
$tdatatb_medical[".printFields"][] = "nip";
$tdatatb_medical[".printFields"][] = "dept";
$tdatatb_medical[".printFields"][] = "section";
$tdatatb_medical[".printFields"][] = "posisi";
$tdatatb_medical[".printFields"][] = "payfor";
$tdatatb_medical[".printFields"][] = "amount";
$tdatatb_medical[".printFields"][] = "tglbayar";
$tdatatb_medical[".printFields"][] = "referensi";
$tdatatb_medical[".printFields"][] = "nama";
$tdatatb_medical[".printFields"][] = "namapayfor";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "tb_medical";
	$fdata["Label"] = "Id"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "id";
	
		
		
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_medical["id"] = $fdata;
//	nip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nip";
	$fdata["GoodName"] = "nip";
	$fdata["ownerTable"] = "tb_medical";
	$fdata["Label"] = "NIP"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
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
	
		
		
	$tdatatb_medical["nip"] = $fdata;
//	dept
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "dept";
	$fdata["GoodName"] = "dept";
	$fdata["ownerTable"] = "tb_medical";
	$fdata["Label"] = "DEPARTEMEN"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
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
	
		$edata["inputStyle"] = " width:254px;";
	$edata["controlWidth"] = 254;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_medical["dept"] = $fdata;
//	section
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "section";
	$fdata["GoodName"] = "section";
	$fdata["ownerTable"] = "tb_medical";
	$fdata["Label"] = "SECTION"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
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
	
		$edata["inputStyle"] = " width:258px;";
	$edata["controlWidth"] = 258;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_medical["section"] = $fdata;
//	posisi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "posisi";
	$fdata["GoodName"] = "posisi";
	$fdata["ownerTable"] = "tb_medical";
	$fdata["Label"] = "POSISI"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
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
			$edata["EditParams"].= " maxlength=30";
	
		$edata["inputStyle"] = " width:256px;";
	$edata["controlWidth"] = 256;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_medical["posisi"] = $fdata;
//	payfor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "payfor";
	$fdata["GoodName"] = "payfor";
	$fdata["ownerTable"] = "tb_medical";
	$fdata["Label"] = "UNTUK PEMBAYARAN"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "payfor"; 
		$fdata["FullName"] = "payfor";
	
		
		
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
				
		
			
	$edata["LinkField"] = "code";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "pilihan";
	
		
	$edata["LookupTable"] = "tb_pilihan";
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
	
		
		
	$tdatatb_medical["payfor"] = $fdata;
//	amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "amount";
	$fdata["GoodName"] = "amount";
	$fdata["ownerTable"] = "tb_medical";
	$fdata["Label"] = "JUMLAH PEMBAYARAN"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
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
			
		$edata["inputStyle"] = " width:197px;";
	$edata["controlWidth"] = 197;
	
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_medical["amount"] = $fdata;
//	tglbayar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "tglbayar";
	$fdata["GoodName"] = "tglbayar";
	$fdata["ownerTable"] = "tb_medical";
	$fdata["Label"] = "TGL PEMBAYARAN"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "tglbayar"; 
		$fdata["FullName"] = "tglbayar";
	
		
		
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
	
		
		
	$tdatatb_medical["tglbayar"] = $fdata;
//	referensi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "referensi";
	$fdata["GoodName"] = "referensi";
	$fdata["ownerTable"] = "tb_medical";
	$fdata["Label"] = "REFERENSI"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
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
	
		
		
	$tdatatb_medical["referensi"] = $fdata;
//	nama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "nama";
	$fdata["GoodName"] = "nama";
	$fdata["ownerTable"] = "tb_medical";
	$fdata["Label"] = "NAMA"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
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
	
		$edata["inputStyle"] = " width:252px;";
	$edata["controlWidth"] = 252;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_medical["nama"] = $fdata;
//	namapayfor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "namapayfor";
	$fdata["GoodName"] = "namapayfor";
	$fdata["ownerTable"] = "tb_medical";
	$fdata["Label"] = "NAMA CLAIM"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "namapayfor"; 
		$fdata["FullName"] = "namapayfor";
	
		
		
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
			
		$edata["inputStyle"] = " width:259px;";
	$edata["controlWidth"] = 259;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_medical["namapayfor"] = $fdata;

	
$tables_data["tb_medical"]=&$tdatatb_medical;
$field_labels["tb_medical"] = &$fieldLabelstb_medical;
$fieldToolTips["tb_medical"] = &$fieldToolTipstb_medical;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tb_medical"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["tb_medical"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_tb_medical()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   nip,   dept,   `section`,   posisi,   payfor,   amount,   tglbayar,   referensi,   nama,   namapayfor";
$proto0["m_strFrom"] = "FROM tb_medical";
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
	"m_strTable" => "tb_medical"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "nip",
	"m_strTable" => "tb_medical"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "dept",
	"m_strTable" => "tb_medical"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "section",
	"m_strTable" => "tb_medical"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "posisi",
	"m_strTable" => "tb_medical"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "payfor",
	"m_strTable" => "tb_medical"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "tb_medical"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "tglbayar",
	"m_strTable" => "tb_medical"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "referensi",
	"m_strTable" => "tb_medical"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "nama",
	"m_strTable" => "tb_medical"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "namapayfor",
	"m_strTable" => "tb_medical"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto27=array();
$proto27["m_link"] = "SQLL_MAIN";
			$proto28=array();
$proto28["m_strName"] = "tb_medical";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "id";
$proto28["m_columns"][] = "nip";
$proto28["m_columns"][] = "dept";
$proto28["m_columns"][] = "section";
$proto28["m_columns"][] = "posisi";
$proto28["m_columns"][] = "payfor";
$proto28["m_columns"][] = "amount";
$proto28["m_columns"][] = "tglbayar";
$proto28["m_columns"][] = "referensi";
$proto28["m_columns"][] = "nama";
$proto28["m_columns"][] = "namapayfor";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_alias"] = "";
$proto29=array();
$proto29["m_sql"] = "";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "";
$proto29["m_havingmode"] = "0";
$proto29["m_inBrackets"] = "0";
$proto29["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto29);

$proto27["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto27);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tb_medical = createSqlQuery_tb_medical();
											$tdatatb_medical[".sqlquery"] = $queryData_tb_medical;
	
if(isset($tdatatb_medical["field2"])){
	$tdatatb_medical["field2"]["LookupTable"] = "carscars_view";
	$tdatatb_medical["field2"]["LookupOrderBy"] = "name";
	$tdatatb_medical["field2"]["LookupType"] = 4;
	$tdatatb_medical["field2"]["LinkField"] = "email";
	$tdatatb_medical["field2"]["DisplayField"] = "name";
	$tdatatb_medical[".hasCustomViewField"] = true;
}

include_once(getabspath("include/tb_medical_events.php"));
$tableEvents["tb_medical"] = new eventclass_tb_medical;
$tdatatb_medical[".hasEvents"] = true;

$cipherer = new RunnerCipherer("tb_medical");

?>