<?php
require_once(getabspath("classes/cipherer.php"));
$tdatatb_pihakketiga_Report = array();
	$tdatatb_pihakketiga_Report[".NumberOfChars"] = 80; 
	$tdatatb_pihakketiga_Report[".ShortName"] = "tb_pihakketiga_Report";
	$tdatatb_pihakketiga_Report[".OwnerID"] = "";
	$tdatatb_pihakketiga_Report[".OriginalTable"] = "tb_pihakketiga";

//	field labels
$fieldLabelstb_pihakketiga_Report = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstb_pihakketiga_Report["English"] = array();
	$fieldToolTipstb_pihakketiga_Report["English"] = array();
	$fieldLabelstb_pihakketiga_Report["English"]["id"] = "ID";
	$fieldToolTipstb_pihakketiga_Report["English"]["id"] = "";
	$fieldLabelstb_pihakketiga_Report["English"]["namainstansi"] = "NAMA INSTANSI";
	$fieldToolTipstb_pihakketiga_Report["English"]["namainstansi"] = "";
	$fieldLabelstb_pihakketiga_Report["English"]["jeniskeluar"] = "JENIS PENGELUARAN";
	$fieldToolTipstb_pihakketiga_Report["English"]["jeniskeluar"] = "";
	$fieldLabelstb_pihakketiga_Report["English"]["amount"] = "JUMLAH PEMBAYARAN";
	$fieldToolTipstb_pihakketiga_Report["English"]["amount"] = "";
	$fieldLabelstb_pihakketiga_Report["English"][""] = "";
	$fieldToolTipstb_pihakketiga_Report["English"][""] = "";
	$fieldLabelstb_pihakketiga_Report["English"][""] = "";
	$fieldToolTipstb_pihakketiga_Report["English"][""] = "";
	$fieldLabelstb_pihakketiga_Report["English"]["nomer1"] = "NO";
	$fieldToolTipstb_pihakketiga_Report["English"]["nomer1"] = "";
	if (count($fieldToolTipstb_pihakketiga_Report["English"]))
		$tdatatb_pihakketiga_Report[".isUseToolTips"] = true;
}
	
	
	$tdatatb_pihakketiga_Report[".NCSearch"] = true;



$tdatatb_pihakketiga_Report[".shortTableName"] = "tb_pihakketiga_Report";
$tdatatb_pihakketiga_Report[".nSecOptions"] = 0;
$tdatatb_pihakketiga_Report[".recsPerRowList"] = 1;
$tdatatb_pihakketiga_Report[".mainTableOwnerID"] = "";
$tdatatb_pihakketiga_Report[".moveNext"] = 1;
$tdatatb_pihakketiga_Report[".nType"] = 2;

$tdatatb_pihakketiga_Report[".strOriginalTableName"] = "tb_pihakketiga";




$tdatatb_pihakketiga_Report[".showAddInPopup"] = false;

$tdatatb_pihakketiga_Report[".showEditInPopup"] = false;

$tdatatb_pihakketiga_Report[".showViewInPopup"] = false;

$tdatatb_pihakketiga_Report[".fieldsForRegister"] = array();

$tdatatb_pihakketiga_Report[".listAjax"] = false;

	$tdatatb_pihakketiga_Report[".audit"] = false;

	$tdatatb_pihakketiga_Report[".locking"] = false;

$tdatatb_pihakketiga_Report[".listIcons"] = true;
$tdatatb_pihakketiga_Report[".edit"] = true;
$tdatatb_pihakketiga_Report[".inlineEdit"] = true;
$tdatatb_pihakketiga_Report[".inlineAdd"] = true;
$tdatatb_pihakketiga_Report[".view"] = true;

$tdatatb_pihakketiga_Report[".exportTo"] = true;

$tdatatb_pihakketiga_Report[".printFriendly"] = true;

$tdatatb_pihakketiga_Report[".delete"] = true;

$tdatatb_pihakketiga_Report[".showSimpleSearchOptions"] = false;

$tdatatb_pihakketiga_Report[".showSearchPanel"] = true;

if (isMobile())
	$tdatatb_pihakketiga_Report[".isUseAjaxSuggest"] = false;
else 
	$tdatatb_pihakketiga_Report[".isUseAjaxSuggest"] = true;


// button handlers file names

