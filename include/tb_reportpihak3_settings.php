<?php
require_once(getabspath("classes/cipherer.php"));
$tdatatb_reportpihak3 = array();
	$tdatatb_reportpihak3[".NumberOfChars"] = 80; 
	$tdatatb_reportpihak3[".ShortName"] = "tb_reportpihak3";
	$tdatatb_reportpihak3[".OwnerID"] = "";
	$tdatatb_reportpihak3[".OriginalTable"] = "tb_reportpihak3";

//	field labels
$fieldLabelstb_reportpihak3 = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstb_reportpihak3["English"] = array();
	$fieldToolTipstb_reportpihak3["English"] = array();
	$fieldLabelstb_reportpihak3["English"]["namainstansi"] = "NAMA INSTANSI";
	$fieldToolTipstb_reportpihak3["English"]["namainstansi"] = "";
	$fieldLabelstb_reportpihak3["English"]["jenisbayar"] = "JENIS PEMBAYARAN";
	$fieldToolTipstb_reportpihak3["English"]["jenisbayar"] = "";
	$fieldLabelstb_reportpihak3["English"]["jumlahe"] = "JUMLAH PEMBAYARAN";
	$fieldToolTipstb_reportpihak3["English"]["jumlahe"] = "";
	$fieldLabelstb_reportpihak3["English"]["tahun"] = "TAHUN";
	$fieldToolTipstb_reportpihak3["English"]["tahun"] = "";
	$fieldLabelstb_reportpihak3["English"]["nomer"] = "NO";
	$fieldToolTipstb_reportpihak3["English"]["nomer"] = "";
	if (count($fieldToolTipstb_reportpihak3["English"]))
		$tdatatb_reportpihak3[".isUseToolTips"] = true;
}
	
	
	$tdatatb_reportpihak3[".NCSearch"] = true;



$tdatatb_reportpihak3[".shortTableName"] = "tb_reportpihak3";
$tdatatb_reportpihak3[".nSecOptions"] = 0;
$tdatatb_reportpihak3[".recsPerRowList"] = 1;
$tdatatb_reportpihak3[".mainTableOwnerID"] = "";
$tdatatb_reportpihak3[".moveNext"] = 1;
$tdatatb_reportpihak3[".nType"] = 0;

$tdatatb_reportpihak3[".strOriginalTableName"] = "tb_reportpihak3";




$tdatatb_reportpihak3[".showAddInPopup"] = false;

$tdatatb_reportpihak3[".showEditInPopup"] = false;

$tdatatb_reportpihak3[".showViewInPopup"] = false;

$tdatatb_reportpihak3[".fieldsForRegister"] = array();

$tdatatb_reportpihak3[".listAjax"] = false;

	$tdatatb_reportpihak3[".audit"] = false;

	$tdatatb_reportpihak3[".locking"] = false;

$tdatatb_reportpihak3[".listIcons"] = true;

$tdatatb_reportpihak3[".exportTo"] = true;

$tdatatb_reportpihak3[".printFriendly"] = true;


$tdatatb_reportpihak3[".showSimpleSearchOptions"] = false;

$tdatatb_reportpihak3[".showSearchPanel"] = true;

if (isMobile())
	$tdatatb_reportpihak3[".isUseAjaxSuggest"] = false;
else 
	$tdatatb_reportpihak3[".isUseAjaxSuggest"] = true;

$tdatatb_reportpihak3[".rowHighlite"] = true;

// button handlers file names

