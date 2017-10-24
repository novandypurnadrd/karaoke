<?php
require_once(getabspath("classes/cipherer.php"));
$tdatadb_karyawan = array();
	$tdatadb_karyawan[".NumberOfChars"] = 80; 
	$tdatadb_karyawan[".ShortName"] = "db_karyawan";
	$tdatadb_karyawan[".OwnerID"] = "";
	$tdatadb_karyawan[".OriginalTable"] = "db_karyawan";

//	field labels
$fieldLabelsdb_karyawan = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdb_karyawan["English"] = array();
	$fieldToolTipsdb_karyawan["English"] = array();
	$fieldLabelsdb_karyawan["English"]["Id"] = "Id";
	$fieldToolTipsdb_karyawan["English"]["Id"] = "";
	$fieldLabelsdb_karyawan["English"]["NIK"] = "NIK";
	$fieldToolTipsdb_karyawan["English"]["NIK"] = "";
	$fieldLabelsdb_karyawan["English"]["Nama_Karyawan"] = "Nama Karyawan";
	$fieldToolTipsdb_karyawan["English"]["Nama_Karyawan"] = "";
	$fieldLabelsdb_karyawan["English"]["Sex"] = "Sex";
	$fieldToolTipsdb_karyawan["English"]["Sex"] = "";
	$fieldLabelsdb_karyawan["English"]["POB"] = "POB";
	$fieldToolTipsdb_karyawan["English"]["POB"] = "";
	$fieldLabelsdb_karyawan["English"]["DOB"] = "DOB";
	$fieldToolTipsdb_karyawan["English"]["DOB"] = "";
	$fieldLabelsdb_karyawan["English"]["Tax_Status"] = "Tax Status";
	$fieldToolTipsdb_karyawan["English"]["Tax_Status"] = "";
	$fieldLabelsdb_karyawan["English"]["Address_Nama_Jalan"] = "Address Nama Jalan";
	$fieldToolTipsdb_karyawan["English"]["Address_Nama_Jalan"] = "";
	$fieldLabelsdb_karyawan["English"]["Address_Nama_Desa"] = "Address Nama Desa";
	$fieldToolTipsdb_karyawan["English"]["Address_Nama_Desa"] = "";
	$fieldLabelsdb_karyawan["English"]["Address_Nama_Kec"] = "Address Nama Kec";
	$fieldToolTipsdb_karyawan["English"]["Address_Nama_Kec"] = "";
	$fieldLabelsdb_karyawan["English"]["Address_Nama_Kab"] = "Address Nama Kab";
	$fieldToolTipsdb_karyawan["English"]["Address_Nama_Kab"] = "";
	$fieldLabelsdb_karyawan["English"]["Address_Nama_Prov"] = "Address Nama Prov";
	$fieldToolTipsdb_karyawan["English"]["Address_Nama_Prov"] = "";
	$fieldLabelsdb_karyawan["English"]["Telp"] = "Telp";
	$fieldToolTipsdb_karyawan["English"]["Telp"] = "";
	$fieldLabelsdb_karyawan["English"]["Position"] = "Position";
	$fieldToolTipsdb_karyawan["English"]["Position"] = "";
	$fieldLabelsdb_karyawan["English"]["Classification"] = "Classification";
	$fieldToolTipsdb_karyawan["English"]["Classification"] = "";
	$fieldLabelsdb_karyawan["English"]["Section"] = "Section";
	$fieldToolTipsdb_karyawan["English"]["Section"] = "";
	$fieldLabelsdb_karyawan["English"]["nama"] = "Nama";
	$fieldToolTipsdb_karyawan["English"]["nama"] = "";
	$fieldLabelsdb_karyawan["English"][""] = "";
	$fieldToolTipsdb_karyawan["English"][""] = "";
	$fieldLabelsdb_karyawan["English"][""] = "";
	$fieldToolTipsdb_karyawan["English"][""] = "";
	$fieldLabelsdb_karyawan["English"]["nip"] = "Nip";
	$fieldToolTipsdb_karyawan["English"]["nip"] = "";
	$fieldLabelsdb_karyawan["English"]["Department"] = "Department";
	$fieldToolTipsdb_karyawan["English"]["Department"] = "";
	$fieldLabelsdb_karyawan["English"]["dept"] = "Dept";
	$fieldToolTipsdb_karyawan["English"]["dept"] = "";
	$fieldLabelsdb_karyawan["English"]["section"] = "Section";
	$fieldToolTipsdb_karyawan["English"]["section"] = "";
	$fieldLabelsdb_karyawan["English"]["posisi"] = "Posisi";
	$fieldToolTipsdb_karyawan["English"]["posisi"] = "";
	$fieldLabelsdb_karyawan["English"]["nik"] = "Nik";
	$fieldToolTipsdb_karyawan["English"]["nik"] = "";
	$fieldLabelsdb_karyawan["English"]["department"] = "Department";
	$fieldToolTipsdb_karyawan["English"]["department"] = "";
	if (count($fieldToolTipsdb_karyawan["English"]))
		$tdatadb_karyawan[".isUseToolTips"] = true;
}
	
	
	$tdatadb_karyawan[".NCSearch"] = true;