$tdatatb_pihakketiga_Report[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatb_pihakketiga_Report[".isUseTimeForSearch"] = false;




$tdatatb_pihakketiga_Report[".allSearchFields"] = array();


$tdatatb_pihakketiga_Report[".googleLikeFields"][] = "nomer1";
$tdatatb_pihakketiga_Report[".googleLikeFields"][] = "id";
$tdatatb_pihakketiga_Report[".googleLikeFields"][] = "namainstansi";
$tdatatb_pihakketiga_Report[".googleLikeFields"][] = "jeniskeluar";
$tdatatb_pihakketiga_Report[".googleLikeFields"][] = "amount";


$tdatatb_pihakketiga_Report[".advSearchFields"][] = "nomer1";
$tdatatb_pihakketiga_Report[".advSearchFields"][] = "id";
$tdatatb_pihakketiga_Report[".advSearchFields"][] = "namainstansi";
$tdatatb_pihakketiga_Report[".advSearchFields"][] = "jeniskeluar";
$tdatatb_pihakketiga_Report[".advSearchFields"][] = "amount";

$tdatatb_pihakketiga_Report[".isTableType"] = "report";

$tdatatb_pihakketiga_Report[".reportGroupFields"] = true;
	



// Access doesn't support subqueries from the same table as main




$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatb_pihakketiga_Report[".strOrderBy"] = $tstrOrderBy;

$tdatatb_pihakketiga_Report[".orderindexes"] = array();

$tdatatb_pihakketiga_Report[".sqlHead"] = "SELECT (@row1:=@row1+1) AS nomer1,  id,  namainstansi,  jeniskeluar,  amount";
$tdatatb_pihakketiga_Report[".sqlFrom"] = "FROM tb_pihakketiga,(SELECT @row1:=0) AS row_count";
$tdatatb_pihakketiga_Report[".sqlWhereExpr"] = "";
$tdatatb_pihakketiga_Report[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatb_pihakketiga_Report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatb_pihakketiga_Report[".arrGroupsPerPage"] = $arrGPP;

$tableKeystb_pihakketiga_Report = array();
$tableKeystb_pihakketiga_Report[] = "id";
$tdatatb_pihakketiga_Report[".Keys"] = $tableKeystb_pihakketiga_Report;

$tdatatb_pihakketiga_Report[".listFields"] = array();
$tdatatb_pihakketiga_Report[".listFields"][] = "nomer1";
$tdatatb_pihakketiga_Report[".listFields"][] = "id";
$tdatatb_pihakketiga_Report[".listFields"][] = "namainstansi";
$tdatatb_pihakketiga_Report[".listFields"][] = "jeniskeluar";
$tdatatb_pihakketiga_Report[".listFields"][] = "amount";

$tdatatb_pihakketiga_Report[".viewFields"] = array();
$tdatatb_pihakketiga_Report[".viewFields"][] = "nomer1";
$tdatatb_pihakketiga_Report[".viewFields"][] = "id";
$tdatatb_pihakketiga_Report[".viewFields"][] = "namainstansi";
$tdatatb_pihakketiga_Report[".viewFields"][] = "jeniskeluar";
$tdatatb_pihakketiga_Report[".viewFields"][] = "amount";

$tdatatb_pihakketiga_Report[".addFields"] = array();
$tdatatb_pihakketiga_Report[".addFields"][] = "namainstansi";
$tdatatb_pihakketiga_Report[".addFields"][] = "jeniskeluar";
$tdatatb_pihakketiga_Report[".addFields"][] = "amount";

$tdatatb_pihakketiga_Report[".inlineAddFields"] = array();
$tdatatb_pihakketiga_Report[".inlineAddFields"][] = "nomer1";
$tdatatb_pihakketiga_Report[".inlineAddFields"][] = "namainstansi";
$tdatatb_pihakketiga_Report[".inlineAddFields"][] = "jeniskeluar";
$tdatatb_pihakketiga_Report[".inlineAddFields"][] = "amount";

$tdatatb_pihakketiga_Report[".editFields"] = array();
$tdatatb_pihakketiga_Report[".editFields"][] = "namainstansi";
$tdatatb_pihakketiga_Report[".editFields"][] = "jeniskeluar";
$tdatatb_pihakketiga_Report[".editFields"][] = "amount";

$tdatatb_pihakketiga_Report[".inlineEditFields"] = array();
$tdatatb_pihakketiga_Report[".inlineEditFields"][] = "nomer1";
$tdatatb_pihakketiga_Report[".inlineEditFields"][] = "namainstansi";
$tdatatb_pihakketiga_Report[".inlineEditFields"][] = "jeniskeluar";
$tdatatb_pihakketiga_Report[".inlineEditFields"][] = "amount";

$tdatatb_pihakketiga_Report[".exportFields"] = array();
$tdatatb_pihakketiga_Report[".exportFields"][] = "nomer1";
$tdatatb_pihakketiga_Report[".exportFields"][] = "id";
$tdatatb_pihakketiga_Report[".exportFields"][] = "namainstansi";
$tdatatb_pihakketiga_Report[".exportFields"][] = "jeniskeluar";
$tdatatb_pihakketiga_Report[".exportFields"][] = "amount";

$tdatatb_pihakketiga_Report[".printFields"] = array();
$tdatatb_pihakketiga_Report[".printFields"][] = "nomer1";
$tdatatb_pihakketiga_Report[".printFields"][] = "id";
$tdatatb_pihakketiga_Report[".printFields"][] = "namainstansi";
$tdatatb_pihakketiga_Report[".printFields"][] = "jeniskeluar";
$tdatatb_pihakketiga_Report[".printFields"][] = "amount";

//	nomer1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "nomer1";
	$fdata["GoodName"] = "nomer1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "NO"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "nomer1"; 
		$fdata["FullName"] = "(@row1:=@row1+1)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_pihakketiga_Report["nomer1"] = $fdata;
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "tb_pihakketiga";
	$fdata["Label"] = "ID"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_pihakketiga_Report["id"] = $fdata;
//	namainstansi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "namainstansi";
	$fdata["GoodName"] = "namainstansi";
	$fdata["ownerTable"] = "tb_pihakketiga";
	$fdata["Label"] = "NAMA INSTANSI"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "namainstansi"; 
		$fdata["FullName"] = "namainstansi";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_pihakketiga_Report["namainstansi"] = $fdata;
//	jeniskeluar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "jeniskeluar";
	$fdata["GoodName"] = "jeniskeluar";
	$fdata["ownerTable"] = "tb_pihakketiga";
	$fdata["Label"] = "JENIS PENGELUARAN"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "jeniskeluar"; 
		$fdata["FullName"] = "jeniskeluar";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_pihakketiga_Report["jeniskeluar"] = $fdata;
//	amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "amount";
	$fdata["GoodName"] = "amount";
	$fdata["ownerTable"] = "tb_pihakketiga";
	$fdata["Label"] = "JUMLAH PEMBAYARAN"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
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
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_pihakketiga_Report["amount"] = $fdata;

	
$tables_data["tb_pihakketiga Report"]=&$tdatatb_pihakketiga_Report;
$field_labels["tb_pihakketiga_Report"] = &$fieldLabelstb_pihakketiga_Report;
$fieldToolTips["tb_pihakketiga Report"] = &$fieldToolTipstb_pihakketiga_Report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tb_pihakketiga Report"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["tb_pihakketiga Report"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_tb_pihakketiga_Report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "(@row1:=@row1+1) AS nomer1,  id,  namainstansi,  jeniskeluar,  amount";
$proto0["m_strFrom"] = "FROM tb_pihakketiga,(SELECT @row1:=0) AS row_count";
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
	"m_sql" => "(@row1:=@row1+1)"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "nomer1";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "tb_pihakketiga"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "namainstansi",
	"m_strTable" => "tb_pihakketiga"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "jeniskeluar",
	"m_strTable" => "tb_pihakketiga"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "tb_pihakketiga"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "tb_pihakketiga";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "id";
$proto16["m_columns"][] = "namainstansi";
$proto16["m_columns"][] = "jeniskeluar";
$proto16["m_columns"][] = "amount";
$proto16["m_columns"][] = "tglbayar";
$proto16["m_columns"][] = "referensi";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_alias"] = "";
$proto17=array();
$proto17["m_sql"] = "";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = "0";
$proto17["m_inBrackets"] = "0";
$proto17["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto0["m_fromlist"][]=$obj;
												$proto19=array();
$proto19["m_link"] = "SQLL_CROSSJOIN";
			$proto20=array();
$proto20["m_strHead"] = "SELECT";
$proto20["m_strFieldList"] = "@row1:=0";
$proto20["m_strFrom"] = "";
$proto20["m_strWhere"] = "";
$proto20["m_strOrderBy"] = "";
$proto20["m_strTail"] = "";
$proto20["cipherer"] = null;
$proto21=array();
$proto21["m_sql"] = "";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = "0";
$proto21["m_inBrackets"] = "0";
$proto21["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto21);

$proto20["m_where"] = $obj;
$proto23=array();
$proto23["m_sql"] = "";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "";
$proto23["m_havingmode"] = "0";
$proto23["m_inBrackets"] = "0";
$proto23["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto23);

$proto20["m_having"] = $obj;
$proto20["m_fieldlist"] = array();
						$proto25=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "@row1:=0"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto20["m_fieldlist"][]=$obj;
$proto20["m_fromlist"] = array();
$proto20["m_groupby"] = array();
$proto20["m_orderby"] = array();
$obj = new SQLQuery($proto20);

$proto19["m_table"] = $obj;
$proto19["m_alias"] = "row_count";
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

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tb_pihakketiga_Report = createSqlQuery_tb_pihakketiga_Report();
					$tdatatb_pihakketiga_Report[".sqlquery"] = $queryData_tb_pihakketiga_Report;
	
if(isset($tdatatb_pihakketiga_Report["field2"])){
	$tdatatb_pihakketiga_Report["field2"]["LookupTable"] = "carscars_view";
	$tdatatb_pihakketiga_Report["field2"]["LookupOrderBy"] = "name";
	$tdatatb_pihakketiga_Report["field2"]["LookupType"] = 4;
	$tdatatb_pihakketiga_Report["field2"]["LinkField"] = "email";
	$tdatatb_pihakketiga_Report["field2"]["DisplayField"] = "name";
	$tdatatb_pihakketiga_Report[".hasCustomViewField"] = true;
}

include_once(getabspath("include/tb_pihakketiga_Report_events.php"));
$tableEvents["tb_pihakketiga Report"] = new eventclass_tb_pihakketiga_Report;
$tdatatb_pihakketiga_Report[".hasEvents"] = true;

$cipherer = new RunnerCipherer("tb_pihakketiga Report");

?>