<?php
require_once(getabspath("classes/cipherer.php"));
$tdatatb_pihakketiga = array();
	$tdatatb_pihakketiga[".NumberOfChars"] = 80; 
	$tdatatb_pihakketiga[".ShortName"] = "tb_pihakketiga";
	$tdatatb_pihakketiga[".OwnerID"] = "";
	$tdatatb_pihakketiga[".OriginalTable"] = "tb_pihakketiga";

//	field labels
$fieldLabelstb_pihakketiga = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstb_pihakketiga["English"] = array();
	$fieldToolTipstb_pihakketiga["English"] = array();
	$fieldLabelstb_pihakketiga["English"]["id"] = "Id";
	$fieldToolTipstb_pihakketiga["English"]["id"] = "";
	$fieldLabelstb_pihakketiga["English"]["namainstansi"] = "NAMA INSTANSI";
	$fieldToolTipstb_pihakketiga["English"]["namainstansi"] = "";
	$fieldLabelstb_pihakketiga["English"]["jeniskeluar"] = "JENIS KELUAR";
	$fieldToolTipstb_pihakketiga["English"]["jeniskeluar"] = "";
	$fieldLabelstb_pihakketiga["English"]["amount"] = "JUMLAH KELUAR";
	$fieldToolTipstb_pihakketiga["English"]["amount"] = "";
	$fieldLabelstb_pihakketiga["English"]["tglbayar"] = "TGL PEMBAYARAN";
	$fieldToolTipstb_pihakketiga["English"]["tglbayar"] = "";
	$fieldLabelstb_pihakketiga["English"]["referensi"] = "REFERENSI";
	$fieldToolTipstb_pihakketiga["English"]["referensi"] = "";
	$fieldLabelstb_pihakketiga["English"][""] = "";
	$fieldToolTipstb_pihakketiga["English"][""] = "";
	$fieldLabelstb_pihakketiga["English"][""] = "PIHAK KETIGA";
	$fieldToolTipstb_pihakketiga["English"][""] = "";
	if (count($fieldToolTipstb_pihakketiga["English"]))
		$tdatatb_pihakketiga[".isUseToolTips"] = true;
}
	
	
	$tdatatb_pihakketiga[".NCSearch"] = true;



$tdatatb_pihakketiga[".shortTableName"] = "tb_pihakketiga";
$tdatatb_pihakketiga[".nSecOptions"] = 0;
$tdatatb_pihakketiga[".recsPerRowList"] = 1;
$tdatatb_pihakketiga[".mainTableOwnerID"] = "";
$tdatatb_pihakketiga[".moveNext"] = 1;
$tdatatb_pihakketiga[".nType"] = 0;

$tdatatb_pihakketiga[".strOriginalTableName"] = "tb_pihakketiga";




$tdatatb_pihakketiga[".showAddInPopup"] = false;

$tdatatb_pihakketiga[".showEditInPopup"] = false;

$tdatatb_pihakketiga[".showViewInPopup"] = false;

$tdatatb_pihakketiga[".fieldsForRegister"] = array();

$tdatatb_pihakketiga[".listAjax"] = false;

	$tdatatb_pihakketiga[".audit"] = false;

	$tdatatb_pihakketiga[".locking"] = false;

$tdatatb_pihakketiga[".listIcons"] = true;
$tdatatb_pihakketiga[".view"] = true;

$tdatatb_pihakketiga[".exportTo"] = true;

$tdatatb_pihakketiga[".printFriendly"] = true;

$tdatatb_pihakketiga[".delete"] = true;

$tdatatb_pihakketiga[".showSimpleSearchOptions"] = false;

$tdatatb_pihakketiga[".showSearchPanel"] = true;

if (isMobile())
	$tdatatb_pihakketiga[".isUseAjaxSuggest"] = false;
else 
	$tdatatb_pihakketiga[".isUseAjaxSuggest"] = true;

$tdatatb_pihakketiga[".rowHighlite"] = true;

// button handlers file names

