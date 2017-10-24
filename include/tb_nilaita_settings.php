<?php
require_once(getabspath("classes/cipherer.php"));
$tdatatb_nilaita = array();
	$tdatatb_nilaita[".NumberOfChars"] = 80; 
	$tdatatb_nilaita[".ShortName"] = "tb_nilaita";
	$tdatatb_nilaita[".OwnerID"] = "";
	$tdatatb_nilaita[".OriginalTable"] = "tb_nilaita";

//	field labels
$fieldLabelstb_nilaita = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstb_nilaita["English"] = array();
	$fieldToolTipstb_nilaita["English"] = array();
	$fieldLabelstb_nilaita["English"]["id"] = "Id";
	$fieldToolTipstb_nilaita["English"]["id"] = "";
	$fieldLabelstb_nilaita["English"]["tujuan"] = "TUJUAN";
	$fieldToolTipstb_nilaita["English"]["tujuan"] = "";
	$fieldLabelstb_nilaita["English"]["nilaita"] = "NILAI TA";
	$fieldToolTipstb_nilaita["English"]["nilaita"] = "";
	$fieldLabelstb_nilaita["English"][""] = "";
	$fieldToolTipstb_nilaita["English"][""] = "";
	$fieldLabelstb_nilaita["English"][""] = "Tb Nilaita";
	$fieldToolTipstb_nilaita["English"][""] = "";
	$fieldLabelstb_nilaita["English"]["forpay"] = "Forpay";
	$fieldToolTipstb_nilaita["English"]["forpay"] = "";
	$fieldLabelstb_nilaita["English"]["amount"] = "Amount";
	$fieldToolTipstb_nilaita["English"]["amount"] = "";
	if (count($fieldToolTipstb_nilaita["English"]))
		$tdatatb_nilaita[".isUseToolTips"] = true;
}
	
	
	$tdatatb_nilaita[".NCSearch"] = true;



$tdatatb_nilaita[".shortTableName"] = "tb_nilaita";
$tdatatb_nilaita[".nSecOptions"] = 0;
$tdatatb_nilaita[".recsPerRowList"] = 1;
$tdatatb_nilaita[".mainTableOwnerID"] = "";
$tdatatb_nilaita[".moveNext"] = 1;
$tdatatb_nilaita[".nType"] = 0;

$tdatatb_nilaita[".strOriginalTableName"] = "tb_nilaita";




$tdatatb_nilaita[".showAddInPopup"] = false;

$tdatatb_nilaita[".showEditInPopup"] = false;

$tdatatb_nilaita[".showViewInPopup"] = false;

$tdatatb_nilaita[".fieldsForRegister"] = array();

$tdatatb_nilaita[".listAjax"] = false;

	$tdatatb_nilaita[".audit"] = false;

	$tdatatb_nilaita[".locking"] = false;

$tdatatb_nilaita[".listIcons"] = true;
$tdatatb_nilaita[".edit"] = true;
$tdatatb_nilaita[".view"] = true;

$tdatatb_nilaita[".exportTo"] = true;


$tdatatb_nilaita[".delete"] = true;

$tdatatb_nilaita[".showSimpleSearchOptions"] = false;

$tdatatb_nilaita[".showSearchPanel"] = true;

if (isMobile())
	$tdatatb_nilaita[".isUseAjaxSuggest"] = false;
else 
	$tdatatb_nilaita[".isUseAjaxSuggest"] = true;

$tdatatb_nilaita[".rowHighlite"] = true;

// button handlers file names

