<?php
require_once(getabspath("classes/cipherer.php"));
$tdatatb_piltugas = array();
	$tdatatb_piltugas[".NumberOfChars"] = 80; 
	$tdatatb_piltugas[".ShortName"] = "tb_piltugas";
	$tdatatb_piltugas[".OwnerID"] = "";
	$tdatatb_piltugas[".OriginalTable"] = "tb_piltugas";

//	field labels
$fieldLabelstb_piltugas = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstb_piltugas["English"] = array();
	$fieldToolTipstb_piltugas["English"] = array();
	$fieldLabelstb_piltugas["English"]["id"] = "Id";
	$fieldToolTipstb_piltugas["English"]["id"] = "";
	$fieldLabelstb_piltugas["English"]["pilihan"] = "Pilihan";
	$fieldToolTipstb_piltugas["English"]["pilihan"] = "";
	$fieldLabelstb_piltugas["English"][""] = "";
	$fieldToolTipstb_piltugas["English"][""] = "";
	$fieldLabelstb_piltugas["English"][""] = "";
	$fieldToolTipstb_piltugas["English"][""] = "";
	$fieldLabelstb_piltugas["English"]["forpay"] = "Forpay";
	$fieldToolTipstb_piltugas["English"]["forpay"] = "";
	if (count($fieldToolTipstb_piltugas["English"]))
		$tdatatb_piltugas[".isUseToolTips"] = true;
}
	
	
	$tdatatb_piltugas[".NCSearch"] = true;



$tdatatb_piltugas[".shortTableName"] = "tb_piltugas";
$tdatatb_piltugas[".nSecOptions"] = 0;
$tdatatb_piltugas[".recsPerRowList"] = 1;
$tdatatb_piltugas[".mainTableOwnerID"] = "";
$tdatatb_piltugas[".moveNext"] = 1;
$tdatatb_piltugas[".nType"] = 0;

$tdatatb_piltugas[".strOriginalTableName"] = "tb_piltugas";




$tdatatb_piltugas[".showAddInPopup"] = false;

$tdatatb_piltugas[".showEditInPopup"] = false;

$tdatatb_piltugas[".showViewInPopup"] = false;

$tdatatb_piltugas[".fieldsForRegister"] = array();

$tdatatb_piltugas[".listAjax"] = false;

	$tdatatb_piltugas[".audit"] = false;

	$tdatatb_piltugas[".locking"] = false;

$tdatatb_piltugas[".listIcons"] = true;




$tdatatb_piltugas[".showSimpleSearchOptions"] = false;

$tdatatb_piltugas[".showSearchPanel"] = true;

if (isMobile())
	$tdatatb_piltugas[".isUseAjaxSuggest"] = false;
else 
	$tdatatb_piltugas[".isUseAjaxSuggest"] = true;

$tdatatb_piltugas[".rowHighlite"] = true;

// button handlers file names

$tdatatb_piltugas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatb_piltugas[".isUseTimeForSearch"] = false;




$tdatatb_piltugas[".allSearchFields"] = array();


$tdatatb_piltugas[".googleLikeFields"][] = "id";
$tdatatb_piltugas[".googleLikeFields"][] = "pilihan";


$tdatatb_piltugas[".advSearchFields"][] = "id";
$tdatatb_piltugas[".advSearchFields"][] = "pilihan";

$tdatatb_piltugas[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatatb_piltugas[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatb_piltugas[".strOrderBy"] = $tstrOrderBy;

$tdatatb_piltugas[".orderindexes"] = array();

$tdatatb_piltugas[".sqlHead"] = "SELECT id,   pilihan";
$tdatatb_piltugas[".sqlFrom"] = "FROM tb_piltugas";
$tdatatb_piltugas[".sqlWhereExpr"] = "";
$tdatatb_piltugas[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatb_piltugas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatb_piltugas[".arrGroupsPerPage"] = $arrGPP;

$tableKeystb_piltugas = array();
$tableKeystb_piltugas[] = "id";
$tdatatb_piltugas[".Keys"] = $tableKeystb_piltugas;

$tdatatb_piltugas[".listFields"] = array();
$tdatatb_piltugas[".listFields"][] = "id";
$tdatatb_piltugas[".listFields"][] = "pilihan";

$tdatatb_piltugas[".viewFields"] = array();
$tdatatb_piltugas[".viewFields"][] = "id";
$tdatatb_piltugas[".viewFields"][] = "pilihan";

$tdatatb_piltugas[".addFields"] = array();
$tdatatb_piltugas[".addFields"][] = "pilihan";

$tdatatb_piltugas[".inlineAddFields"] = array();
$tdatatb_piltugas[".inlineAddFields"][] = "pilihan";

$tdatatb_piltugas[".editFields"] = array();
$tdatatb_piltugas[".editFields"][] = "pilihan";

$tdatatb_piltugas[".inlineEditFields"] = array();
$tdatatb_piltugas[".inlineEditFields"][] = "pilihan";

$tdatatb_piltugas[".exportFields"] = array();
$tdatatb_piltugas[".exportFields"][] = "id";
$tdatatb_piltugas[".exportFields"][] = "pilihan";

$tdatatb_piltugas[".printFields"] = array();
$tdatatb_piltugas[".printFields"][] = "id";
$tdatatb_piltugas[".printFields"][] = "pilihan";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "tb_piltugas";
	$fdata["Label"] = "Id"; 
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
	
		
		
	$tdatatb_piltugas["id"] = $fdata;
//	pilihan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "pilihan";
	$fdata["GoodName"] = "pilihan";
	$fdata["ownerTable"] = "tb_piltugas";
	$fdata["Label"] = "Pilihan"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pilihan"; 
		$fdata["FullName"] = "pilihan";
	
		
		
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
	
		
		
	$tdatatb_piltugas["pilihan"] = $fdata;

	
$tables_data["tb_piltugas"]=&$tdatatb_piltugas;
$field_labels["tb_piltugas"] = &$fieldLabelstb_piltugas;
$fieldToolTips["tb_piltugas"] = &$fieldToolTipstb_piltugas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tb_piltugas"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["tb_piltugas"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_tb_piltugas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   pilihan";
$proto0["m_strFrom"] = "FROM tb_piltugas";
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
	"m_strTable" => "tb_piltugas"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "pilihan",
	"m_strTable" => "tb_piltugas"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "tb_piltugas";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "id";
$proto10["m_columns"][] = "pilihan";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_alias"] = "";
$proto11=array();
$proto11["m_sql"] = "";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "";
$proto11["m_havingmode"] = "0";
$proto11["m_inBrackets"] = "0";
$proto11["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto11);

$proto9["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto9);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tb_piltugas = createSqlQuery_tb_piltugas();
		$tdatatb_piltugas[".sqlquery"] = $queryData_tb_piltugas;
	
if(isset($tdatatb_piltugas["field2"])){
	$tdatatb_piltugas["field2"]["LookupTable"] = "carscars_view";
	$tdatatb_piltugas["field2"]["LookupOrderBy"] = "name";
	$tdatatb_piltugas["field2"]["LookupType"] = 4;
	$tdatatb_piltugas["field2"]["LinkField"] = "email";
	$tdatatb_piltugas["field2"]["DisplayField"] = "name";
	$tdatatb_piltugas[".hasCustomViewField"] = true;
}

$tableEvents["tb_piltugas"] = new eventsBase;
$tdatatb_piltugas[".hasEvents"] = false;

$cipherer = new RunnerCipherer("tb_piltugas");

?>