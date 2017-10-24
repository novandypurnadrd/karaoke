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
	var str=document.getElementById("value_nip_1").value;
	var forwho=document.getElementById("value_payfor_1").value;
	untukbayar(str,forwho);
});
$("#value_forpay_1").change(function(){
	var poh=document.getElementById("value_forpay_1").value;
	duwitta(poh);
});
$('#value_nip_1').keypress(function(event){
 	var keycode = (event.keyCode ? event.keyCode : event.which);
	if(keycode == '13'){
		jalukdiajax();
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
function jalukdiajax(){
var str=document.getElementById("value_nip_1").value
var url="json/jsondata.php?nik="+str;
$.getJSON(url,function(data){
$.each(data.users, function(i,user){
var myText="";
var jeneng="";
var dept="";
if (user==undefined||user == null || user.length == 0) {
	jeneng="";
	dept="";
	sect="";
	pos="";
	myText="";
}
else {
	jeneng=user.Nama_Karyawan;
	dept=user.Department;
	sect=user.Section;
	pos=user.Position;
	myText=user.POH;
}
document.getElementById("value_nama_1").value=jeneng;
document.getElementById("value_dept_1").value=dept;
document.getElementById("value_section_1").value=sect;
document.getElementById("value_posisi_1").value=pos;

});
});
}
function duwitta(poh)
{
if (poh=="")
  {
  document.getElementById("value_amount_1").value="";
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
	a=eval(xmlhttp.responseText);
	if (a==0||a==undefined||a==null) { a=""; }
    document.getElementById("value_amount_1").value=a;
    }
  }
xmlhttp.open("GET","json/getnilta.php?q="+poh,true);
xmlhttp.send();
}
});