$tdatadb_karyawan[".shortTableName"] = "db_karyawan";
$tdatadb_karyawan[".nSecOptions"] = 0;
$tdatadb_karyawan[".recsPerRowList"] = 1;
$tdatadb_karyawan[".mainTableOwnerID"] = "";
$tdatadb_karyawan[".moveNext"] = 1;
$tdatadb_karyawan[".nType"] = 0;

$tdatadb_karyawan[".strOriginalTableName"] = "db_karyawan";




$tdatadb_karyawan[".showAddInPopup"] = false;

$tdatadb_karyawan[".showEditInPopup"] = false;

$tdatadb_karyawan[".showViewInPopup"] = false;

$tdatadb_karyawan[".fieldsForRegister"] = array();

$tdatadb_karyawan[".listAjax"] = false;

	$tdatadb_karyawan[".audit"] = false;

	$tdatadb_karyawan[".locking"] = false;

$tdatadb_karyawan[".listIcons"] = true;
$tdatadb_karyawan[".edit"] = true;
$tdatadb_karyawan[".inlineEdit"] = true;
$tdatadb_karyawan[".inlineAdd"] = true;
$tdatadb_karyawan[".view"] = true;

$tdatadb_karyawan[".exportTo"] = true;

$tdatadb_karyawan[".printFriendly"] = true;

$tdatadb_karyawan[".delete"] = true;

$tdatadb_karyawan[".showSimpleSearchOptions"] = false;

$tdatadb_karyawan[".showSearchPanel"] = true;

if (isMobile())
	$tdatadb_karyawan[".isUseAjaxSuggest"] = false;
else 
	$tdatadb_karyawan[".isUseAjaxSuggest"] = true;

$tdatadb_karyawan[".rowHighlite"] = true;

// button handlers file names

