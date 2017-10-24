$(document).ready(function() {
$("#value_payfor_1").change(function(){
        alert();
});
$('#value_nip_1').keypress(function(event){
 	var keycode = (event.keyCode ? event.keyCode : event.which);
	if(keycode == '13'){
		makeAjaxRequestjeneng();	
		makeAjaxRequestdept();
		makeAjaxRequestsect();
		makeAjaxRequestposisi();
	}
});
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
