<?php
require_once(getabspath("classes/cipherer.php"));
$tdatatb_tugas = array();
	$tdatatb_tugas[".NumberOfChars"] = 80; 
	$tdatatb_tugas[".ShortName"] = "tb_tugas";
	$tdatatb_tugas[".OwnerID"] = "";
	$tdatatb_tugas[".OriginalTable"] = "tb_tugas";

//	field labels
$fieldLabelstb_tugas = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstb_tugas["English"] = array();
	$fieldToolTipstb_tugas["English"] = array();
	$fieldLabelstb_tugas["English"]["id"] = "Id";
	$fieldToolTipstb_tugas["English"]["id"] = "";
	$fieldLabelstb_tugas["English"]["nip"] = "NIP";
	$fieldToolTipstb_tugas["English"]["nip"] = "";
	$fieldLabelstb_tugas["English"]["dept"] = "DEPARTEMEN";
	$fieldToolTipstb_tugas["English"]["dept"] = "";
	$fieldLabelstb_tugas["English"]["section"] = "SECTION";
	$fieldToolTipstb_tugas["English"]["section"] = "";
	$fieldLabelstb_tugas["English"]["posisi"] = "POSISI";
	$fieldToolTipstb_tugas["English"]["posisi"] = "";
	$fieldLabelstb_tugas["English"]["forpay"] = "UNTUK PEMBAYARAN";
	$fieldToolTipstb_tugas["English"]["forpay"] = "";
	$fieldLabelstb_tugas["English"]["amount"] = "JUMLAH PEMBAYARAN";
	$fieldToolTipstb_tugas["English"]["amount"] = "";
	$fieldLabelstb_tugas["English"]["tglbayar"] = "TGL PEMBAYARAN";
	$fieldToolTipstb_tugas["English"]["tglbayar"] = "";
	$fieldLabelstb_tugas["English"]["referensi"] = "REFERENSI";
	$fieldToolTipstb_tugas["English"]["referensi"] = "";
	$fieldLabelstb_tugas["English"]["nama"] = "NAMA";
	$fieldToolTipstb_tugas["English"]["nama"] = "";
	if (count($fieldToolTipstb_tugas["English"]))
		$tdatatb_tugas[".isUseToolTips"] = true;
}
	
	
	$tdatatb_tugas[".NCSearch"] = true;



$tdatatb_tugas[".shortTableName"] = "tb_tugas";
$tdatatb_tugas[".nSecOptions"] = 0;
$tdatatb_tugas[".recsPerRowList"] = 1;
$tdatatb_tugas[".mainTableOwnerID"] = "";
$tdatatb_tugas[".moveNext"] = 1;
$tdatatb_tugas[".nType"] = 0;

$tdatatb_tugas[".strOriginalTableName"] = "tb_tugas";




$tdatatb_tugas[".showAddInPopup"] = false;

$tdatatb_tugas[".showEditInPopup"] = false;

$tdatatb_tugas[".showViewInPopup"] = false;

$tdatatb_tugas[".fieldsForRegister"] = array();

$tdatatb_tugas[".listAjax"] = false;

	$tdatatb_tugas[".audit"] = false;

	$tdatatb_tugas[".locking"] = false;

$tdatatb_tugas[".listIcons"] = true;
$tdatatb_tugas[".view"] = true;

$tdatatb_tugas[".exportTo"] = true;

$tdatatb_tugas[".printFriendly"] = true;

$tdatatb_tugas[".delete"] = true;

$tdatatb_tugas[".showSimpleSearchOptions"] = false;

$tdatatb_tugas[".showSearchPanel"] = true;

if (isMobile())
	$tdatatb_tugas[".isUseAjaxSuggest"] = false;
else 
	$tdatatb_tugas[".isUseAjaxSuggest"] = true;

$tdatatb_tugas[".rowHighlite"] = true;

// button handlers file names

$tdatatb_tugas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatb_tugas[".isUseTimeForSearch"] = false;




$tdatatb_tugas[".allSearchFields"] = array();

$tdatatb_tugas[".allSearchFields"][] = "nip";
$tdatatb_tugas[".allSearchFields"][] = "nama";
$tdatatb_tugas[".allSearchFields"][] = "dept";
$tdatatb_tugas[".allSearchFields"][] = "section";
$tdatatb_tugas[".allSearchFields"][] = "posisi";
$tdatatb_tugas[".allSearchFields"][] = "tglbayar";
$tdatatb_tugas[".allSearchFields"][] = "referensi";