$tdatadb_karyawan[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadb_karyawan[".isUseTimeForSearch"] = false;




$tdatadb_karyawan[".allSearchFields"] = array();

$tdatadb_karyawan[".allSearchFields"][] = "Id";
$tdatadb_karyawan[".allSearchFields"][] = "NIK";
$tdatadb_karyawan[".allSearchFields"][] = "Nama_Karyawan";
$tdatadb_karyawan[".allSearchFields"][] = "Sex";
$tdatadb_karyawan[".allSearchFields"][] = "POB";
$tdatadb_karyawan[".allSearchFields"][] = "DOB";
$tdatadb_karyawan[".allSearchFields"][] = "Tax_Status";
$tdatadb_karyawan[".allSearchFields"][] = "Address_Nama_Jalan";
$tdatadb_karyawan[".allSearchFields"][] = "Address_Nama_Desa";
$tdatadb_karyawan[".allSearchFields"][] = "Address_Nama_Kec";
$tdatadb_karyawan[".allSearchFields"][] = "Address_Nama_Kab";
$tdatadb_karyawan[".allSearchFields"][] = "Address_Nama_Prov";
$tdatadb_karyawan[".allSearchFields"][] = "Telp";
$tdatadb_karyawan[".allSearchFields"][] = "Position";
$tdatadb_karyawan[".allSearchFields"][] = "Classification";
$tdatadb_karyawan[".allSearchFields"][] = "Section";
$tdatadb_karyawan[".allSearchFields"][] = "Department";

$tdatadb_karyawan[".googleLikeFields"][] = "Id";
$tdatadb_karyawan[".googleLikeFields"][] = "NIK";
$tdatadb_karyawan[".googleLikeFields"][] = "Nama_Karyawan";
$tdatadb_karyawan[".googleLikeFields"][] = "Sex";
$tdatadb_karyawan[".googleLikeFields"][] = "POB";
$tdatadb_karyawan[".googleLikeFields"][] = "DOB";
$tdatadb_karyawan[".googleLikeFields"][] = "Tax_Status";
$tdatadb_karyawan[".googleLikeFields"][] = "Address_Nama_Jalan";
$tdatadb_karyawan[".googleLikeFields"][] = "Address_Nama_Desa";
$tdatadb_karyawan[".googleLikeFields"][] = "Address_Nama_Kec";
$tdatadb_karyawan[".googleLikeFields"][] = "Address_Nama_Kab";
$tdatadb_karyawan[".googleLikeFields"][] = "Address_Nama_Prov";
$tdatadb_karyawan[".googleLikeFields"][] = "Telp";
$tdatadb_karyawan[".googleLikeFields"][] = "Position";
$tdatadb_karyawan[".googleLikeFields"][] = "Classification";
$tdatadb_karyawan[".googleLikeFields"][] = "Section";
$tdatadb_karyawan[".googleLikeFields"][] = "Department";


$tdatadb_karyawan[".advSearchFields"][] = "Id";
$tdatadb_karyawan[".advSearchFields"][] = "NIK";
$tdatadb_karyawan[".advSearchFields"][] = "Nama_Karyawan";
$tdatadb_karyawan[".advSearchFields"][] = "Sex";
$tdatadb_karyawan[".advSearchFields"][] = "POB";
$tdatadb_karyawan[".advSearchFields"][] = "DOB";
$tdatadb_karyawan[".advSearchFields"][] = "Tax_Status";
$tdatadb_karyawan[".advSearchFields"][] = "Address_Nama_Jalan";
$tdatadb_karyawan[".advSearchFields"][] = "Address_Nama_Desa";
$tdatadb_karyawan[".advSearchFields"][] = "Address_Nama_Kec";
$tdatadb_karyawan[".advSearchFields"][] = "Address_Nama_Kab";
$tdatadb_karyawan[".advSearchFields"][] = "Address_Nama_Prov";
$tdatadb_karyawan[".advSearchFields"][] = "Telp";
$tdatadb_karyawan[".advSearchFields"][] = "Position";
$tdatadb_karyawan[".advSearchFields"][] = "Classification";
$tdatadb_karyawan[".advSearchFields"][] = "Section";
$tdatadb_karyawan[".advSearchFields"][] = "Department";

$tdatadb_karyawan[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatadb_karyawan[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadb_karyawan[".strOrderBy"] = $tstrOrderBy;

$tdatadb_karyawan[".orderindexes"] = array();

$tdatadb_karyawan[".sqlHead"] = "SELECT Id,  NIK,  Nama_Karyawan,  Sex,  POB,  DOB,  Tax_Status,  Address_Nama_Jalan,  Address_Nama_Desa,  Address_Nama_Kec,  Address_Nama_Kab,  Address_Nama_Prov,  Telp,  `Position`,  Classification,  `Section`,  Department";
$tdatadb_karyawan[".sqlFrom"] = "FROM db_karyawan";
$tdatadb_karyawan[".sqlWhereExpr"] = "";
$tdatadb_karyawan[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadb_karyawan[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadb_karyawan[".arrGroupsPerPage"] = $arrGPP;

$tableKeysdb_karyawan = array();
$tableKeysdb_karyawan[] = "Id";
$tdatadb_karyawan[".Keys"] = $tableKeysdb_karyawan;

$tdatadb_karyawan[".listFields"] = array();
$tdatadb_karyawan[".listFields"][] = "Department";
$tdatadb_karyawan[".listFields"][] = "Id";
$tdatadb_karyawan[".listFields"][] = "NIK";
$tdatadb_karyawan[".listFields"][] = "Nama_Karyawan";
$tdatadb_karyawan[".listFields"][] = "Sex";
$tdatadb_karyawan[".listFields"][] = "POB";
$tdatadb_karyawan[".listFields"][] = "DOB";
$tdatadb_karyawan[".listFields"][] = "Tax_Status";
$tdatadb_karyawan[".listFields"][] = "Address_Nama_Jalan";
$tdatadb_karyawan[".listFields"][] = "Address_Nama_Desa";
$tdatadb_karyawan[".listFields"][] = "Address_Nama_Kec";
$tdatadb_karyawan[".listFields"][] = "Address_Nama_Kab";
$tdatadb_karyawan[".listFields"][] = "Address_Nama_Prov";
$tdatadb_karyawan[".listFields"][] = "Telp";
$tdatadb_karyawan[".listFields"][] = "Position";
$tdatadb_karyawan[".listFields"][] = "Classification";
$tdatadb_karyawan[".listFields"][] = "Section";

$tdatadb_karyawan[".viewFields"] = array();
$tdatadb_karyawan[".viewFields"][] = "Id";
$tdatadb_karyawan[".viewFields"][] = "NIK";
$tdatadb_karyawan[".viewFields"][] = "Nama_Karyawan";
$tdatadb_karyawan[".viewFields"][] = "Sex";
$tdatadb_karyawan[".viewFields"][] = "POB";
$tdatadb_karyawan[".viewFields"][] = "DOB";
$tdatadb_karyawan[".viewFields"][] = "Tax_Status";
$tdatadb_karyawan[".viewFields"][] = "Address_Nama_Jalan";
$tdatadb_karyawan[".viewFields"][] = "Address_Nama_Desa";
$tdatadb_karyawan[".viewFields"][] = "Address_Nama_Kec";
$tdatadb_karyawan[".viewFields"][] = "Address_Nama_Kab";
$tdatadb_karyawan[".viewFields"][] = "Address_Nama_Prov";
$tdatadb_karyawan[".viewFields"][] = "Telp";
$tdatadb_karyawan[".viewFields"][] = "Position";
$tdatadb_karyawan[".viewFields"][] = "Classification";
$tdatadb_karyawan[".viewFields"][] = "Section";
$tdatadb_karyawan[".viewFields"][] = "Department";

$tdatadb_karyawan[".addFields"] = array();
$tdatadb_karyawan[".addFields"][] = "NIK";
$tdatadb_karyawan[".addFields"][] = "Nama_Karyawan";
$tdatadb_karyawan[".addFields"][] = "Sex";
$tdatadb_karyawan[".addFields"][] = "POB";
$tdatadb_karyawan[".addFields"][] = "DOB";
$tdatadb_karyawan[".addFields"][] = "Tax_Status";
$tdatadb_karyawan[".addFields"][] = "Address_Nama_Jalan";
$tdatadb_karyawan[".addFields"][] = "Address_Nama_Desa";
$tdatadb_karyawan[".addFields"][] = "Address_Nama_Kec";
$tdatadb_karyawan[".addFields"][] = "Address_Nama_Kab";
$tdatadb_karyawan[".addFields"][] = "Address_Nama_Prov";
$tdatadb_karyawan[".addFields"][] = "Telp";
$tdatadb_karyawan[".addFields"][] = "Position";
$tdatadb_karyawan[".addFields"][] = "Classification";
$tdatadb_karyawan[".addFields"][] = "Section";
$tdatadb_karyawan[".addFields"][] = "Department";

$tdatadb_karyawan[".inlineAddFields"] = array();
$tdatadb_karyawan[".inlineAddFields"][] = "Department";
$tdatadb_karyawan[".inlineAddFields"][] = "NIK";
$tdatadb_karyawan[".inlineAddFields"][] = "Nama_Karyawan";
$tdatadb_karyawan[".inlineAddFields"][] = "Sex";
$tdatadb_karyawan[".inlineAddFields"][] = "POB";
$tdatadb_karyawan[".inlineAddFields"][] = "DOB";
$tdatadb_karyawan[".inlineAddFields"][] = "Tax_Status";
$tdatadb_karyawan[".inlineAddFields"][] = "Address_Nama_Jalan";
$tdatadb_karyawan[".inlineAddFields"][] = "Address_Nama_Desa";
$tdatadb_karyawan[".inlineAddFields"][] = "Address_Nama_Kec";
$tdatadb_karyawan[".inlineAddFields"][] = "Address_Nama_Kab";
$tdatadb_karyawan[".inlineAddFields"][] = "Address_Nama_Prov";
$tdatadb_karyawan[".inlineAddFields"][] = "Telp";
$tdatadb_karyawan[".inlineAddFields"][] = "Position";
$tdatadb_karyawan[".inlineAddFields"][] = "Classification";
$tdatadb_karyawan[".inlineAddFields"][] = "Section";

$tdatadb_karyawan[".editFields"] = array();
$tdatadb_karyawan[".editFields"][] = "NIK";
$tdatadb_karyawan[".editFields"][] = "Nama_Karyawan";
$tdatadb_karyawan[".editFields"][] = "Sex";
$tdatadb_karyawan[".editFields"][] = "POB";
$tdatadb_karyawan[".editFields"][] = "DOB";
$tdatadb_karyawan[".editFields"][] = "Tax_Status";
$tdatadb_karyawan[".editFields"][] = "Address_Nama_Jalan";
$tdatadb_karyawan[".editFields"][] = "Address_Nama_Desa";
$tdatadb_karyawan[".editFields"][] = "Address_Nama_Kec";
$tdatadb_karyawan[".editFields"][] = "Address_Nama_Kab";
$tdatadb_karyawan[".editFields"][] = "Address_Nama_Prov";
$tdatadb_karyawan[".editFields"][] = "Telp";
$tdatadb_karyawan[".editFields"][] = "Position";
$tdatadb_karyawan[".editFields"][] = "Classification";
$tdatadb_karyawan[".editFields"][] = "Section";
$tdatadb_karyawan[".editFields"][] = "Department";

$tdatadb_karyawan[".inlineEditFields"] = array();
$tdatadb_karyawan[".inlineEditFields"][] = "Department";
$tdatadb_karyawan[".inlineEditFields"][] = "NIK";
$tdatadb_karyawan[".inlineEditFields"][] = "Nama_Karyawan";
$tdatadb_karyawan[".inlineEditFields"][] = "Sex";
$tdatadb_karyawan[".inlineEditFields"][] = "POB";
$tdatadb_karyawan[".inlineEditFields"][] = "DOB";
$tdatadb_karyawan[".inlineEditFields"][] = "Tax_Status";
$tdatadb_karyawan[".inlineEditFields"][] = "Address_Nama_Jalan";
$tdatadb_karyawan[".inlineEditFields"][] = "Address_Nama_Desa";
$tdatadb_karyawan[".inlineEditFields"][] = "Address_Nama_Kec";
$tdatadb_karyawan[".inlineEditFields"][] = "Address_Nama_Kab";
$tdatadb_karyawan[".inlineEditFields"][] = "Address_Nama_Prov";
$tdatadb_karyawan[".inlineEditFields"][] = "Telp";
$tdatadb_karyawan[".inlineEditFields"][] = "Position";
$tdatadb_karyawan[".inlineEditFields"][] = "Classification";
$tdatadb_karyawan[".inlineEditFields"][] = "Section";

$tdatadb_karyawan[".exportFields"] = array();
$tdatadb_karyawan[".exportFields"][] = "Id";
$tdatadb_karyawan[".exportFields"][] = "NIK";
$tdatadb_karyawan[".exportFields"][] = "Nama_Karyawan";
$tdatadb_karyawan[".exportFields"][] = "Sex";
$tdatadb_karyawan[".exportFields"][] = "POB";
$tdatadb_karyawan[".exportFields"][] = "DOB";
$tdatadb_karyawan[".exportFields"][] = "Tax_Status";
$tdatadb_karyawan[".exportFields"][] = "Address_Nama_Jalan";
$tdatadb_karyawan[".exportFields"][] = "Address_Nama_Desa";
$tdatadb_karyawan[".exportFields"][] = "Address_Nama_Kec";
$tdatadb_karyawan[".exportFields"][] = "Address_Nama_Kab";
$tdatadb_karyawan[".exportFields"][] = "Address_Nama_Prov";
$tdatadb_karyawan[".exportFields"][] = "Telp";
$tdatadb_karyawan[".exportFields"][] = "Position";
$tdatadb_karyawan[".exportFields"][] = "Classification";
$tdatadb_karyawan[".exportFields"][] = "Section";
$tdatadb_karyawan[".exportFields"][] = "Department";

$tdatadb_karyawan[".printFields"] = array();
$tdatadb_karyawan[".printFields"][] = "Id";
$tdatadb_karyawan[".printFields"][] = "NIK";
$tdatadb_karyawan[".printFields"][] = "Nama_Karyawan";
$tdatadb_karyawan[".printFields"][] = "Sex";
$tdatadb_karyawan[".printFields"][] = "POB";
$tdatadb_karyawan[".printFields"][] = "DOB";
$tdatadb_karyawan[".printFields"][] = "Tax_Status";
$tdatadb_karyawan[".printFields"][] = "Address_Nama_Jalan";
$tdatadb_karyawan[".printFields"][] = "Address_Nama_Desa";
$tdatadb_karyawan[".printFields"][] = "Address_Nama_Kec";
$tdatadb_karyawan[".printFields"][] = "Address_Nama_Kab";
$tdatadb_karyawan[".printFields"][] = "Address_Nama_Prov";
$tdatadb_karyawan[".printFields"][] = "Telp";
$tdatadb_karyawan[".printFields"][] = "Position";
$tdatadb_karyawan[".printFields"][] = "Classification";
$tdatadb_karyawan[".printFields"][] = "Section";
$tdatadb_karyawan[".printFields"][] = "Department";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "db_karyawan";
	$fdata["Label"] = "Id"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Id"; 
		$fdata["FullName"] = "Id";
	
		
		
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
	
		
		
	$tdatadb_karyawan["Id"] = $fdata;
//	NIK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NIK";
	$fdata["GoodName"] = "NIK";
	$fdata["ownerTable"] = "db_karyawan";
	$fdata["Label"] = "NIK"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "NIK"; 
		$fdata["FullName"] = "NIK";
	
		
		
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatadb_karyawan["NIK"] = $fdata;
//	Nama_Karyawan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Nama_Karyawan";
	$fdata["GoodName"] = "Nama_Karyawan";
	$fdata["ownerTable"] = "db_karyawan";
	$fdata["Label"] = "Nama Karyawan"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Nama_Karyawan"; 
		$fdata["FullName"] = "Nama_Karyawan";
	
		
		
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
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatadb_karyawan["Nama_Karyawan"] = $fdata;
//	Sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Sex";
	$fdata["GoodName"] = "Sex";
	$fdata["ownerTable"] = "db_karyawan";
	$fdata["Label"] = "Sex"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Sex"; 
		$fdata["FullName"] = "Sex";
	
		
		
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
			$edata["EditParams"].= " maxlength=15";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatadb_karyawan["Sex"] = $fdata;
//	POB
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "POB";
	$fdata["GoodName"] = "POB";
	$fdata["ownerTable"] = "db_karyawan";
	$fdata["Label"] = "POB"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "POB"; 
		$fdata["FullName"] = "POB";
	
		
		
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
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatadb_karyawan["POB"] = $fdata;
//	DOB
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DOB";
	$fdata["GoodName"] = "DOB";
	$fdata["ownerTable"] = "db_karyawan";
	$fdata["Label"] = "DOB"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "DOB"; 
		$fdata["FullName"] = "DOB";
	
		
		
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

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 2; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatadb_karyawan["DOB"] = $fdata;
//	Tax_Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Tax_Status";
	$fdata["GoodName"] = "Tax_Status";
	$fdata["ownerTable"] = "db_karyawan";
	$fdata["Label"] = "Tax Status"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Tax_Status"; 
		$fdata["FullName"] = "Tax_Status";
	
		
		
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
			$edata["EditParams"].= " maxlength=5";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatadb_karyawan["Tax_Status"] = $fdata;
//	Address_Nama_Jalan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Address_Nama_Jalan";
	$fdata["GoodName"] = "Address_Nama_Jalan";
	$fdata["ownerTable"] = "db_karyawan";
	$fdata["Label"] = "Address Nama Jalan"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Address_Nama_Jalan"; 
		$fdata["FullName"] = "Address_Nama_Jalan";
	
		
		
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
			$edata["EditParams"].= " maxlength=100";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatadb_karyawan["Address_Nama_Jalan"] = $fdata;
//	Address_Nama_Desa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Address_Nama_Desa";
	$fdata["GoodName"] = "Address_Nama_Desa";
	$fdata["ownerTable"] = "db_karyawan";
	$fdata["Label"] = "Address Nama Desa"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Address_Nama_Desa"; 
		$fdata["FullName"] = "Address_Nama_Desa";
	
		
		
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
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatadb_karyawan["Address_Nama_Desa"] = $fdata;
//	Address_Nama_Kec
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Address_Nama_Kec";
	$fdata["GoodName"] = "Address_Nama_Kec";
	$fdata["ownerTable"] = "db_karyawan";
	$fdata["Label"] = "Address Nama Kec"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Address_Nama_Kec"; 
		$fdata["FullName"] = "Address_Nama_Kec";
	
		
		
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
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatadb_karyawan["Address_Nama_Kec"] = $fdata;
//	Address_Nama_Kab
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Address_Nama_Kab";
	$fdata["GoodName"] = "Address_Nama_Kab";
	$fdata["ownerTable"] = "db_karyawan";
	$fdata["Label"] = "Address Nama Kab"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Address_Nama_Kab"; 
		$fdata["FullName"] = "Address_Nama_Kab";
	
		
		
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
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatadb_karyawan["Address_Nama_Kab"] = $fdata;
//	Address_Nama_Prov
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Address_Nama_Prov";
	$fdata["GoodName"] = "Address_Nama_Prov";
	$fdata["ownerTable"] = "db_karyawan";
	$fdata["Label"] = "Address Nama Prov"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Address_Nama_Prov"; 
		$fdata["FullName"] = "Address_Nama_Prov";
	
		
		
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
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatadb_karyawan["Address_Nama_Prov"] = $fdata;
//	Telp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Telp";
	$fdata["GoodName"] = "Telp";
	$fdata["ownerTable"] = "db_karyawan";
	$fdata["Label"] = "Telp"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Telp"; 
		$fdata["FullName"] = "Telp";
	
		
		
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
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatadb_karyawan["Telp"] = $fdata;
//	Position
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Position";
	$fdata["GoodName"] = "Position";
	$fdata["ownerTable"] = "db_karyawan";
	$fdata["Label"] = "Position"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Position"; 
		$fdata["FullName"] = "`Position`";
	
		
		
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
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatadb_karyawan["Position"] = $fdata;
//	Classification
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Classification";
	$fdata["GoodName"] = "Classification";
	$fdata["ownerTable"] = "db_karyawan";
	$fdata["Label"] = "Classification"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Classification"; 
		$fdata["FullName"] = "Classification";
	
		
		
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
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatadb_karyawan["Classification"] = $fdata;
//	Section
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Section";
	$fdata["GoodName"] = "Section";
	$fdata["ownerTable"] = "db_karyawan";
	$fdata["Label"] = "Section"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Section"; 
		$fdata["FullName"] = "`Section`";
	
		
		
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
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatadb_karyawan["Section"] = $fdata;
//	Department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Department";
	$fdata["GoodName"] = "Department";
	$fdata["ownerTable"] = "db_karyawan";
	$fdata["Label"] = "Department"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Department"; 
		$fdata["FullName"] = "Department";
	
		
		
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
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatadb_karyawan["Department"] = $fdata;

	
$tables_data["db_karyawan"]=&$tdatadb_karyawan;
$field_labels["db_karyawan"] = &$fieldLabelsdb_karyawan;
$fieldToolTips["db_karyawan"] = &$fieldToolTipsdb_karyawan;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["db_karyawan"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["db_karyawan"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_db_karyawan()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,  NIK,  Nama_Karyawan,  Sex,  POB,  DOB,  Tax_Status,  Address_Nama_Jalan,  Address_Nama_Desa,  Address_Nama_Kec,  Address_Nama_Kab,  Address_Nama_Prov,  Telp,  `Position`,  Classification,  `Section`,  Department";
$proto0["m_strFrom"] = "FROM db_karyawan";
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
	"m_strName" => "Id",
	"m_strTable" => "db_karyawan"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "NIK",
	"m_strTable" => "db_karyawan"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Nama_Karyawan",
	"m_strTable" => "db_karyawan"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Sex",
	"m_strTable" => "db_karyawan"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "POB",
	"m_strTable" => "db_karyawan"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "DOB",
	"m_strTable" => "db_karyawan"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Tax_Status",
	"m_strTable" => "db_karyawan"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Address_Nama_Jalan",
	"m_strTable" => "db_karyawan"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "Address_Nama_Desa",
	"m_strTable" => "db_karyawan"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Address_Nama_Kec",
	"m_strTable" => "db_karyawan"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "Address_Nama_Kab",
	"m_strTable" => "db_karyawan"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "Address_Nama_Prov",
	"m_strTable" => "db_karyawan"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "Telp",
	"m_strTable" => "db_karyawan"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "Position",
	"m_strTable" => "db_karyawan"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "Classification",
	"m_strTable" => "db_karyawan"
));

$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "Section",
	"m_strTable" => "db_karyawan"
));

$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "Department",
	"m_strTable" => "db_karyawan"
));

$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto39=array();
$proto39["m_link"] = "SQLL_MAIN";
			$proto40=array();
$proto40["m_strName"] = "db_karyawan";
$proto40["m_columns"] = array();
$proto40["m_columns"][] = "Id";
$proto40["m_columns"][] = "NIK";
$proto40["m_columns"][] = "Nama_Karyawan";
$proto40["m_columns"][] = "Sex";
$proto40["m_columns"][] = "POB";
$proto40["m_columns"][] = "DOB";
$proto40["m_columns"][] = "Tax_Status";
$proto40["m_columns"][] = "Address_Nama_Jalan";
$proto40["m_columns"][] = "Address_Nama_Desa";
$proto40["m_columns"][] = "Address_Nama_Kec";
$proto40["m_columns"][] = "Address_Nama_Kab";
$proto40["m_columns"][] = "Address_Nama_Prov";
$proto40["m_columns"][] = "Telp";
$proto40["m_columns"][] = "Position";
$proto40["m_columns"][] = "Classification";
$proto40["m_columns"][] = "Section";
$proto40["m_columns"][] = "Department";
$proto40["m_columns"][] = "DOH";
$proto40["m_columns"][] = "Jenis_Karyawan";
$proto40["m_columns"][] = "Status_Karyawan";
$proto40["m_columns"][] = "Date_SK_Permanent";
$proto40["m_columns"][] = "POH";
$proto40["m_columns"][] = "Jenis_POH";
$proto40["m_columns"][] = "No_Equity_card";
$proto40["m_columns"][] = "No_Jamsostek";
$proto40["m_columns"][] = "No_NPWP";
$proto40["m_columns"][] = "Lulusan";
$proto40["m_columns"][] = "Jurusan";
$proto40["m_columns"][] = "Nama_Sklh_Univ";
$proto40["m_columns"][] = "Remarks";
$obj = new SQLTable($proto40);

$proto39["m_table"] = $obj;
$proto39["m_alias"] = "";
$proto41=array();
$proto41["m_sql"] = "";
$proto41["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto41["m_column"]=$obj;
$proto41["m_contained"] = array();
$proto41["m_strCase"] = "";
$proto41["m_havingmode"] = "0";
$proto41["m_inBrackets"] = "0";
$proto41["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto41);

$proto39["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto39);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_db_karyawan = createSqlQuery_db_karyawan();
																	$tdatadb_karyawan[".sqlquery"] = $queryData_db_karyawan;
	
if(isset($tdatadb_karyawan["field2"])){
	$tdatadb_karyawan["field2"]["LookupTable"] = "carscars_view";
	$tdatadb_karyawan["field2"]["LookupOrderBy"] = "name";
	$tdatadb_karyawan["field2"]["LookupType"] = 4;
	$tdatadb_karyawan["field2"]["LinkField"] = "email";
	$tdatadb_karyawan["field2"]["DisplayField"] = "name";
	$tdatadb_karyawan[".hasCustomViewField"] = true;
}

$tableEvents["db_karyawan"] = new eventsBase;
$tdatadb_karyawan[".hasEvents"] = false;

$cipherer = new RunnerCipherer("db_karyawan");

?>