$tdatatb_nilaita[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatb_nilaita[".isUseTimeForSearch"] = false;




$tdatatb_nilaita[".allSearchFields"] = array();


$tdatatb_nilaita[".googleLikeFields"][] = "id";
$tdatatb_nilaita[".googleLikeFields"][] = "tujuan";
$tdatatb_nilaita[".googleLikeFields"][] = "nilaita";



$tdatatb_nilaita[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatatb_nilaita[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatb_nilaita[".strOrderBy"] = $tstrOrderBy;

$tdatatb_nilaita[".orderindexes"] = array();

$tdatatb_nilaita[".sqlHead"] = "SELECT id,   tujuan,   nilaita";
$tdatatb_nilaita[".sqlFrom"] = "FROM tb_nilaita";
$tdatatb_nilaita[".sqlWhereExpr"] = "";
$tdatatb_nilaita[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatb_nilaita[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatb_nilaita[".arrGroupsPerPage"] = $arrGPP;

$tableKeystb_nilaita = array();
$tableKeystb_nilaita[] = "id";
$tdatatb_nilaita[".Keys"] = $tableKeystb_nilaita;

$tdatatb_nilaita[".listFields"] = array();
$tdatatb_nilaita[".listFields"][] = "tujuan";
$tdatatb_nilaita[".listFields"][] = "nilaita";

$tdatatb_nilaita[".viewFields"] = array();
$tdatatb_nilaita[".viewFields"][] = "tujuan";
$tdatatb_nilaita[".viewFields"][] = "nilaita";

$tdatatb_nilaita[".addFields"] = array();
$tdatatb_nilaita[".addFields"][] = "tujuan";
$tdatatb_nilaita[".addFields"][] = "nilaita";

$tdatatb_nilaita[".inlineAddFields"] = array();

$tdatatb_nilaita[".editFields"] = array();
$tdatatb_nilaita[".editFields"][] = "tujuan";
$tdatatb_nilaita[".editFields"][] = "nilaita";

$tdatatb_nilaita[".inlineEditFields"] = array();

$tdatatb_nilaita[".exportFields"] = array();
$tdatatb_nilaita[".exportFields"][] = "tujuan";
$tdatatb_nilaita[".exportFields"][] = "nilaita";

$tdatatb_nilaita[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "tb_nilaita";
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
	
		
		
	$tdatatb_nilaita["id"] = $fdata;
//	tujuan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tujuan";
	$fdata["GoodName"] = "tujuan";
	$fdata["ownerTable"] = "tb_nilaita";
	$fdata["Label"] = "TUJUAN"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "tujuan"; 
		$fdata["FullName"] = "tujuan";
	
		
		
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
	
		
		
	$tdatatb_nilaita["tujuan"] = $fdata;
//	nilaita
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nilaita";
	$fdata["GoodName"] = "nilaita";
	$fdata["ownerTable"] = "tb_nilaita";
	$fdata["Label"] = "NILAI TA"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "nilaita"; 
		$fdata["FullName"] = "nilaita";
	
		
		
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
	
		
		
	$tdatatb_nilaita["nilaita"] = $fdata;

	
$tables_data["tb_nilaita"]=&$tdatatb_nilaita;
$field_labels["tb_nilaita"] = &$fieldLabelstb_nilaita;
$fieldToolTips["tb_nilaita"] = &$fieldToolTipstb_nilaita;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tb_nilaita"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["tb_nilaita"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_tb_nilaita()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   tujuan,   nilaita";
$proto0["m_strFrom"] = "FROM tb_nilaita";
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
	"m_strTable" => "tb_nilaita"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "tujuan",
	"m_strTable" => "tb_nilaita"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "nilaita",
	"m_strTable" => "tb_nilaita"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "tb_nilaita";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "id";
$proto12["m_columns"][] = "tujuan";
$proto12["m_columns"][] = "nilaita";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_alias"] = "";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = "0";
$proto13["m_inBrackets"] = "0";
$proto13["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tb_nilaita = createSqlQuery_tb_nilaita();
			$tdatatb_nilaita[".sqlquery"] = $queryData_tb_nilaita;
	
if(isset($tdatatb_nilaita["field2"])){
	$tdatatb_nilaita["field2"]["LookupTable"] = "carscars_view";
	$tdatatb_nilaita["field2"]["LookupOrderBy"] = "name";
	$tdatatb_nilaita["field2"]["LookupType"] = 4;
	$tdatatb_nilaita["field2"]["LinkField"] = "email";
	$tdatatb_nilaita["field2"]["DisplayField"] = "name";
	$tdatatb_nilaita[".hasCustomViewField"] = true;
}

$tableEvents["tb_nilaita"] = new eventsBase;
$tdatatb_nilaita[".hasEvents"] = false;

$cipherer = new RunnerCipherer("tb_nilaita");

?>