$tdatatb_reportpihak3[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatb_reportpihak3[".isUseTimeForSearch"] = false;




$tdatatb_reportpihak3[".allSearchFields"] = array();

$tdatatb_reportpihak3[".allSearchFields"][] = "namainstansi";
$tdatatb_reportpihak3[".allSearchFields"][] = "jenisbayar";
$tdatatb_reportpihak3[".allSearchFields"][] = "tahun";

$tdatatb_reportpihak3[".googleLikeFields"][] = "nomer";
$tdatatb_reportpihak3[".googleLikeFields"][] = "namainstansi";
$tdatatb_reportpihak3[".googleLikeFields"][] = "jenisbayar";
$tdatatb_reportpihak3[".googleLikeFields"][] = "jumlahe";
$tdatatb_reportpihak3[".googleLikeFields"][] = "tahun";


$tdatatb_reportpihak3[".advSearchFields"][] = "namainstansi";
$tdatatb_reportpihak3[".advSearchFields"][] = "jenisbayar";
$tdatatb_reportpihak3[".advSearchFields"][] = "tahun";

$tdatatb_reportpihak3[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatatb_reportpihak3[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatb_reportpihak3[".strOrderBy"] = $tstrOrderBy;

$tdatatb_reportpihak3[".orderindexes"] = array();

$tdatatb_reportpihak3[".sqlHead"] = "SELECT (@row:=@row+1) AS nomer,  namainstansi,   jenisbayar,   jumlahe,   tahun";
$tdatatb_reportpihak3[".sqlFrom"] = "FROM tb_reportpihak3,(SELECT @row:=0) AS row_count";
$tdatatb_reportpihak3[".sqlWhereExpr"] = "";
$tdatatb_reportpihak3[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatb_reportpihak3[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatb_reportpihak3[".arrGroupsPerPage"] = $arrGPP;

$tableKeystb_reportpihak3 = array();
$tdatatb_reportpihak3[".Keys"] = $tableKeystb_reportpihak3;

$tdatatb_reportpihak3[".listFields"] = array();
$tdatatb_reportpihak3[".listFields"][] = "nomer";
$tdatatb_reportpihak3[".listFields"][] = "namainstansi";
$tdatatb_reportpihak3[".listFields"][] = "jenisbayar";
$tdatatb_reportpihak3[".listFields"][] = "jumlahe";

$tdatatb_reportpihak3[".viewFields"] = array();

$tdatatb_reportpihak3[".addFields"] = array();

$tdatatb_reportpihak3[".inlineAddFields"] = array();

$tdatatb_reportpihak3[".editFields"] = array();

$tdatatb_reportpihak3[".inlineEditFields"] = array();

$tdatatb_reportpihak3[".exportFields"] = array();
$tdatatb_reportpihak3[".exportFields"][] = "nomer";
$tdatatb_reportpihak3[".exportFields"][] = "namainstansi";
$tdatatb_reportpihak3[".exportFields"][] = "jenisbayar";
$tdatatb_reportpihak3[".exportFields"][] = "jumlahe";
$tdatatb_reportpihak3[".exportFields"][] = "tahun";

$tdatatb_reportpihak3[".printFields"] = array();

//	nomer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "nomer";
	$fdata["GoodName"] = "nomer";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "NO"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "nomer"; 
		$fdata["FullName"] = "(@row:=@row+1)";
	
		
		
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
	
		
		
	$tdatatb_reportpihak3["nomer"] = $fdata;
//	namainstansi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "namainstansi";
	$fdata["GoodName"] = "namainstansi";
	$fdata["ownerTable"] = "tb_reportpihak3";
	$fdata["Label"] = "NAMA INSTANSI"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
			$edata["EditParams"].= " maxlength=30";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatb_reportpihak3["namainstansi"] = $fdata;
//	jenisbayar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "jenisbayar";
	$fdata["GoodName"] = "jenisbayar";
	$fdata["ownerTable"] = "tb_reportpihak3";
	$fdata["Label"] = "JENIS PEMBAYARAN"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "jenisbayar"; 
		$fdata["FullName"] = "jenisbayar";
	
		
		
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
	
		
		
	$tdatatb_reportpihak3["jenisbayar"] = $fdata;
//	jumlahe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "jumlahe";
	$fdata["GoodName"] = "jumlahe";
	$fdata["ownerTable"] = "tb_reportpihak3";
	$fdata["Label"] = "JUMLAH PEMBAYARAN"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "jumlahe"; 
		$fdata["FullName"] = "jumlahe";
	
		
		
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
	
		
		
	$tdatatb_reportpihak3["jumlahe"] = $fdata;
//	tahun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "tahun";
	$fdata["GoodName"] = "tahun";
	$fdata["ownerTable"] = "tb_reportpihak3";
	$fdata["Label"] = "TAHUN"; 
	$fdata["FieldType"] = 14;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "tahun"; 
		$fdata["FullName"] = "tahun";
	
		
		
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
	
		
		
	$tdatatb_reportpihak3["tahun"] = $fdata;

	
$tables_data["tb_reportpihak3"]=&$tdatatb_reportpihak3;
$field_labels["tb_reportpihak3"] = &$fieldLabelstb_reportpihak3;
$fieldToolTips["tb_reportpihak3"] = &$fieldToolTipstb_reportpihak3;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tb_reportpihak3"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["tb_reportpihak3"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_tb_reportpihak3()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "(@row:=@row+1) AS nomer,  namainstansi,   jenisbayar,   jumlahe,   tahun";
$proto0["m_strFrom"] = "FROM tb_reportpihak3,(SELECT @row:=0) AS row_count";
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
	"m_sql" => "(@row:=@row+1)"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "nomer";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "namainstansi",
	"m_strTable" => "tb_reportpihak3"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "jenisbayar",
	"m_strTable" => "tb_reportpihak3"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "jumlahe",
	"m_strTable" => "tb_reportpihak3"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "tahun",
	"m_strTable" => "tb_reportpihak3"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "tb_reportpihak3";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "id";
$proto16["m_columns"][] = "namainstansi";
$proto16["m_columns"][] = "jenisbayar";
$proto16["m_columns"][] = "jumlahe";
$proto16["m_columns"][] = "tahun";
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
$proto20["m_strFieldList"] = "@row:=0";
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
	"m_sql" => "@row:=0"
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
$queryData_tb_reportpihak3 = createSqlQuery_tb_reportpihak3();
					$tdatatb_reportpihak3[".sqlquery"] = $queryData_tb_reportpihak3;
	
if(isset($tdatatb_reportpihak3["field2"])){
	$tdatatb_reportpihak3["field2"]["LookupTable"] = "carscars_view";
	$tdatatb_reportpihak3["field2"]["LookupOrderBy"] = "name";
	$tdatatb_reportpihak3["field2"]["LookupType"] = 4;
	$tdatatb_reportpihak3["field2"]["LinkField"] = "email";
	$tdatatb_reportpihak3["field2"]["DisplayField"] = "name";
	$tdatatb_reportpihak3[".hasCustomViewField"] = true;
}

include_once(getabspath("include/tb_reportpihak3_events.php"));
$tableEvents["tb_reportpihak3"] = new eventclass_tb_reportpihak3;
$tdatatb_reportpihak3[".hasEvents"] = true;

$cipherer = new RunnerCipherer("tb_reportpihak3");

?>