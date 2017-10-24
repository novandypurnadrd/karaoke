$(document).ready(function() {

	/* MAIN MENU */
	$('#main-menu > li:has(ul.sub-menu)').addClass('parent');
	$('ul.sub-menu > li:has(ul.sub-menu) > a').addClass('parent');

	$('#menu-toggle').click(function() {
		$('#main-menu').slideToggle(300);
		return false;
	});

	$(window).resize(function() {
		if ($(window).width() > 700) {
			$('#main-menu').removeAttr('style');
		}
	});
$("#value_payfor_1").change(function(){
	str=document.getElementById("value_nip_1").value;
	forwho=document.getElementById("value_payfor_1").value;
	showUser(str,forwho);
function showUser(str,forwho)
{
if (str=="")
  {
  document.getElementById("value_namapayfor_1").value="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("value_namapayfor_1").value=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","json/getuser.php?q="+str+"&r="+forwho,true);
xmlhttp.send();
}
});
$('#value_nip_1').keypress(function(event){
 	var keycode = (event.keyCode ? event.keyCode : event.which);
	if(keycode == '13'){
		makeAjaxRequestjeneng();	
		makeAjaxRequestdept();
		makeAjaxRequestsect();
		makeAjaxRequestposisi();
		str=document.getElementById("value_nip_1").value;
		forwho=document.getElementById("value_payfor_1").value;
		untukbayar(str,forwho);
	} 
});
function untukbayar(str,forwho)
{
if (str=="")
  {
  document.getElementById("value_namapayfor_1").value="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("value_namapayfor_1").value=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","json/getuser.php?q="+str+"&r="+forwho,true);
xmlhttp.send();
}
function makeAjaxRequestjeneng() {
	var type = $('input#value_nip_1').val();
	var data = {jeneng : type}
	$.ajax({
		data : data,
		url : 'json/jeneng.php',
		global : false,
		type : "GET",
		success: function(result) {
			$("input#value_nama_1:text").val(result);
		}
	});
	}
function makeAjaxRequestdept() {
	var type = $('input#value_nip_1').val();
	var data = {jeneng : type}
	$.ajax({
		data : data,
		url : 'json/dept.php',
		global : false,
		type : "GET",
		success: function(result) {
			$("input#value_dept_1:text").val(result);
		}
	});
	}
function makeAjaxRequestsect() {
	var type = $('input#value_nip_1').val();
	var data = {jeneng : type}
	$.ajax({
		data : data,
		url : 'json/section.php',
		global : false,
		type : "GET",
		success: function(result) {
			$("input#value_section_1:text").val(result);
		}
	});
	}
function makeAjaxRequestposisi() {
	var type = $('input#value_nip_1').val();
	var data = {posisi : type}
	$.ajax({
		data : data,
		url : 'json/posisi.php',
		global : false,
		type : "GET",
		success: function(result) {
			$("input#value_posisi_1:text").val(result);
		}
	});
	}
});