$tdatatb_tugas[".googleLikeFields"][] = "id";
$tdatatb_tugas[".googleLikeFields"][] = "nip";
$tdatatb_tugas[".googleLikeFields"][] = "dept";
$tdatatb_tugas[".googleLikeFields"][] = "section";
$tdatatb_tugas[".googleLikeFields"][] = "posisi";
$tdatatb_tugas[".googleLikeFields"][] = "forpay";
$tdatatb_tugas[".googleLikeFields"][] = "amount";
$tdatatb_tugas[".googleLikeFields"][] = "tglbayar";
$tdatatb_tugas[".googleLikeFields"][] = "referensi";
$tdatatb_tugas[".googleLikeFields"][] = "nama";


$tdatatb_tugas[".advSearchFields"][] = "nip";
$tdatatb_tugas[".advSearchFields"][] = "nama";
$tdatatb_tugas[".advSearchFields"][] = "dept";
$tdatatb_tugas[".advSearchFields"][] = "section";
$tdatatb_tugas[".advSearchFields"][] = "posisi";
$tdatatb_tugas[".advSearchFields"][] = "tglbayar";
$tdatatb_tugas[".advSearchFields"][] = "referensi";

$tdatatb_tugas[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatatb_tugas[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatb_tugas[".strOrderBy"] = $tstrOrderBy;

$tdatatb_tugas[".orderindexes"] = array();

$tdatatb_tugas[".sqlHead"] = "SELECT id,  nip,  dept,  `section`,  posisi,  forpay,  amount,  tglbayar,  referensi,  nama";
$tdatatb_tugas[".sqlFrom"] = "FROM tb_tugas";
$tdatatb_tugas[".sqlWhereExpr"] = "";
$tdatatb_tugas[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatb_tugas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatb_tugas[".arrGroupsPerPage"] = $arrGPP;

$tableKeystb_tugas = array();
$tableKeystb_tugas[] = "id";
$tdatatb_tugas[".Keys"] = $tableKeystb_tugas;

$tdatatb_tugas[".listFields"] = array();
$tdatatb_tugas[".listFields"][] = "nip";
$tdatatb_tugas[".listFields"][] = "nama";
$tdatatb_tugas[".listFields"][] = "dept";
$tdatatb_tugas[".listFields"][] = "section";
$tdatatb_tugas[".listFields"][] = "posisi";
$tdatatb_tugas[".listFields"][] = "forpay";
$tdatatb_tugas[".listFields"][] = "amount";
$tdatatb_tugas[".listFields"][] = "tglbayar";
$tdatatb_tugas[".listFields"][] = "referensi";

$tdatatb_tugas[".viewFields"] = array();
$tdatatb_tugas[".viewFields"][] = "nip";
$tdatatb_tugas[".viewFields"][] = "nama";
$tdatatb_tugas[".viewFields"][] = "dept";
$tdatatb_tugas[".viewFields"][] = "section";
$tdatatb_tugas[".viewFields"][] = "posisi";
$tdatatb_tugas[".viewFields"][] = "forpay";
$tdatatb_tugas[".viewFields"][] = "amount";
$tdatatb_tugas[".viewFields"][] = "tglbayar";
$tdatatb_tugas[".viewFields"][] = "referensi";

$tdatatb_tugas[".addFields"] = array();
$tdatatb_tugas[".addFields"][] = "nip";
$tdatatb_tugas[".addFields"][] = "nama";
$tdatatb_tugas[".addFields"][] = "dept";
$tdatatb_tugas[".addFields"][] = "section";
$tdatatb_tugas[".addFields"][] = "posisi";
$tdatatb_tugas[".addFields"][] = "forpay";
$tdatatb_tugas[".addFields"][] = "amount";
$tdatatb_tugas[".addFields"][] = "tglbayar";
$tdatatb_tugas[".addFields"][] = "referensi";

$tdatatb_tugas[".inlineAddFields"] = array();

$tdatatb_tugas[".editFields"] = array();

$tdatatb_tugas[".inlineEditFields"] = array();

$tdatatb_tugas[".exportFields"] = array();
$tdatatb_tugas[".exportFields"][] = "nip";
$tdatatb_tugas[".exportFields"][] = "nama";
$tdatatb_tugas[".exportFields"][] = "dept";
$tdatatb_tugas[".exportFields"][] = "section";
$tdatatb_tugas[".exportFields"][] = "posisi";
$tdatatb_tugas[".exportFields"][] = "forpay";
$tdatatb_tugas[".exportFields"][] = "amount";
$tdatatb_tugas[".exportFields"][] = "tglbayar";
$tdatatb_tugas[".exportFields"][] = "referensi";

$tdatatb_tugas[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "tb_tugas";
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
	
		
		
	$tdatatb_tugas["id"] = $fdata;
//	nip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nip";
	$fdata["GoodName"] = "nip";
	$fdata["ownerTable"] = "tb_tugas";
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
	
		
		
	$tdatatb_tugas["nip"] = $fdata;
//	dept
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "dept";
	$fdata["GoodName"] = "dept";
	$fdata["ownerTable"] = "tb_tugas";
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
			$edata["EditParams"].= " maxlength=3";
	
		$edata["inputStyle"] = " width:252px;";
	$edata["controlWidth"] = 252;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_tugas["dept"] = $fdata;
//	section
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "section";
	$fdata["GoodName"] = "section";
	$fdata["ownerTable"] = "tb_tugas";
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
			$edata["EditParams"].= " maxlength=3";
	
		$edata["inputStyle"] = " width:251px;";
	$edata["controlWidth"] = 251;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_tugas["section"] = $fdata;
//	posisi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "posisi";
	$fdata["GoodName"] = "posisi";
	$fdata["ownerTable"] = "tb_tugas";
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
			$edata["EditParams"].= " maxlength=30";
	
		$edata["inputStyle"] = " width:254px;";
	$edata["controlWidth"] = 254;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_tugas["posisi"] = $fdata;
//	forpay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "forpay";
	$fdata["GoodName"] = "forpay";
	$fdata["ownerTable"] = "tb_tugas";
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
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			$edata["LookupUnique"] = true;
	
	$edata["LinkField"] = "pilihan";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "pilihan";
	
		
	$edata["LookupTable"] = "tb_piltugas";
	$edata["LookupOrderBy"] = "pilihan";
	
		
		
		
		
		$edata["AllowToAdd"] = true; 
	
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_tugas["forpay"] = $fdata;
//	amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "amount";
	$fdata["GoodName"] = "amount";
	$fdata["ownerTable"] = "tb_tugas";
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
	
		
		
	$tdatatb_tugas["amount"] = $fdata;
//	tglbayar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "tglbayar";
	$fdata["GoodName"] = "tglbayar";
	$fdata["ownerTable"] = "tb_tugas";
	$fdata["Label"] = "TGL PEMBAYARAN"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
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
	
		
		
	$tdatatb_tugas["tglbayar"] = $fdata;
//	referensi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "referensi";
	$fdata["GoodName"] = "referensi";
	$fdata["ownerTable"] = "tb_tugas";
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
	
		
		
	$tdatatb_tugas["referensi"] = $fdata;
//	nama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "nama";
	$fdata["GoodName"] = "nama";
	$fdata["ownerTable"] = "tb_tugas";
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
			
		$edata["inputStyle"] = " width:252px;";
	$edata["controlWidth"] = 252;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_tugas["nama"] = $fdata;

	
$tables_data["tb_tugas"]=&$tdatatb_tugas;
$field_labels["tb_tugas"] = &$fieldLabelstb_tugas;
$fieldToolTips["tb_tugas"] = &$fieldToolTipstb_tugas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tb_tugas"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["tb_tugas"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_tb_tugas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  nip,  dept,  `section`,  posisi,  forpay,  amount,  tglbayar,  referensi,  nama";
$proto0["m_strFrom"] = "FROM tb_tugas";
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
	"m_strTable" => "tb_tugas"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "nip",
	"m_strTable" => "tb_tugas"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "dept",
	"m_strTable" => "tb_tugas"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "section",
	"m_strTable" => "tb_tugas"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "posisi",
	"m_strTable" => "tb_tugas"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "forpay"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "tb_tugas"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "tglbayar",
	"m_strTable" => "tb_tugas"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "referensi",
	"m_strTable" => "tb_tugas"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "nama",
	"m_strTable" => "tb_tugas"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto25=array();
$proto25["m_link"] = "SQLL_MAIN";
			$proto26=array();
$proto26["m_strName"] = "tb_tugas";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "id";
$proto26["m_columns"][] = "nip";
$proto26["m_columns"][] = "dept";
$proto26["m_columns"][] = "section";
$proto26["m_columns"][] = "posisi";
$proto26["m_columns"][] = "forpaytugas";
$proto26["m_columns"][] = "amount";
$proto26["m_columns"][] = "tglbayar";
$proto26["m_columns"][] = "referensi";
$proto26["m_columns"][] = "nama";
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
$queryData_tb_tugas = createSqlQuery_tb_tugas();
										$tdatatb_tugas[".sqlquery"] = $queryData_tb_tugas;
	
if(isset($tdatatb_tugas["field2"])){
	$tdatatb_tugas["field2"]["LookupTable"] = "carscars_view";
	$tdatatb_tugas["field2"]["LookupOrderBy"] = "name";
	$tdatatb_tugas["field2"]["LookupType"] = 4;
	$tdatatb_tugas["field2"]["LinkField"] = "email";
	$tdatatb_tugas["field2"]["DisplayField"] = "name";
	$tdatatb_tugas[".hasCustomViewField"] = true;
}

include_once(getabspath("include/tb_tugas_events.php"));
$tableEvents["tb_tugas"] = new eventclass_tb_tugas;
$tdatatb_tugas[".hasEvents"] = true;

$cipherer = new RunnerCipherer("tb_tugas");

?>