$tdatatb_pihakketiga[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatb_pihakketiga[".isUseTimeForSearch"] = false;




$tdatatb_pihakketiga[".allSearchFields"] = array();

$tdatatb_pihakketiga[".allSearchFields"][] = "namainstansi";
$tdatatb_pihakketiga[".allSearchFields"][] = "tglbayar";
$tdatatb_pihakketiga[".allSearchFields"][] = "referensi";

$tdatatb_pihakketiga[".googleLikeFields"][] = "id";
$tdatatb_pihakketiga[".googleLikeFields"][] = "namainstansi";
$tdatatb_pihakketiga[".googleLikeFields"][] = "jeniskeluar";
$tdatatb_pihakketiga[".googleLikeFields"][] = "amount";
$tdatatb_pihakketiga[".googleLikeFields"][] = "tglbayar";
$tdatatb_pihakketiga[".googleLikeFields"][] = "referensi";


$tdatatb_pihakketiga[".advSearchFields"][] = "namainstansi";
$tdatatb_pihakketiga[".advSearchFields"][] = "tglbayar";
$tdatatb_pihakketiga[".advSearchFields"][] = "referensi";

$tdatatb_pihakketiga[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatatb_pihakketiga[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatb_pihakketiga[".strOrderBy"] = $tstrOrderBy;

$tdatatb_pihakketiga[".orderindexes"] = array();

$tdatatb_pihakketiga[".sqlHead"] = "SELECT id,   namainstansi,   jeniskeluar,   amount,   tglbayar,   referensi";
$tdatatb_pihakketiga[".sqlFrom"] = "FROM tb_pihakketiga";
$tdatatb_pihakketiga[".sqlWhereExpr"] = "";
$tdatatb_pihakketiga[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatb_pihakketiga[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatb_pihakketiga[".arrGroupsPerPage"] = $arrGPP;

$tableKeystb_pihakketiga = array();
$tableKeystb_pihakketiga[] = "id";
$tdatatb_pihakketiga[".Keys"] = $tableKeystb_pihakketiga;

$tdatatb_pihakketiga[".listFields"] = array();
$tdatatb_pihakketiga[".listFields"][] = "namainstansi";
$tdatatb_pihakketiga[".listFields"][] = "jeniskeluar";
$tdatatb_pihakketiga[".listFields"][] = "amount";
$tdatatb_pihakketiga[".listFields"][] = "tglbayar";
$tdatatb_pihakketiga[".listFields"][] = "referensi";

$tdatatb_pihakketiga[".viewFields"] = array();
$tdatatb_pihakketiga[".viewFields"][] = "namainstansi";
$tdatatb_pihakketiga[".viewFields"][] = "jeniskeluar";
$tdatatb_pihakketiga[".viewFields"][] = "amount";
$tdatatb_pihakketiga[".viewFields"][] = "tglbayar";
$tdatatb_pihakketiga[".viewFields"][] = "referensi";

$tdatatb_pihakketiga[".addFields"] = array();
$tdatatb_pihakketiga[".addFields"][] = "namainstansi";
$tdatatb_pihakketiga[".addFields"][] = "jeniskeluar";
$tdatatb_pihakketiga[".addFields"][] = "amount";
$tdatatb_pihakketiga[".addFields"][] = "tglbayar";
$tdatatb_pihakketiga[".addFields"][] = "referensi";

$tdatatb_pihakketiga[".inlineAddFields"] = array();

$tdatatb_pihakketiga[".editFields"] = array();
$tdatatb_pihakketiga[".editFields"][] = "namainstansi";
$tdatatb_pihakketiga[".editFields"][] = "jeniskeluar";
$tdatatb_pihakketiga[".editFields"][] = "amount";
$tdatatb_pihakketiga[".editFields"][] = "tglbayar";
$tdatatb_pihakketiga[".editFields"][] = "referensi";

$tdatatb_pihakketiga[".inlineEditFields"] = array();

$tdatatb_pihakketiga[".exportFields"] = array();
$tdatatb_pihakketiga[".exportFields"][] = "namainstansi";
$tdatatb_pihakketiga[".exportFields"][] = "jeniskeluar";
$tdatatb_pihakketiga[".exportFields"][] = "amount";
$tdatatb_pihakketiga[".exportFields"][] = "tglbayar";
$tdatatb_pihakketiga[".exportFields"][] = "referensi";

$tdatatb_pihakketiga[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "tb_pihakketiga";
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
	
		
		
	$tdatatb_pihakketiga["id"] = $fdata;
//	namainstansi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "namainstansi";
	$fdata["GoodName"] = "namainstansi";
	$fdata["ownerTable"] = "tb_pihakketiga";
	$fdata["Label"] = "NAMA INSTANSI"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "namainstansi"; 
		$fdata["FullName"] = "namainstansi";
	
		
		
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
	
		$edata["inputStyle"] = " width:248px;";
	$edata["controlWidth"] = 248;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_pihakketiga["namainstansi"] = $fdata;
//	jeniskeluar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "jeniskeluar";
	$fdata["GoodName"] = "jeniskeluar";
	$fdata["ownerTable"] = "tb_pihakketiga";
	$fdata["Label"] = "JENIS KELUAR"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "jeniskeluar"; 
		$fdata["FullName"] = "jeniskeluar";
	
		
		
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
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		$edata["inputStyle"] = " width:251px;";
	$edata["controlWidth"] = 251;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_pihakketiga["jeniskeluar"] = $fdata;
//	amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "amount";
	$fdata["GoodName"] = "amount";
	$fdata["ownerTable"] = "tb_pihakketiga";
	$fdata["Label"] = "JUMLAH KELUAR"; 
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
	
		
		
	$tdatatb_pihakketiga["amount"] = $fdata;
//	tglbayar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "tglbayar";
	$fdata["GoodName"] = "tglbayar";
	$fdata["ownerTable"] = "tb_pihakketiga";
	$fdata["Label"] = "TGL PEMBAYARAN"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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
	
		
		
	$tdatatb_pihakketiga["tglbayar"] = $fdata;
//	referensi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "referensi";
	$fdata["GoodName"] = "referensi";
	$fdata["ownerTable"] = "tb_pihakketiga";
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
	
		
		
	$tdatatb_pihakketiga["referensi"] = $fdata;

	
$tables_data["tb_pihakketiga"]=&$tdatatb_pihakketiga;
$field_labels["tb_pihakketiga"] = &$fieldLabelstb_pihakketiga;
$fieldToolTips["tb_pihakketiga"] = &$fieldToolTipstb_pihakketiga;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tb_pihakketiga"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["tb_pihakketiga"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_tb_pihakketiga()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   namainstansi,   jeniskeluar,   amount,   tglbayar,   referensi";
$proto0["m_strFrom"] = "FROM tb_pihakketiga";
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
	"m_strTable" => "tb_pihakketiga"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "namainstansi",
	"m_strTable" => "tb_pihakketiga"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "jeniskeluar",
	"m_strTable" => "tb_pihakketiga"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "tb_pihakketiga"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "tglbayar",
	"m_strTable" => "tb_pihakketiga"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "referensi",
	"m_strTable" => "tb_pihakketiga"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "tb_pihakketiga";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "id";
$proto18["m_columns"][] = "namainstansi";
$proto18["m_columns"][] = "jeniskeluar";
$proto18["m_columns"][] = "amount";
$proto18["m_columns"][] = "tglbayar";
$proto18["m_columns"][] = "referensi";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_alias"] = "";
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = "0";
$proto19["m_inBrackets"] = "0";
$proto19["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tb_pihakketiga = createSqlQuery_tb_pihakketiga();
						$tdatatb_pihakketiga[".sqlquery"] = $queryData_tb_pihakketiga;
	
if(isset($tdatatb_pihakketiga["field2"])){
	$tdatatb_pihakketiga["field2"]["LookupTable"] = "carscars_view";
	$tdatatb_pihakketiga["field2"]["LookupOrderBy"] = "name";
	$tdatatb_pihakketiga["field2"]["LookupType"] = 4;
	$tdatatb_pihakketiga["field2"]["LinkField"] = "email";
	$tdatatb_pihakketiga["field2"]["DisplayField"] = "name";
	$tdatatb_pihakketiga[".hasCustomViewField"] = true;
}

include_once(getabspath("include/tb_pihakketiga_events.php"));
$tableEvents["tb_pihakketiga"] = new eventclass_tb_pihakketiga;
$tdatatb_pihakketiga[".hasEvents"] = true;

$cipherer = new RunnerCipherer("tb_pihakketiga");

?>